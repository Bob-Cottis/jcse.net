<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Paper;
use App\Models\Comment;
use App\Models\Review;
use App\Helpers\Users;
use App\Helpers\MailTo;

class TestController extends Controller
{
    function testRelations() {
        $s = $this->testUser();
        $s .= $this->testPaper();
        $s .= $this->testComment();
        $s .= $this->testReviews();
        //$s .= $this->testTopics();
        return view('showString',['s'=>$s]);
    }

    function testUser() {
        $s = '<h4>Testing User</h4><p>';
        $user = User::where('id',2065)->first();
        $s .= 'Title = '.$user->title->title.'; Given Name = '.$user->givenName.'; Family Name = '.$user->familyName.'<br />';
        $s .= 'Salutation = '.$user->userprofile->salutation.'<br />';
        $s .= 'Organization = '.$user->organization.'<br />';
        $s .= 'Address = '.$user->userprofile->address1.'; '.$user->userprofile->address2.'; '.$user->userprofile->address3.'</br />';
        $s .= 'Country = '.$user->country->country.'<br />';
        $s .= 'EMail = '.$user->email.'<br />';
        $s .= 'Post Code = '.$user->userprofile->postCode.'<br />';
        $s .= 'Telephone = ('.$user->country->telCode.')'.$user->userprofile->telephone.'<br />';
        $s .= 'Telex = '.$user->userprofile->telex.'<br />';
        $s .= 'Fax = ('.$user->country->telCode.')'.$user->userprofile->Fax.'<br />';
        $s .= 'OrgType = '.$user->userprofile->orgType->organizationType.'<br />';
        $s .= 'Category = '.$user->userprofile->category->category.'<br />';
        $s .= 'Language = '.$user->userprofile->language->language.'<br />';
        $s .= 'Source = '.$user->userprofile->source->source.'<br />';
        $s .= 'JrnlMail = '.$user->userprofile->jrnlMail.'<br />';
        $s .= 'Admin - '.$user->userprofile->admin.'<br />';
        $s .= '</p>';
        return $s;
    }

    function testPaper() {
        $s = '<h4>Testing Paper</h4><p>';
        $pap = Paper::where('id', 1568)->first();
        $s .= 'Title = '.$pap->title.'<br />';
        $s .= 'Author string = '.$pap->authors.'<br />';
        $s .= 'Authors from author table =';
        $authors = $pap->authorCollection;
        foreach ($authors as $author) {
            $s .= $author->title->title . ' ' . $author->givenName . ' ' . $author->familyName.', ';
        }
        $s .= '<br />Author email(s) = '.$pap->authorEmail.'<br />';
        $s .= 'Volume = '.$pap->volume.'; Paper Number = '.$pap->paperNumber.'<br />';
        $ed = $pap->editor;
        if (is_null($ed)) {$s .= 'Editor_id is NULL';}
        else {
            $s .= 'Editor Name = ' . $ed->title->title . ' ' . $ed->givenName . ' ' . $ed->familyName . '<br />';
            $s .= 'Editor Email = ' . $ed->email . '<br />';
        }
        $s .= 'Submission Date = '.$pap->submissionDate.'<br />';
        $s .= 'publication Date = '.$pap->publicationDate.'<br />';
        $s .= 'preprint Date = '.$pap->preprintDate.'<br />';
        $s .= 'preprintPublished = '.$pap->preprintPublished.'<br />';
        $s .= 'paperPublished = '.$pap->paperPublished.'<br />';
        $s .= 'enableComments = '.$pap->enableComments.'<br />';
        $s .= 'acknowledgedPreprint = '.$pap->acknowledgedPreprint.'<br />';
        $s .= 'revisionRequired = '.$pap->revisionRequired.'<br />';
        $s .= 'preprintURL = '.$pap->preprintURL.'<br />';
        $s .= 'paperURL = '.$pap->paperURL.'<br />';
        $s .= 'keywords = '.$pap->keywords.'<br />';
        $s .= 'notes = '.$pap->notes.'<br />';
        $s .= 'abstract = '.$pap->abstract.'<br />';
        $s .= 'status = '.$pap->status.'<br />';
        $s .= 'revisionMessage = '.$pap->revisionMessage.'<br />';
        $s .= 'admin_attn_rqd = '.$pap->admin_attn_rqd.'<br />';
        $s .= 'ed_attn_rqd = '.$pap->ed_attn_rqd.'<br />';
        $s .= 'pp_conf_date = '.$pap->pp_conf_date.'<br />';
        $s .= 'refs_assigned = '.$pap->refs_assigned.'<br />';
        $s .= 'revisionReceived = '.$pap->revisionReceived.'<br />';
        $s .= 'paperHTML = '.$pap->paperHTML.'<br />';
        $s .= 'preprintHTML = '.$pap->preprintHTML.'<br />';
        $s .= 'revisionNumber = '.$pap->revisionNumber.'<br />';
        $cA = $pap->correspondingAuthor;
        if(! is_null($cA)) {
            $s .= 'correspondingAuthorID = ' . $cA->id;
            $s .= 'correspondingAuthor = ' . $pap->correspondingAuthor->title->title . ' ' . $pap->correspondingAuthor->givenName . ' ' .
                $pap->correspondingAuthor->familyName . '<br />';
            $leadAuthor = $pap->correspondingAuthor;
            $s .= 'leadAuthor = ' . $leadAuthor->familyName . '<br />';
        }
        $s .= '</p>';
        return $s;
    }

    function testComment() {
        $p = Paper::where('id',17)->first();

        $s = '<h4>Testing Comments</h4>';
        $s .= "<p>Comments for Paper 17 </p><dl>";
        $c = $p->comments;
        foreach ($c as $comment) {
            //dd($comment);
            $s .='<dt>'.$comment->subject.'</dt>';
            $s .= '<dd>Comment Author = '.$comment->commAuthor->title->title.' '.$comment->commAuthor->givenName.' '.$comment->commAuthor->familyName.'</dd>';
        }
        $s .= '</dl>';
        $s .= 'Finding comments for author(s):<br />';
        $u = User::where('familyName','Tan')->get();
        foreach ($u as $user) {
            $s .= $user->title->title.' '.$user->givenName.' '.$user->familyName.': ';
            $comments = Comment::where('commAuthor_id',$user->id)->get();
            if (! $comments->count()) {
                $s .= 'no comment';
            }
            else {
                foreach ($comments as $c) {
                    $s .= $c->id.':'.$c->subject.', ';
                }
            }
            $s .= '<br />';
        }

        return $s;
    }

    function testReviews() {
        $s = '<h4>Testing Reviews</h4>';
        $papers = Paper::select('id')->get();
        foreach($papers as $p) {
            $s .= '<p>Paper '.$p->id.'</p>';
            $r = $p->reviews;
            $s .= '<dl>';
            foreach ($r as $ref) {
                if(! is_null($ref->user)) {
                    $s .= '<dl>Reviewer ' . $ref->user->title->title . ' ' . $ref->user->givenName . ' ' . $ref->user->familyName . '; email: ' . $ref->user->email . '</dl>';
                }
                else{
                    $s .= '<dl>Review is nul</dl>';
                }
                    $s .= '<dd>Date requested: ' . $ref->dateSent . ' Date responded: ' . $ref->dateResponded . ' Date Reminded: ' . $ref->dateReminded . '</dd>';
                    $s .= '<dd>Paper_published: ' . ($ref->paperPublished ? 'yes' : 'no') . '</dd>';

            }
        }
        $s .= '</dl>';

        return $s;
    }

    function testTopics() {
        $s = '<h4>Testing Topics</h4>';
        $p = \App\Models\Paper::where('id',1569)->first();
        $p->topics()->sync([3,12,23,44]);
        $pt = $p->topics;
        $u = \App\Models\User::where('id',2065)->first();
        $u->topics()->sync([3,12,23,44]);
        $s .= '<dl>Topics</dl><dd>Topics: ';
        foreach ($pt as $topic) {
            $s .= '"'.$topic->topic.'", ';
        }
        $s .= '</dd>';
        return $s;
    }

    /*function testfunction()
    {
        $ret = \App\Helpers\Users::findUsers('s.b. lyon');
        //eval($func);
        dd($ret);
        return $ret;
    }

    function testDisplayPost(Request $request) {
    dd($request);
    }*/

    function testfunction() {
        $editorID = config('jrnl.editorID');
        dd($editorID);
    }
}

