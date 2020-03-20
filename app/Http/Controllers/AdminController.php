<?php

namespace App\Http\Controllers;

use App\Helpers\MailTo;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Paper;
use App\Models\Message;
use App\Helpers\Reviews;
use Illuminate\Support\Facades\Mail;


class AdminController extends Controller
{
    //
    function home()
    {
        // check for admin
        if (!auth()->user()->userprofile->admin) {
            return view('error', ['msg' => 'Must be Administrator to perform this function']);
        }
        // check for reviews completed but unpublished
        $completedPapers = Reviews::completed();
        //dd($completedPapers);
        $awaitingNomination = Reviews::awaingNomination();
        //dd($awaitingNomination);
        $notResponded = Reviews::notResponded();
        //dd($notResponded);
        $reviewOverdue = Reviews::reviewOverdue();
        //dd($reviewOverdue);
        $data = [];
        return view('admin.home', ['data' => $data, 'completedPapers' => $completedPapers,
            'awaitingNomination' => $awaitingNomination, 'notResponded' => $notResponded,
            'reviewOverdue' => $reviewOverdue]);
    }

    function adminPapersCompleted($id)
    {
        $paper = Paper::where('id', $id)->first();

        $authCount = count(preg_split('/,|;|and|&/', $paper->authors));
        $data['authCount'] = $authCount;
        $data['shortName'] = config('jrnl.shortName');
        $authDetails = $paper->get_author_details();
        ksort($authDetails);
        $data['regAuths'] = $authDetails;
        $paper = $paper->toArray();
        $data['paper'] = $paper;
        // dd($data);
        return view('admin.editFullPaper', $data);
    }

    function saveMetaData(Request $request)
    {
        $id = $request->id;
        $paper = Paper::where('id', $id)->first();
        $paper->title = $request->title;
        $paper->abstract = $request->abstract;
        $paper->authors = $request->authors;
        $paper->save();
        return response()->json(['success' => 'Revised metadata saved', 'id' => $id]);
    }

    function reloadMetaData(Request $request)
    {
        //dd($request);
        $id = intval($request->id);
        //dd($id);
        $paper = Paper::where('id', $id)->first();
        $data = ['title' => $paper->title, 'abstract' => $paper->abstract, 'authors' => $paper->authors];
        //dd($data);
        return response()->json(['success' => 'Got Simple Ajax Request.', 'data' => $data]);
    }

    function saveRegAuth(Request $request)
    {
        //dd(json_decode($request->input('data')));
        $data = json_decode($request->input('data'));
        //dd($data);
        $paper = Paper::where('id', $data->id)->first();
        //dd($data);
        $syncData = [];
        foreach ($data->regAuths as $ra) {
            //dd($ra);
            $syncData[$ra->auth_id] = ['authorNum' => $ra->authNum];
        }
        //dd($syncData);
        $paper->authorCollection()->sync($syncData);

        return response()->json(['success' => 'Revised author data saved']);
    }

    function reloadRegAuth(Request $request)
    {
        $paper_id = $request->id;
        $paper = Paper::where('id', $paper_id)->first();
        $authDetails = $paper->get_author_details();
        ksort($authDetails);
        $result = ['success'=>'The data have been successfully retrieved from the database','authors'=>$authDetails];
        //dd($result);
        return response(json_encode($result));
    }

    function markDeleted($vol, $pap) {
        $paper = Paper::where('volume',$vol)->
            where('paperNumber',$pap)->
            first();
        $paper->state = 'deleted';
        $paper->save();
        return redirect()->back();
    }

    function contactAuthorForm($paper_id, $author_id, $confirmCode, $prevMsg=null) {
        //dd($paper_id, $author_id, $confirmCode);
        $paper=Paper::where('id',$paper_id)->first();
        if($confirmCode <> $paper->confirmCode) {
            return view('error', ['msg' => __('submit.CCError')]);
        }
        $user = auth()->user();
        if(!($user->id == $paper->editor or $user->userprofile->admin or config('app.debug'))) {
            return view('error', ['msg' => 'You need to be the editor of this paper or an administrator to perform this action.']);
        }
        $message = null;
        $msg = Message::where('id',$prevMsg)->first();
        if(!is_null($msg)) {
            $message = $msg->getThread();
        }
        //dd($message);
        $data = ['paper_id'=>$paper_id,'user_id'=>$author_id,'vol'=>$paper->volume,'pap'=>$paper->paperNumber,
            'confirmCode'=>$paper->confirmCode,'log'=>$paper->log,'message'=>$message,'prevMsg'=>$prevMsg];
        return view('admin.contactAuthorForm',$data);
    }

    function emailAuthor(Request $request) {
        $val = $request->validate([
            'confirmCode'=>'required|string|min:30|max:30',
            'paper_id'=>'required|integer|min:1',
            'user_id'=>'required|integer|min:1',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'prevMsg' => 'nullable|integer|min:1'
        ]);
        //dd($val);
        $author_id = $val['user_id'];
        // check confirmCode
        $paper_id = $val['paper_id'];
        $paper = Paper::where('id',$paper_id)->first();
        if($val['confirmCode']!=$paper->confirmCode) {
            return view('error', ['msg' => __('submit.CCError')]);
        }
        // make sure this is the correct user
        $editor_id = $paper->editor;
        if(is_null($editor_id)) {
            $editor_id = User::select('id')->where('email','bob.cottis@ntlworld.com')->first()->id;
        }
        // dd($editor_id);
        $ed = auth()->user();
        //dd($user->id,'|',$user->userprofile->admin);
        if(!($ed->id == $editor_id or $ed->userprofile->admin or config('app.debug'))) {
            return view('error', ['msg' => 'You need to be the editor of this paper or an administrator to perform this action.']);
        }
        $contactEditorLink = route('myJrnlContactEditor',['paper_id'=>$paper_id,'confirmCode'=>$paper->confirmCode,
            'user_id'=>$author_id]);
        $vol = $paper->volume;
        $pap = $paper->paperNumber;
        $jrnlName = config('jrnl.shortName');
        $msgData = ['message'=>$val['message'],'subject'=>$val['subject'],'vol'=>$vol,'pap'=>$pap,'shortName'=>$jrnlName,
            'contactEditorLink'=>$contactEditorLink,'botName'=>config('jrnl.botName')];
        //dd($msgData);
        $mail = new MailTo(1, $editor_id, [$author_id], [], [], '['.$jrnlName.']Volume '.$vol.' Paper '.$pap,
            "admin.edToAuthorBody",$msgData,$val['prevMsg']??0);
        $mailRet = $mail->send();
        if($mailRet['error']) {
            return view('error',['msg'=>$mailRet['error']]);
        }
       // log the message
        $paper->log .= now().' message #'.$mailRet['msgID'].' to user '.$val['user_id'].' from editor';
        $paper->save();
        /*$mailer = new \App\Mail\admin\edToAuthor($msgData);
        $author = User::where('id',$val['user_id'])->first();

        Mail::to($author['email'])
            ->bcc($user->email)
            ->send($mailer);*/
        return view('showPage',['msg'=>'admin.authorEmailedMsg','params'=>['link'=>route('home')]]);

    }
}
