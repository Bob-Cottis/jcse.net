<?php

namespace App\Http\Controllers;

use App\Helpers\MailTo;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\Paper;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class MyJrnlController extends Controller
{
    //
    function home() {
        $user = auth()->user();
        // get authored papers
        $papers = $user->papers;
        $papersIncomplete = $papers->where('preprintPublished',0)->where('paperPublished',0);
        $preprintsPublished = $papers->where('preprintPublished',1)->where('paperPublished',0);
        $papersPublished = $papers->where('preprintPublished',1)->where('paperPublished',1);
        //dd($user,$papersIncomplete,$preprintsPublished,$papersPublished);
        $comments = $user->comments;
        $editing = $user->editor;
        $reviews = $user->reviews->where('dateSent','!=',NULL);
        $revWaitingForAcceptance = $reviews->where('dateResponded','=',NULL);
        $reviews = $reviews->where('dateResponded','!=',NULL)->where('agreed',1);
        $revWaitingForReview = $reviews->where('completed',0);
        $revReviewCompleted = $reviews->where('completed',1);
        //dd($user,$revWaitingForAcceptance,$revWaitingForReview,$revReviewCompleted);
        //dd($comments,$editing,$reviewing);
        //dump($user->id);
/*        $recipients = \DB::select('select message_id from recipients where user_id = ?',[$user->id]);
        $ccs = \DB::select('select message_id from ccs where user_id = ?',[$user->id]);
        $bccs = \DB::select('select message_id from bccs where user_id = ?,[$user->id]');
        dd($recipients,$ccs,$bccs);
        $messages = Message::where('source_id',$user->id)
            ->orWhereIn($user->id,$recipient)
            ->orWhereIn($user->id,'ccs')
            ->get();
        // dd($messages);*/
        // dd($reviewing);
        $data = ['shortName'=>config('jrnl.shortName'),'user'=>$user,'papersIncomplete'=>$papersIncomplete,
            'preprintsPublished'=>$preprintsPublished,'papersPublished'=>$papersPublished,'comments'=>$comments,
            'editing'=>$editing,'revWaitingForAcceptance'=>$revWaitingForAcceptance,'revWaitingForReview'=>$revWaitingForReview,
            '$revReviewCompleted'=>$revReviewCompleted /*,'messages'=>$messages*/];
        // dd($data);
        return view('myJrnl.myJrnlHome',$data);
    }

    function editPaper($vol,$pap,$rev=null) {
        //return view('underConstruction');
        if(is_null($rev)) {
            $paper = Paper::where('volume',$vol)->where('paperNumber',$pap)
                ->orderBy('revisionNumber','desc')
                ->first();
        }
        else {
            $paper = Paper::where('volume', $vol)
                ->where('paperNumber', $pap)
                ->where('revisionNumber', $rev)
                ->first();
        }
        //dd($paper);
        if($paper->paperPublished) {
            // only allow corrections to registered authors for now
            // in future permit submission of a revised version as a new paper
            $data = ['shortName'=>config('jrnl.shortName'),];
        }
        elseif($paper->preprintPublished) {
            // show review status, allow modification of authors
            $authorDetails = $paper->get_author_details();
            $reviews = Review::select("id","dateSent","dateResponded","dateReminded","reminderCount","agreed","completed",
                "dateDropped","dateCompleted")
                ->where('paper_id',$paper->id)
                ->get()->toArray();
            //dd($reviews);
            $p = ['paper_id'=>$paper->id,'confirmCode'=>$paper->confirmCode,'user_id'=>auth()->user()->id];
            // dd($p);
            $contactEditorLink = route('myJrnlContactEditor',$p);
            $data = ['paper'=>$paper,'authorDetails'=>$authorDetails,'reviews'=>$reviews,'shortName'=>config('jrn.shortName'),
                'contactEditorLink'=>$contactEditorLink];
            // dd($data);
            return view('myjrnl.authViewPreprint',$data);
        }
        return false;
    }

    function preferences() {
        // set up links
        // view the page
        return view('showPage',['msg'=>'<h4>View and Modify Preferences - Under construction</h4>']);
    }

    function contactEditor($paper_id,$confirmCode,$user_id,$prevMsg=null) {
        $paper = Paper::where('id',$paper_id)->first();
        if($confirmCode <> $paper->confirmCode) {
            return view('error', ['msg' => __('submit.CCError')]);
        }
        $user = auth()->user();
        $authors = $paper->authorCollection->toArray();
        $authors = array_column($authors,'id');
        //dd($authors);
        if(!(in_array($user->id , $authors) or config('app.debug'))) {
            return view('error', ['msg' => 'You need to be the editor of this paper or an administrator to perform this action.']);
        }
        $message = null;
        $msg = Message::where('id',$prevMsg)->first();
        if(!is_null($msg)) {
            $message = $msg->getThread();
        }
        //dd($message);
        $data = ['paper_id'=>$paper_id,'user_id'=>$user_id,'vol'=>$paper->volume,'pap'=>$paper->paperNumber,
            'confirmCode'=>$paper->confirmCode,'replyTo'=>$prevMsg,'message'=>$message];
        return view('myjrnl.contactEditorForm',$data);

    }

    function emailEditor(Request $request) {
        //dd($request);
        $val = $request->validate([
            'confirmCode'=>'required|string|min:30|max:30',
            'paper_id'=>'required|integer|min:1',
            'user_id'=>'required|integer|min:1',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'prevMsg' => 'nullable|integer|min:1'
        ]);
        $copySelf = isset($request->copySelf);
        // dd($copySelf);
        // check confirmCode
        $paper_id = $val['paper_id'];
        $paper = Paper::where('id',$paper_id)->first();
        if($val['confirmCode']!=$paper->confirmCode) {
            return view('error', ['msg' => __('submit.CCError')]);
        }
        // make sure this is the correct user
        $user = auth()->user();
        // dd($user);
        if($user->id <> $val['user_id']) {
            return view('error', ['msg' => 'Not the expected user']);
        }
        $editor = $paper->editor;
        if(is_null($editor)) {
            $editor = User::where('email','bob.cottis@ntlworld.com')->first();
        }
        // log the message

        $contactAuthorLink = route('contactAuthorForm',['paper_id'=>$paper_id,'author_id'=>$val['user_id'],
            'confirmCode'=>$paper->confirmCode]);
        $editPaperLink = route('editPaperByID',['paper_id'=>$paper_id, 'confirmCode'=>$paper->confirmCode]);
        $msgData = ['copySelf'=>$copySelf,'message'=>$val['message'],'subject'=>$val['subject'],'vol'=>$paper->volume,
            'pap'=>$paper->paperNumber,'shortName'=>config('jrnl.shortName'),'contactAuthorLink'=>$contactAuthorLink,
            'editPaperLink'=>$editPaperLink];
        //dd($msgData);
        $mail = new MailTo(1, $user->id, [$editor->id], $copySelf ? [$user->id]:[], [], $val['subject'],
            'review.authToEditorBody',['vol'=>$paper->volume,'pap'=>$paper->paperNumber,'shortName'=>config('jrnl.shortName'),
                'contactAuthorLink'=>$contactAuthorLink,'editPaperLink'=>$editPaperLink,'message'=>$val['message']],
                $val['prevMsg']??0);
        $mailRet = $mail->send();
        if($mailRet['error']) {
            return view('error',['msg'=>$mailRet['error']]);
        }
        $paper->log .= now().' message to editor from user #'.$mailRet['msgID']."\n";
        $paper->save();
        return view('showPage',['msg'=>'myjrnl.editorEmailedMsg','params'=>['link'=>route('home')]]);
    }
}
