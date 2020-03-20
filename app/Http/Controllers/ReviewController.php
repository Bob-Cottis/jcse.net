<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;
use App\Models\Userprofile;
use App\Models\Paper;
use App\Models\Title;
use App\Models\Country;
use Illuminate\Support\Facades\Mail;
use App\Helpers\Keywords;
use App\Helpers\Papers;
use App\Helpers\Users;
use Carbon\Carbon;
use App\Http\Requests\SubmitReview;
use App\Http\Requests\SaveReview;

class ReviewController extends Controller
{
    //

    function getReviewerDetails($reviewers ){
        // enter with $reviewers as collection of user ids (['user_id'=>$id])
        // return with $revs as collection of ['id', 'title','givenName','familyName','organization','country']
        // dd($reviewers);
        $revs = [];
        foreach ($reviewers as $rev) {
            $r = User::where('id',$rev['user_id'])->first();
            array_push($revs,['id'=>$r->id, 'person'=>$r->title->title.' '.$r->givenName.' '.$r->familyName.', '.$r->organization.', '.$r->country->country]);
        }
        return $revs;
    }

    function adNominateEditor($id,$confirmCode) {
        $paper = Paper::where('id',$id)->first();
        if ($confirmCode != $paper->confirmCode) {
            return view('error', ['msg' => __('submit.CCError')]);
        }
        if (! auth()->user()->userprofile->admin) {
            return view('error', ['msg' => 'Must be Administrator to perform this function']);
        }
        $exclude = [];
        $keywordArray = $paper->keyword_array();
        $paperKeywords = implode(', ',$keywordArray);
        $authRevArray = Review::select('user_id')->where('paper_id',$id)->get()->toArray();
        //dd($authRevArray);
        foreach ($authRevArray as $a) {
            $exclude[] = $a['user_id'];
        }
        $paperAuthors = $paper->authorCollection;
        $authStr = '';
        foreach($paperAuthors as $u) {
            $exclude[] = $u->id;
            $authStr .= $u->title->title.' '.$u->givenName.' '.$u->familyName.', '.$u->organization.', '.$u->country->country.'<br>';
        }
        //dd($exclude);
        // have excluded authhors and reviewers nominated by authors - anyone else?
        $randEditors = Keywords::find_users(array_keys($keywordArray),$exclude,8, 1);
        $randEditors = Users::get_details($randEditors);
        //dd($randEditors);

        $dispData = ['shortName'=>config('jrnl.shortName'),'paperTitle'=>$paper->title,'authors'=>$authStr,'keywords'=>$paperKeywords];
        $data = ['id'=>$id,'confirmCode'=>$confirmCode,'keywords'=>$keywordArray,'randEditors'=>$randEditors,'dispData'=>$dispData];
        return view('submit.adNominateEditor',['data'=>$data]);
    }

    function adNomEditor(Request $request) {
        //dd($request);
        $paper_id = $request->paper_id;
        $confirmCode = $request->confirmCode;
        $editor_id = $request->optradio;
        //dd($paper_id);
        $paper = Paper::where('id',$paper_id)->first();
        if ($confirmCode != $paper->confirmCode) {
            return view('error', ['msg' => __('submit.CCError')]);
        }
        $user = auth()->user();
        if (!($user->userprofile->admin)) {
            return view('error', ['msg' => 'Must be Administrator or Editor of this paper to perform this function']);
        }
        // set editor
        $paper->editor_id = $editor_id;
        $paper->editorContacted = Carbon::now()->toDateTimeString();
        $paper->log .= Carbon::now()->toDateTimeString().' Editor ID '.$editor_id.' nominated by '.$user->id."\n";
        //dd($paper);
        $paper->save();
        // now email nominated editor
        $editor = Users::get_details([$editor_id]);
        $editor = $editor[$editor_id];
        //dd($editor);
        $data['editor'] = $editor;
        $data['filePath'] = $paper->file_path_vp();
        $data['strings']['edSalutation'] = $editor['salutation'];
        $data['strings']['paper_id'] = $paper_id;
        $data['strings']['confirmCode'] = $confirmCode;
        $data['strings']['shortName'] = config('jrnl.shortName');
        $data['strings']['vol'] = $paper->volume;
        $data['strings']['pap'] = $paper->paperNumber;
        $data['strings']['preprintLink'] = route('viewPaper',['vol'=>$paper->volume,'pap'=>$paper->paperNumber]);
        $data['strings']['acceptLink'] = route('edConfirmRevs',['id'=>$paper->id,'confirmCode'=>$paper->confirmCode]);
        $data['strings']['rejectLink'] = route('edNotAvailable',['id'=>$paper->id,'confirmCode'=>$paper->confirmCode]);
        //dd($data);
        $mailer = new \App\Mail\review\inviteEditor($data);
        Mail::to($editor['email'])->send($mailer);

        return view('showPage',['msg'=>'review.adNomEditor']);

    }

    function edConfirmRevs($id,$confirmCode) {
        $paper = Paper::where('id',$id)->first();
        $keywordArray = Papers::keyword_array($id);
        if ($confirmCode != $paper->confirmCode) {
            return view('error', ['msg' => __('submit.CCError')]);
        }
        if (!(auth()->user()->id == $paper->editor_id or auth()->user()->userprofile->admin)) {
            return view('error', ['msg' => 'Must be Administrator or Editor of this paper to perform this function']);
        }
        $authRevArray = Review::select('user_id')->where('paper_id',$id)->get()->toArray();
        $authRevs = Users::get_details($authRevArray);
        //dd($authRevs);
        $auths = $paper->get_author_details();
        $exclude = [];
        foreach($auths as $auth) {
            array_push($exclude,$auth['id']);
        }
        array_push($exclude,$paper->editor_id);
        //dd($auths);
        $randRevs = Users::get_details(Keywords::find_users(array_keys($keywordArray),$exclude,8));
        $link = route('edSaveRevs');
        $data = ['authRevs'=>$authRevs,'randRevs'=>$randRevs,'auths'=>$auths,'shortName'=>config('jrnl.shortName'),
            'vol'=>$paper->volume, 'pap'=>$paper->paperNumber,'paper_id'=>$id,'confirmCode'=>$confirmCode,'link'=>$link];
        return view('review.edConfirmRevs',$data);
    }

    function edSaveRevs(Request $request) {
        $input = $request->all();
        //dd($input);
        $paper_id = $input['paper_id'];
        $confirmCode = $input['confirmCode'];
        if (isset($input['revs'])) {
            $revs = $input['revs'];
        }
        if(isset($input['authRevs'])) {
            $authRevs = $input['authRevs'];
        }
       $paper = Paper::where('id', $paper_id)->first();
        if ($paper->confirmCode != $confirmCode) {
            return view('error',['msg'=>'ERROR - Confirmation code error']);
        }
        if (!(auth()->user()->id == $paper->editor_id or auth()->user()->userprofile->admin)) {
            return view('error', ['msg' => 'Must be Administrator or Editor of this paper to perform this function']);
        }
        // first delete all reviewers (i.e. those previously set up by the author)
        $deletedRows = Review::where('paper_id',$paper_id)->delete();
        // now re-add the author-nominated reviewers
        if(isset($authRevs)) {
            foreach ($authRevs as $r) {
                $rev = new \App\Models\Review;
                $rev->paper_id = $paper_id;
                $rev->user_id = $r;
                $rev->source = 'author';
                $rev->save();
            }
        }
        if (isset($revs)) {
            foreach ($revs as $r) {
                $rev = new \App\Models\Review;
                $rev->paper_id = $paper_id;
                $rev->user_id = $r;
                $rev->source = 'editor';
                $rev->save();
            }
        }
        // now email reviewers
        $revs = $paper->reviews;
        $vol = $paper->volume;
        $pap = $paper->paperNumber;
        foreach ($revs as $r) {
            $user = $r->user;
            $em = [['email'=>$user->email,'name'=>$user->title->title.' '.$user->givenName.' '.$user->familyName ]];
            //dd($em);
            $data=['salutation'=>$user->title->title.' '.$user->familyName,'shortName'=>config('jrnl.shortName'),
                'longName'=>config('jrnl.longName'),'vol'=>$vol, 'pap'=>$pap,
                'abstract'=>$paper->abstract,'paperTitle'=>$paper->title,'missionLink'=>url('showPage/jmMessages.mission'),
                'jrnlURL'=>config('jrnl.url'),
                'download'=>route('viewPaper',['vol'=>$vol,'pap'=>$pap]),
                'linkAgree'=>route('revReplyRequest',['id'=>$paper_id,'confirmCode'=>$confirmCode,'answer'=>'accept',
                    'user_id'=>$user->id]),
                'linkReject'=>route('revReplyRequest',['id'=>$paper_id,'confirmCode'=>$confirmCode,'answer'=>'reject',
                    'user_id'=>$user->id])];
            //dd($data);
            $mailer = new \App\Mail\review\inviteReviewer($data);
            Mail::to($em)->send($mailer);
            sleep(6);
            $paper->preprintPublished = 1;
            $paper->log .= now().' preprint published';
            $paper->state = 'edRevNominated';
            $paper->save();
        }
        //dd($revs);
        return view('showPage',['msg'=>__('review.inviteRevOK',$data),'params'=>$data]);
    }

    function revReplyRequest($id, $confirmCode, $answer,$user_id) {
        // first make sure it is the intended user
        $paper = Paper::where('id',$id)->orderBy('revisionNumber','DESC') ->first();
        $user = auth()->user();
        if($user->id != $user_id) {
            return view('error',['msg'=>'You do not appear to be assigned as a reviewer of this paper. You are '.
                'currently logged in as '.$user->email.'. Do you perhaps have another account on JCSE? If so try '.
                'logging in with the other account.']);
        }
        $revs = $paper->reviews;
        //dd($revs);
        foreach ($revs as $rev) {
            if($rev->user_id == $user_id) {
                // test for rejection of the request
                if ($answer == 'reject') {
                    $rev->agreed = 0;
                    $rev->log .= now() . ' reviewer rejected request';
                    $rev->save();
                    // mail editor to ask for a new reviewer
                    $mailer =
                        // dd($rev); // just as a reminder that I need to do the following
                        // acknowledge rejection and offer to modify preferences
                    $data = ['prefsLink' => route('myjrnlPreferences')];
                    return view('review.ackRevReject', $data);
                }

                if ($paper->confirmCode <> $confirmCode) {
                    return view('error', ['msg' => 'Incorrect confirmation code']);
                }
                if ($answer == 'accept') {
                    // reviewer has accepted the request
                    // record the acceptance
                    $rev = Review::where('paper_id', $id)->where('user_id', $user->id)->first();
                    $rev->agreed = 1;
                    $rev->dateResponded = now();
                    $rev->save();
                    // redirect link to review instructions (also accessible from myJrnl)
                    $reviewAdvice = route('reviewAdvice');
                    // link to review page
                    $reviewLink = route('reviewPaper', ['id' => $id, 'confirmCode' => $confirmCode]);
                    // redirect link to preferences (also accessible from myJrnl)
                    $myJrnlLink = route('myJrnl');
                    $data = ['id' => $id, 'confirmCode' => $confirmCode, 'shortName' => config('jrnl.shortName'),
                        'shortName' => config('jrnl.shortName'), 'vol' => $paper->volume, 'pap' => $paper->paperNumber,
                        'myJrnlLink' => $myJrnlLink, 'reviewLink' => $reviewLink, 'reviewAdvice' => $reviewAdvice,
                        'viewPaperLink'=>route('viewPaper',['vol'=>$paper->volume,'pap'=>$paper->paperNumber])];
                    //dd($data);
                    return view('review.revAccept', ['data' => $data]);
                }
            }
        }
    }

    function reviewPaper($id,$confirmCode,$review_id=null) {
        $paper = Paper::where('id',$id)->orderBy('revisionNumber','DESC') ->first();
        $user = auth()->user();
        $questions = config('jrnl.reviewQuestions');
        $qArray = config('jrnl.reviewQuestions');
        $recArray = config('jrnl.recommendations');
        if(!is_null($review_id)) {
            $rev = Review::where('id',$review_id)->first();
        }
        else {
            $rev = Review::where('paper_id',$id)->where('user_id',$user->id)->first();
        }
        if(is_null($rev)) {
            return view('error',['msg'=>'Database error, review not found']);
        }
        if($rev->completed) {
            return view('error',['mag'=>__('reviewForm.reviewCompleted')]);
        }
        //dd($rev);
        if($rev->saved) {
            //dd($rev);
            $savedReview['referencingRating'] = $rev->referencingRating;
            $savedReview['referencingComment'] = $rev->referencingComment;
            $savedReview['methodRating'] = $rev->methodRating;
            $savedReview['methodComment'] = $rev->methodComment;
            $savedReview['errorRating'] = $rev->errorRating;
            $savedReview['errorComment'] = $rev->errorComment;
            $savedReview['correctnessRating'] = $rev->correctnessRating;
            $savedReview['correctnessComment'] = $rev->correctnessComment;
            $savedReview['clarityRating'] = $rev->clarityRating;
            $savedReview['clarityComment'] = $rev->clarityComment;
            $savedReview['plagiarismRating'] = $rev->plagiarismRating;
            $savedReview['plagiarismComment'] = $rev->plagiarismComment;
            $savedReview['legalRating'] = $rev->legalRating;
            $savedReview['legalComment'] = $rev->legalComment;
            $savedReview['authorComments'] = $rev->authorComments;
            $savedReview['editorComments'] = $rev->editorComments;
        }

        // go view the form
        $viewPaperLink = route('viewPaper',['vol'=>$paper->volume,'pap'=>$paper->paperNumber,'confirmCode'=>$paper->confirmCode]);
        $params = ['data'=>['shortName'=>config('jrnl.shortName'),'vol'=>$paper->volume,'pap'=>$paper->paperNumber,
            'reviewAdviceLink'=>route('reviewAdvice'),'viewPaperLink'=>$viewPaperLink],'recArray'=>$recArray,
            'submitReview'=>route('submitReview'),'paper_id'=>$id,'confirmCode'=>$confirmCode,'qArray'=>$qArray];
        if(isset($savedReview)) {
            $params['savedReview'] = $savedReview;
        }
        //dd($params);
        return view('review.reviewForm',$params);
    }

    function reviewAdvice() {
        $data = ['shortName'=>config('shortName'),'reviewAdvice' => route('reviewAdvice')];
        return view('review.reviewAdvice');
    }

    function submitReview(SubmitReview $request)
    {
        $validated = $request->validated();
        // get here if Submit Review has been validated
        $review_id = $this->storeReview($validated,1);
        $review = Review::where('id',$review_id)->first();
        $paper = Paper::where('id',$review->paper_id)->first();
        $review = $review->toArray();
        //dd($review);
        return view('review.confirmReview', ['review' => $review,'paper'=>$paper]);

    }

    function saveReview(SaveReview $request)
    {
        $validated = $request->validated();
        //dd($validated);
        $review_id = $this->storeReview($validated);
        //dd($validated);
        return redirect()->route('reviewPaper',['id'=>$validated['paper_id'],'confirmCode'=>$validated['confirmCode'],'review_id'=>$review_id]);
    }

    function storeReview($validated,$submit = 0)
    {
        // passed validated data, store in database
        // first check paper_id and confirm code
        // dd($validated);
        $paper = Paper::where('id',$validated['paper_id'])->first();
        if ($paper->confirmCode <> $validated['confirmCode']) {
            return view('error', ['msg' => 'Incorrect confirmation code - please contact journal administration']);
        }
        // confirm that reviewer is as expected
        $user = auth()->user();
        if($user->id <> $validated['reviewer']) {
            return view('error', ['msg' => 'User not the same as submitter of review - please contact journal administration']);
        }
        // all seems OK, so save review
        $review = Review::where('user_id',$validated['reviewer'])->where('paper_id',$validated['paper_id'])->first();
        //dd($review);
        $review->referencingRating = $validated['referencingRating'];
        $review->referencingComment = $validated['referencingComment'];
        $review->methodRating = $validated['methodRating'];
        $review->methodComment = $validated['methodComment'];
        $review->errorRating = $validated['errorRating'];
        $review->errorComment = $validated['errorComment'];
        $review->correctnessRating = $validated['correctnessRating'];
        $review->correctnessComment = $validated['correctnessComment'];
        $review->clarityRating = $validated['clarityRating'];
        $review->clarityComment = $validated['clarityComment'];
        $review->plagiarismRating = $validated['plagiarismRating'];
        $review->plagiarismComment = $validated['plagiarismComment'];
        $review->legalRating = $validated['legalRating'];
        $review->legalComment = $validated['legalComment'];
        if (isset($validated['authorComments'])) {
            $review->authorComments = $validated['authorComments'];
        }
        //dd($validated);
        if (isset($validated['editorComments'])) {
            $review->editorComments = $validated['editorComments'];
            //dd($review);
        }
        $review->saved = true;
        //dd($review);
        $review->save();
        return $review->id;
    }

    function confirmReviewSubmission($review_id, $confirmCode) {
        // dd($review_id);
        $review = Review::where('id',$review_id)->first();
        $paper = Paper::where('id',$review->paper_id)->where('confirmCode',$confirmCode)->first();
        if(is_null($paper)) {
            return view('error', ['msg' => __('submit.CCError')]);
        }
        $review->completed = 1;
        $review->dateCompleted = now();
        $review->save();
        $data = ['shortName'=>config('jrnl.shortName'),'vol'=>$paper->volume,'pap'=>$paper->paperNumber,
            'missionLink'=>route('showPage',['msg'=>'jmMessages.mission']),'myJrnlLink'=>route('myJrnlHome')];
        return view('showPage',['msg'=>__('reviewForm.ackReviewSubmission',$data)]);
    }
}
