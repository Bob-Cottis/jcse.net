<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Comment;
use \App\Models\Paper;
use \App\Models\User;
use \App\Models\Userprofile;
use \Carbon\Carbon;

use Illuminate\Support\Facades\Mail;


class CommentController extends Controller
{
    protected function removeTags($s) {
        return strip_tags($s,'<sub><sup><b><i>');
    }

    protected function getCommentListing($comment) {
        if ($comment->html) {$para = ucfirst(__('comments.paragraph'));} else {$para = ucfirst(__('comments.page'));}
        return "<hr />".__('comments.Subject').": ".$comment->subject.'<br />'. $para .': '.$comment->paragraph.
            '<hr />'.$comment->commentText.'<hr />';
    }

    function view($pap_id, $html=0  ) {
        // generate list of comments
        $comments = \DB::select('SELECT `titles`.`title` AS `ttl`, `users`.`givenName` AS `gnm`, `users`.`familyName` AS '.
            '`fnm`, `users`.`organization` AS `org`, `comments`.`subject` AS `sbj`, `comments`.`commentText` AS `txt`, '.
            '`comments`.`created_at` AS `crd`, `comments`.`updated_at` AS `upd`, `comments`.`paper_id` AS `pap_id`, '.
            '`papers`.`volume` as `vol` , `papers`.`paperNumber` as `pap` FROM `comments` JOIN `users` ON '.
            '`comments`.`commAuthor_id` = `users`.`id` JOIN `titles` ON `users`.`title_id` = `titles`.`id` JOIN `papers` '.
            'ON `comments`.`paper_id` = `papers`.`id` WHERE `comments`.`editorConfirmed` = 1 AND comments.paper_id = ? '.
            'order by `comments`.`created_at`',[$pap_id]);
        // return view('varDump',['s'=>$comments]);
        if (is_null($comments) ) {
            return view('error', ['msg' => 'comments.NO_COMMENTS']);
        }
        else
        {
            // produce list
            return view('comments.viewComments',['comments'=>$comments,'html'=>$html]);
        }
    }

    function add($pap_id,$html,$comm_id=null) {
        // set up for form display
        $paper = \App\Models\Paper::select('volume as vol', 'paperNumber as pap' )->
            where('id',$pap_id)->
            first()->
            toArray();
        //
        //return view('varDump',['s'=>$paper]);
        return view('comments.commentForm',['pap_id'=>$pap_id,'comm_id'=>$comm_id,'vol'=>$paper['vol'],'pap'=>$paper['pap'],'html'=>$html]);
    }

    function create(\App\Http\Requests\valComment $request) {
        //return view('varDump',['s'=>$request->toArray()]);
        $paper = Paper::where('id',$request->pap_id)->orderBy('revisionNumber','desc')->first();
        if (is_null($paper)) {
            return view('error',['msg'=>'comments.NO_PAPER']);
        }
        $comm = new Comment;
        $comm->commAuthor_id = $request->user_id;
        $comm->paper_id = $request->pap_id;
        $comm->subject = $this->removeTags($request->subject);
        $comm->paragraph = $request->para;
        $comm->commentText = $this->removeTags($request->commentText);
       if (is_null($paper->editor_id)) {
            $comm->editor_id = 2065;
        }
        else {
            $comm->editor_id = $paper->editor_id;
        }
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $comm->confirmCode = substr(str_shuffle($permitted_chars), 0, 16);
        $comm->save();
        $user = \DB::select('SELECT `email`,`salutation`,`givenName`,`familyName`,`title` FROM users JOIN userprofiles on '.
            '`userprofiles`.`id` = `users`.`userprofile_id` JOIN `titles` ON `titles`.`id` = `users`.`title_id` WHERE `users`.id =?',[$comm->commAuthor_id]);
        $user=$user[0];
        //return view('varDump',['s'=>$user]);
        //return view('showString',['s'=>'Comment save with id:'.$comm->id]);
        // comments has been save, now email comment Author for confirmation
        $jrnlShortName = config('jrnl.shortName');
        $link = route('caConfirm',['id'=>$comm->id,'confirmCode'=>$comm->confirmCode]);
        $commListing = $this->getCommentListing($comm);
        $data = ['vol'=>$paper->volume,'pap'=>$paper->paperNumber,'salutation'=>$user->salutation,
            'jrnlShortName'=>$jrnlShortName,'link'=>$link,'commentListing'=>$commListing,'reminder'=>0];
        //return view('varDump',['s'=>$data]);
        $mailer = new \App\Mail\comments\caConfirmEmail($data);
        Mail::to($user->email)->send($mailer);
        return view('comments.caAcknowledge',['data'=>$data]);
    }

    function caConfirm($id,$confirmCode) {
        $comm = Comment::where('id',$id)->first();
        //return view('varDump',['s'=>$comm]);
        if ($comm->confirmCode != $confirmCode) {
            return view('comments.confirmFail');
        }
        // confirm code is OK
        $comm->authorConfirmed = 1;
        $comm->authConfDate = Carbon::now();
        $comm->state = 'caConfirmed';
        $comm->log .= Carbon::now() . ' comment author confirmed.';
        $comm->save();
        $commAuthor = User::where('id',$comm->commAuthor_id)->first();
        $authorName = $commAuthor->title->title.' '.$commAuthor->givenName.' '.$commAuthor->familyName;
        $commListing = $this->getCommentListing($comm);
        // now need to advise paper author and editor
        $paper = Paper::where('id',$comm->paper_id)->orderBy('revisionNumber','desc')->first();
        if (is_null($paper)) {
            return view('error',['msg'=>'comments.NO_PAPER']);
        }
        // editor
        $editor = $paper->editor;
        if(is_null($editor)) {
            $editorID = config('jrnl.editorID');
            $editor = User::where('id',$editorID)->first();
        }
        //dd($paper,$editor);
        $jrnlShortName = config('jrnl.shortName');
        $link = url('edNotify',['id'=>$id]);
        $rejectLink = url('RejectComment',[$id,$confirmCode,'Editor']);
        $acceptLink = url('edAcceptComment',[$id,$confirmCode]);
        $data = ['vol'=>$paper->volume,'pap'=>$paper->paperNumber,'salutation'=>$editor->userprofile->salutation,
            'jrnlShortName'=>$jrnlShortName,'link'=>$link, 'acceptLink'=>$acceptLink,'rejectLink'=>$rejectLink,
            'authorName'=>$authorName, 'edEmail'=>$editor->email, 'commentListing'=>$commListing,'reminder'=>0];
        //return view('varDump',['s'=>$data]);
        $mailer = new \App\Mail\comments\edNotifyEmail($data);
        Mail::to($editor->email)->send($mailer);
        // paper author(s)
        // first try for paperAuthors entries:
        $authors = $paper->authorCollection;
        // nothing there, so try authorEmail
        if (is_null($authors)) {
            $email = $paper->authorEmail;  // ideally should get from users database so we know that we can contact all authors ...
            if ( strpos($email,',')) {
                $email = explode(',',$email);
            }
        }
        else {
            $email = [];
            foreach ($authors as $author) {
                array_push($email,$author->email);
            }
        }
        $data['link'] = url('paNotify',['id'=>$id]);
        $data['salutation'] = 'Author';
        $mailer = new \App\Mail\comments\paNotifyEmail($data);
        Mail::to($email)->send($mailer);
        //return view('varDump',['s'=>$mailer]);
        //$data->link = Route('caConfirm');

        return view('comments.caConfirm');
    }

    function edAccept($id,$confirmCode) {
        // mark comment as published
        $comm = Comment::where('id',$id)->first();
        if (is_null($comm)) {
            return view('error',['msg'=>__('comments.not_in_database')]);
        }
        if ($comm->confirmCode != $confirmCode) {
            return view('error',['msg'=>__('comments.confirm_code_failure')]);
        }
        $comm->editorConfirmed = 1;
        $comm->state = 'published';
        $comm->save();

        $this->publishComment($comm);
        return view('comments.edConfirm');
    }

    protected function publishComment($comment) {
        // notify interested users
        // author of comment
        $cauthor = \App\Models\User::where('id',$comment->commAuthor_id)->first();
        $email = [['email'=>$cauthor->email]];

        // author(s) of paper
        $paper = Paper::where('id',$comment->paper_id)->first();
        $vol = $paper->volume;
        $pap = $paper->paperNumber;
        $authors = $paper->authorCollection;
        foreach ($authors as $author) {
            array_push($email,['email'=>$author->email]);
        }
        // editor of paper
        $editor = $paper->editor;
        if (! is_null($editor)) {
            array_push($email, ['email' => $editor->email]);
        }
        // users on notify list
        $notifies = $paper->notifies;
        if (! is_null($notifies)) {
            foreach ($notifies as $notify) {
                array_push($email, ['email' => $notify->email]);
            }
        }
        // dd($email);
        $jrnlShortName = config('jrnl.shortName');
        $link = url('viewComments',['id'=>$paper->id]);
        //return view('varDump',['s'=>$data]);
        $data = ['vol'=>$vol,'pap'=>$pap,'jrnlShortName'=>$jrnlShortName,'link'=>$link,'comm'=>$comment,'cauthor'=>$cauthor,
            'editor'=>$editor,'paper'=>$paper];
        $mailer = new \App\Mail\comments\commentPublishedEmail($data);
        // send email to
        Mail::to('notify-list@jcse.org')->cc($email)->send($mailer);
        //return view('varDump',['s'=>$data]);
    }

    function Reject($id,$confirmCode,$src) {
        // editor or administratrator wants to reject comment
        $comment = Comment::where('id',$id)->first();
        if ($comment->confirmCode != $confirmCode) {
            return view('error',['msg'=>'Incorrect Confirmation Code']);
        }
        $commentListing = $this->getCommentListing($comment);
        return view('comments.RejectForm',['id'=>$id,'confirmCode'=>$confirmCode,'src'=>$src,
            'commentListing'=>$commentListing]);
    }

    /*function adReject($id,$confirmCode) {
        // editor or administratrator wants to reject comment
        $comment = Comment::where('id',$id)->first();
        if ($comment->confirmCode != $confirmCode) {
            return view('error',['msg'=>'Incorrect Confirmation Code']);
        }
        return view('comments.RejectForm',['id'=>$id,'confirmCode'=>$confirmCode,'src'=>'Administrator',
            'commentListing'=>$this->getCommentListing($comment)]);
    }*/

    function RejectPost(Request $request) {
        $req = $request->validate([
            'comment_id'=>'required',
            'confirmCode'=>'required',
            'reject-text'=>'required|in:incorrect,illegal,irrelevant,other',
            'reasonText' => 'required_if:reject-text,incorrect',
            'src'=>'required|in:Editor,Administrator'
        ]);
        //dd($req);
        $comment = Comment::where('id',$req['comment_id'])->first();
        $commAuthor = $comment->commAuthor;
        $sal = $commAuthor->userprofile->salutation;
        $email = $commAuthor->email;
        $locale = $commAuthor->userprofile->language->code;
        switch ($req['reject-text']) {
            case 'illegal':
                $msg = __('comments.REJECT_MSG_ILLEGAL1',['src'=>$req['src']],$locale);
                if ($req['reasonText']!= '') {
                    $msg .= __('comments.REJECT_MSG_ILLEGAL2',['src'=>$req['src'],'reason'=>$req['reasonText']],$locale);
                }
                $msg .= __('comments.REJECT_MSG_ILLEGAL3',['src'=>$req['src']],$locale);
                break;
            case 'irrelevant':
                $msg = __('comments.REJECT_MSG_IRRELEVANT',['src'=>$req['src'],'reason'=>$req['reasonText']],$locale);
                break;
            case 'incorrect':
                $msg = __('comments.REJECT_MSG_INCORRECT',['src'=>$req['src'],'reason'=>$req['reasonText']],$locale);
                break;
            case 'other':
                $msg = __('comments.REJECT_MSG_OTHER',['src'=>$req['src'],'reason'=>$req['reasonText']],$locale);
        }
        $data = ['sal'=>$sal,'src'=>$req['src'],'msg'=>$msg];
        $mailer = new \App\Mail\comments\commentRejectedEmail($data);
        Mail::to($email)->send($mailer);
        $comment->state = 'rejected';
        $comment->save();
        return view('comments.commentDeleted',['comm_id'=>$req['comment_id']]);
    }

    function paNotify($id) {
        return view('paNotify',$id);
    }

    function viewComment($id) {
        $comm = Comment::where('id',$id)->first();
        if (is_null($comm)) {
            return view('error',['msg'=>__('COMMENT_NO_LONGER_EXISTS')]);
        }
        $comments = \DB::select('SELECT `titles`.`title` AS `ttl`, `users`.`givenName` AS `gnm`, `users`.`familyName` AS '.
            '`fnm`, `users`.`organization` AS `org`, `comments`.`subject` AS `sbj`, `comments`.`commentText` AS `txt`, '.
            '`comments`.`created_at` AS `crd`, `comments`.`updated_at` AS `upd`, `comments`.`paper_id` AS `pap_id`, '.
            '`papers`.`volume` as `vol` , `papers`.`paperNumber` as `pap` FROM `comments` JOIN `users` ON '.
            '`comments`.`commAuthor_id` = `users`.`id` JOIN `titles` ON `users`.`title_id` = `titles`.`id` JOIN `papers` '.
            'ON `comments`.`paper_id` = `papers`.`id` WHERE `comments`.`editorConfirmed` = 1 AND comments.paper_id = ? '.
            'order by `comments`.`created_at`',[$pap_id]);
        dd($comment);
        if (is_null($comment) ) {
            return view('error', ['msg' => 'comments.NO_COMMENTS']);
        }
        else
        {
            // produce list
            return view('comments.viewComments',['comments'=>$comments,'html'=>$html]);
        }


    }
}
