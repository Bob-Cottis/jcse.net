<?php

namespace App\Http\Controllers;

use App\Helpers\Users;
use App\Models\Review;
use App\Models\Userprofile;
use Illuminate\Http\Request;
use App\Mail\submit;
use App\Models\User;
use App\Models\Paper;
use App\Models\SpecialVolume;
use App\Models\Topic;
use App\Http\Requests\StorePaperPost;
use Illuminate\Support\Facades\Mail;
use setasign\Fpdi\FpdfTpl;
use setasign\Fpdi\Fpdi;
use App\Helpers\Keywords;


class SubmitController extends Controller
{
    //
    function submit()
    {
        // display submission form
        return view('submit.newform');
    }

    function checkEmail($email = null)
    {
        // check if email exists
        if (is_null($email)) {
            return '{"status":0}';
        }
        $user = User::where('email', $email)->first();
        //return view('varDump',['s'=>$user->id]);
        if (empty($user)) {
            return '{"id":null,"status":0}';
        }
        return '{"id":' . $user->id . ',"status":1}';
    }

    function createPaper(StorePaperPost $request)
    {
        //return view('varDump',['s'=>$request]);
        // validate request
        $validated = $request->validated();
        // get current volume number
        $volume = SpecialVolume::where('id', 1)->first();
        //dd($volume);
        $vol = $volume->number;
        // get next paper number
        $paper = Paper::where('volume', $vol)->orderBy('paperNumber', 'desc')->first();
        $pap = $paper->paperNumber + 1;
        $paper = new Paper;
        $paper->volume = $vol;
        $paper->paperNumber = $pap;
        $paper->title = $validated['title'];
        $paper->abstract = $validated['abstract'];
        $paper->keywords = $validated['keywords'];
        $paper->submissionDate = now();
        $paper->preprintDate = now();
        $paper->revisionNumber = 1;
        $paper->correspondingAuthor_id = $validated['leadAuthor'];
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $permitted_chars .= $permitted_chars;
        $paper->confirmCode = substr(str_shuffle($permitted_chars), 0, 30);
        $paper->save();
        $pap_id = $paper->id;
        $auths = "";
        $users_reg = [];
        $users_unreg = [];
        $num_users = count($validated['authemail']);

        for ($i = 0; $i < $num_users; $i++) {
            $user = User::where('email', $validated['authemail'][$i])->first();
            if ($user === null) {
                // author not registered so create new user
                $user = new User;
                if ($validated['authemail'][$i] != 'not.known@none.com') {
                    $user->email = $validated['authemail'][$i];
                }
                $user->title_id = $validated['authtitle'][$i];
                $user->givenName = $validated['authgivenName'][$i];
                $user->familyName = $validated['authfamilyName'][$i];
                $user->organization = $validated['authorganization'][$i];
                $user->country_id = $validated['authcountry_id'][$i];
                $user->save();
                $userprofile = new Userprofile;
                $userprofile->user_id = $user->id;
                $userprofile->save();
                $user->userprofile_id = $userprofile->id;
                $user->save();
                array_push($users_unreg, $user->email);
            }
            $paper->authorCollection()->attach($user->id, ['authorNum' => $i + 1]);
            // construct author list
            if ($i == 0) {
                $auths = $user->givenName . " " . $user->familyName;
            } elseif ($i > 0 && $i == $num_users - 1) {
                $auths = $auths . " and " . $user->givenName . " " . $user->familyName;
            } else {
                $auths = $auths . ", " . $user->givenName . " " . $user->familyName;
            }
        }
        $paper->authors = $auths;
        $paper->state = 'submit_1';
        // must have authors collection before storing keywords
        Keywords::store($paper);
        $paper->save();
        //dd($paper);
        return view('submit.paperCreated', ['paper_id' => $paper->id, 'confirmCode' => $paper->confirmCode, 'modify' => 0]);
    }

    function loadPaper(Request $request)
    {
        $validatedData = $request->validate([
            'image_path' => 'required|max:10000|mimes:pdf',
            'confirmCode' => 'required',
            'paper_id' => 'required|integer'
        ]);
        $pap_id = $validatedData['paper_id'];
        $confirmCode = $validatedData['confirmCode'];
        $paper = Paper::where('id', $pap_id)->first();
        if ($paper->confirmCode != $confirmCode) {
            return view('error', ['msg' => __('submit.CCError')]);
        }
        $fileName = 'raw_preprint' . $pap_id . '.pdf';
        $basePath = base_path();
        $request->image_path->move($basePath . '/uploads', $fileName);
        $filePath = $this->create_preprint($pap_id, $basePath . '/uploads/' . $fileName);
        $paper = Paper::where('id', $pap_id)->first();
        $paper->state = 'submit_2';
        $paper->state_updated_at = now();
        $paper->save();
        $leadAuthor = $paper->correspondingAuthor;
        $leadAuthorEmail = $leadAuthor->email;
        $link = route('paConfirmPDF', ['id' => $pap_id, 'confirmCode' => $confirmCode, 'modify' => 0]);
        /*$leadAuthorName = $leadAuthor->title->title.' '.$leadAuthor->givenName.' '.$leadAuthor->familyName;
        $leadAuthorSalutation = $leadAuthor->title->title.' '.$leadAuthor->familyName;*/
        $data = ['vol' => $paper->volume, 'pap' => $paper->paperNumber, 'shortName' => config('jrnl.shortName'), 'link' => $link, 'lead' => 1,
            'leadAuthorSalutation' => $leadAuthor->title->title . ' ' . $leadAuthor->familyName,
            'leadAuthorName' => $leadAuthor->title->title . ' ' . $leadAuthor->givenName . ' ' . $leadAuthor->familyName,
            'leadAuthorEmail' => $leadAuthorEmail,
            'id' => $pap_id, 'confirmCode' => $confirmCode, 'filePath' => $filePath, 'remind' => 0];
        $mailer = new \App\Mail\submit\checkPaperEmail($data);
        Mail::to($leadAuthorEmail)->send($mailer);
        // get list of authors
        $allAuth = $paper->authorCollection;
        $emails = [];
        foreach ($allAuth as $auth) {
            if ($auth->email != $leadAuthorEmail) {
                array_push($emails, $auth->email);
            }
        }
        $data['lead'] = 0;
        $mailer = new \App\Mail\submit\checkPaperEmail($data);
        Mail::to($emails)->send($mailer);

        return view('submit.checkPaper', ['data' => $data]);
    }

    function paConfirmPDF($id, $confirmCode, $modify)
    {
        $paper = Paper::where('id', $id)->first();
        if ($confirmCode != $paper->confirmCode) {
            return view('error', ['msg' => __('submit.CCError')]);
        }
        $reviseLink = route('pdfRevise', ['id' => $id, 'confirmCode' => $paper->confirmCode]);
        $modAuthLink = route('pdfModAuth', ['id' => $id, 'confirmCode' => $paper->confirmCode]);
        $confirmedLink = route('pdfConfirmed', ['id' => $id, 'confirmCode' => $paper->confirmCode]);
        $data = ['vol' => $paper->volume, 'pap' => $paper->paperNumber, 'pap' => $paper->title, 'authors' => $paper->authors,
            'shortName' => config('jrnl.shortName'), 'id' => $id, 'confirmCode' => $confirmCode, 'reviseLink' => $reviseLink,
            'modAuthLink' => $modAuthLink, 'confirmedLink' => $confirmedLink, 'modify' => $modify];
        if ($paper->state == 'submitted') {
            // paper has already been confirmed - just tell the user
            return view('submit.alreadyConfirmed', $data);
        }
        return view('submit.paConfirmPDF', ['data' => $data]);
    }

    function pdfConfirmed($id, $confirmCode)
    {
        // author has approved PDF file
        // publish the preprint a ask for reviewer nominations
        $paper = Paper::where('id', $id)->first();
        if ($confirmCode != $paper->confirmCode) {
            return view('error', ['msg' => __('submit.CCError')]);
        }
        $paper->state = 'submitted';
        $paper->log .= now() . " author confirmed PDF\n";
        $paper->save();
        $vol = $paper->volume;
        $pap = $paper->paperNumber;
        $rev = $paper->revisionNumber;
        $leadAuthor = $paper->correspondingAuthor;
        $link = route('adminCheckPaper', ['id' => $paper->id, 'confirmCode' => $paper->confirmCode]);
        $data = ['vol' => $paper->volume, 'pap' => $paper->paperNumber, 'title' => $paper->title, 'reminder' => 0,
            'filePath' => base_path(sprintf('pdf/%03d/%s_Volume_%03d_Preprint_%03d_Rev_%02d.pdf', $vol, config('jrnl.shortName'), $vol, $pap, $rev)),
            'jrnlShortName' => config('jrnl.shortName'),
            'leadAuthor' => $leadAuthor->title->title . ' ' . $leadAuthor->givenName . ' ' . $leadAuthor->familyName,
            'link' => $link];
        // email administrator
        $mailer = new \App\Mail\submit\adConfirmPDF($data);
        Mail::to(config('jrnl.adminEmail'))->send($mailer);
        return view('submit.paPDFConfirmed');
    }

    function pdfRevise($id, $confirmCode)
    {
        $paper = Paper::where('id', $id)->first();
        if ($paper->confirmCode != $confirmCode) {
            return view('error', ['msg' => __('submit.CCError')]);
        }
        return view('submit.paperCreated', ['paper_id' => $id, 'confirmCode' => $confirmCode, 'modify' => 1]);
    }

    function pdfModAuth($id, $confirmCode, $modify = 0)
    {
        $paper = Paper::where('id', $id)->first();
        if ($paper->confirmCode != $confirmCode) {
            return view('error', ['msg' => __('submit.CCError')]);
        }
        $allAuth = $paper->authorCollection;
        $auths = [];
        foreach ($allAuth as $auth) {
            $auth = ['id' => $auth->id, 'name' => $auth->givenName . ' ' . $auth->familyName, 'email' => $auth->email, 'authorNum' => $auth->pivot->authorNum];
            array_push($auths, $auth);
        }
        $data = ['auths' => $auths, 'id' => $id, 'confirmCode' => $confirmCode, 'modify' => $modify];
        return view('submit.authMod', $data);
    }

    function adminCheckPaper($id, $confirmCode)
    {
        $user = auth()->user();
        //dd($user);
        if (!$user->userprofile->admin) {
            return view('error', ['msg' => 'NEED_TO_BE_ADMIN']);
        }
        $paper = Paper::where('id', $id)->first();
        if (is_null($paper)) {
            return view('error',['msg'=>'Paper ID is not valid']);
        }
        if ($confirmCode != $paper->confirmCode) {
            return view('error', ['msg' => __('submit.CCError')]);
        }
        $lead = $paper->correspondingAuthor;
        $approveLink = url('/adApprove');
        $data = ['shortName' => config('jrnl.shortName'),
            'leadAuthor' => $lead->title->title . ' ' . $lead->givenName . ' ' . $lead->familyName,
            'title' => $paper->title,
            'approveLink' => $approveLink,
            'id' => $id, 'confirmCode' => $confirmCode,
            'link'=>$paper->viewLink()];
        return view('submit.adminCheckPaper', ['data' => $data]);
    }

    function adApprove(Request $request)
    {
        //dd($request);
        $val = $request->validate([
            'id' => 'required|integer',
            'confirmCode' => 'required|string',
            'otherText' => 'string|nullable|required_with:other'
        ]);
        $user = auth()->user();
        if (!$user->userprofile->admin) {
            return view('error', ['msg' => 'NEED_TO_BE_ADMIN']);
        }
        $paper = Paper::where('id', $val['id'])->first();
        if ($val['confirmCode'] != $paper->confirmCode) {
            return view('error', ['msg' => __('submit.CCError')]);
        }
        $msg = '';
        if (isset($request['topMargin'])) {
            $msg .= '<li>' . __('submit.topMargin') . '</li>';
        }
        if (isset($request['bottomMargin'])) {
            $msg .= '<li>' . __('submit.bottomMargin') . '</li>';
        }
        if (isset($request['abstract'])) {
            $msg .= '<li>' . __('submit.abstractNeeded') . '</li>';
        }
        if (isset($request['keywords'])) {
            $msg .= '<li>' . __('submit.keywords') . '</li>';
        }
        if (isset($request['lineSpacing'])) {
            $msg .= '<li>' . __('submit.lineSpacing') . '</li>';
        }
        if (isset($request['other'])) {
            $msg .= '<li>' . __('submit.otherText') . '</li>';
        }
        //dd($msg);
        $data = [];
        if ($msg == '') {
            // no comments , so approved
            $data['link'] = route('nominateReviewers', ['id' => $val['id'], 'confirmCode' => $val['confirmCode']]);
            $msg = __('submit.approvalMsg', $data);
            $data = ['msg' => $msg, 'subject' => __('submit.PaperApproved')];
            $paper->state = 'preprintOK';
            $paper->editor_id = 2065; //FOR THE TIME BEING - NEEDS TO BE ENHANCED
            $paper->state_updated_at = now();
            $paper->save();
            $data['salutation'] = $user->title->title . ' ' . $user->familyName;
            $mailer = new \App\Mail\submit\adApprovalEmail($data);
            Mail::to($user)->send($mailer);

            // paper approved, so ask admin to nominate an editor
            $exclude = [];
            $keywordArray = $paper->keyword_array();
            $paperKeywords = implode(', ',$keywordArray);
            $authRevArray = Review::select('user_id')->where('paper_id',$val['id'])->get()->toArray();
            foreach ($authRevArray as $a) {
                $exclude[] = $a['user_id'];
            }
            $paperAuthors = $paper->authorCollection;
            $authStr = '';
            foreach($paperAuthors as $u) {
                $exclude[] = $u->id;
                $authStr .= $u->fullName().', '.$u->organization.', '.$u->country->country.'<br>';
            }
            // have excluded authors and reviewers nominated by authors - anyone else?
            $randEditors = Keywords::find_users(array_keys($keywordArray),$exclude,8, 1);
            $randEditors = Users::get_details($randEditors);

            $dispData = ['shortName'=>config('jrnl.shortName'),'paperTitle'=>$paper->title,'authors'=>$authStr,'keywords'=>$paperKeywords];
            $data = ['id'=>$val['id'],'confirmCode'=>$val['confirmCode'],'keywords'=>$keywordArray,'randEditors'=>$randEditors,'dispData'=>$dispData];
            return view('submit.adNominateEditor',['data'=>$data]);
        } else {
            $data['link'] = route('paConfirmPDF', ['id' => $val['id'], 'confirmCode' => $val['confirmCode'], 'modify' => 1]);
            $msg = __('submit.reviseHeader', $data) . '<ol>' . $msg . '</ol>';
            $data = ['msg' => $msg, 'subject' => __('submit.paperNeedsRevising')];
            $paper->state = 'paRevise';
            $paper->state_updated_at = now();
            $paper->save();
            $data['salutation'] = $user->title->title . ' ' . $user->familyName;
            $mailer = new \App\Mail\submit\adApprovalEmail($data);
            Mail::to($user)->send($mailer);
            return view('showPage', ['msg' => $msg]);
        }
    }

    function paperSaved($paper_id)
    {
        //  $paper = Paper::where('id',$paper_id)->first();
        // $authors = User
        //return view()
        return view('paperSaved');
    }

    function create_preprint($pap_id, $source)
    {
        // create the text version of the file so it excludes the header and footer
        //$s_file = fopen($source,'r');
        //echo 'first input line = '.fgets($s_file);
        // rely on ViewPaper to produce .txt file when needed
        $paper = Paper::where('id', $pap_id)->first();
        $source = base_path('uploads/raw_preprint' . $pap_id . '.pdf');
        return $this->stampPdf($paper, $source, 'preprint');
    }

    // default FPDF units are mm
    // FPDF co-ordinates
    // A4 page
    //  bottom left = 297,0
    //  bottom right = 297,210
    //  top left = 0,0
    //  top right = 0,210
    // JCSE margins left, right = 18, top, bottom = 12

    function stampPdf($paper, $source, $paperOrPreprint)
    {
        $pap_id = $paper->id;
        $vol = $paper->volume;
        $pap = $paper->paperNumber;
        $rev = $paper->revisionNumber;
        $sub_date = $paper->submissionDate->format('d F Y');
        $year = $paper->submissionDate->format('Y');
        // check that destination exists
        $path = base_path(sprintf('pdf/%03d',$vol));
        //dd($path);
        if(!file_exists($path)) {
            mkdir($path);
        }
        $dest = base_path(sprintf('pdf/%03d/%s_Volume_%03d_Preprint_%03d_Rev_%02d.pdf', $vol, config('jrnl.shortName'), $vol, $pap, $rev));

        $pdf = new Fpdi();
        $pdf->AddPage();
        $pagecount = $pdf->setSourceFile($source);
        //$pdf->AddPage();
        if ($paperOrPreprint == 'paper') {
            $pub_date = $paper->publicationDate->format('d F Y');

            $footer = 'This paper ' .
                'has been published in the Journal of Corrosion Science and Engineering. ' .
                'JCSE Volume ' . $vol . ', Paper ' . $pap . ', © ' . $year . ' University of Manchester and the authors.';
//        error_log('In stamp_file.php, paper=y, ',1,'bob.cottis@manchester.ac.uk');
        } else {
            $footer = '© ' . $year . ' University of Manchester and the authors. This is a preprint of a paper ' .
                'that has been submitted for publication in the Journal of Corrosion Science and Engineering. ' .
                'It will be reviewed and, subject to the reviewers’ comments, be published online at ' .
                'http://www.jcse.org in due course. Until it has been fully published it should ' .
                'not normally be referenced in published work. ';
        }

        $templateId = $pdf->beginTemplate();
        $pdf->setMargins(18, 35, 18);
        $pdf->SetTextColor(204, 51, 0);
        $pdf->SetDrawColor(204, 51, 0);
        $pdf->setFont('times', '', 12);
        $pdf->Image(base_path('/images/jrnl_logo.gif'), 18, 12, 174);
        $xSave = 18;
        $ySave = 27;
        $pdf->SetY($ySave);
        $pdf->Cell(0, 0, 'ISSN 1466-8858', 0, 0, 'L');
        $pdf->SetXY($xSave, $ySave);
        $typ = ucfirst($paperOrPreprint);
        $pdf->Cell(0, 0, 'Volume ' . $vol . ', ' . $typ . ' ' . $pap, 0, 0, 'C');
        $pdf->SetXY($xSave, $ySave);
        if ($paperOrPreprint == 'paper') {
            $pdf->Cell(0, 0, 'first submitted ' . $sub_date, 0, 0, 'R');
            $pdf->Cell(0, 8, "published " . $pub_date, 0, 0, 'R');
            //jrnl_email_edInChief('In stamp_file.php for paper','Submission Date'.$sub_date);
        } else {
            $pdf->Cell(0, 0, 'first submitted ' . $sub_date, 0, 0, 'R');
            //jrnl_email_edInChief('In stamp_file.php for preprint','Submission Date'.$sub_date);
        }
        $pdf->Line(18, 275, 192, 275);
        $pdf->SetXY(18, 277);
        $pdf->SetFontSize(9);
        $foot = iconv("UTF8", "ISO-8859-1//TRANSLIT", $footer);
        $pdf->MultiCell(0, 9 * 25.4 / 72, $foot);
        $pdf->endTemplate();

        for ($i = 1; $i <= $pagecount; $i++) {
            $srcPage = $pdf->importPage($i);
            $pdf->useTemplate($srcPage);
            $pdf->useTemplate($templateId);
            if ($i < $pagecount) {
                $pdf->AddPage();
            }
        }
        $pdf->Output('F', $dest);
        return $dest;
    }

    function nominateReviewers($id, $confirmCode)
    {
        // provide reviewer nomination form
        $paper = Paper::where('id', $id)->first();
        if ($paper->confirmCode != $confirmCode) {
            return view('error', ['msg' => __('submit.CCError')]);
        }
        $user = auth()->user();
        if ($user->id != $paper->correspondingAuthor_id) {
            return view('error', ['msg' => 'Must be corresponding author']);
        }
        $data = ['id' => $id, 'confirmCode' => $confirmCode, 'vol' => $paper->volume, 'pap' => $paper->paperNumber,
            'shortName' => config('jrnl.shortName'),'adminFlag'=>0,'msg'=>'revNomOK'];
        // dd($data);
        return view('submit.nominateReviewers', $data);
    }

    function paUpdateRevs(Request $request)
    {
        //dd($request);
        $input = $request->all();
        //dd($input);
        //return response()->json(['success'=>print_r($input,1)]);
        $paper_id = $input['paper_id'];
        $confirmCode = $input['confirmCode'];
        $revs = $input['revs'];
        //$topics = array_map('intval',$input['topics']);
        $paper = Paper::where('id', $paper_id)->first();
        if ($paper->confirmCode != $confirmCode) {
            return response()->json(['success' => 'ERROR - Confirmation code error']);
        }
        $user = auth()->user();
        // return response()->json(['success'=>print_r($user,1)]);
        if ($user->id != $paper->correspondingAuthor_id) {
            return response()->json(['success' => 'ERROR - Must be corresponding author']);
        }
        foreach ($revs as $rev) {
            if (($rev != 0) && (!\App\Models\Review::where('paper_id', $paper->id)->where('user_id', $rev)->exists())) {
                $reviewer = new \App\Models\Review;
                $reviewer->paper_id = $paper->id;
                $reviewer->user_id = $rev;
                $reviewer->source = 'author';
                $reviewer->save();
            }
        }
        $paper->state = 'paRevNominated';
        $paper->save();
        // next ask admin to nominate
        $adEmail = config('jrnl.adminEmail');
        $adSalutation = 'Administrator';
        $link = route('adNominateEditor', ['id' => $paper->id, 'confirmCode' => $paper->confirmCode]);
        $data = ['id' => $paper_id, 'confirmCode' => $confirmCode, 'link' => $link,
            'shortName' => config('jrnl.shortName'),'vol' => $paper->volume, 'pap' => $paper->paperNumber,
            'adSalutation'=>$adSalutation,'filePath'=>$paper->file_path_vp()];
        // return response()->json(['success'=>print_r($data,1)]);
        $mailer = new \App\Mail\review\adNomEditor($data);
        Mail::to($adEmail)->send($mailer);
        return view('showPage',['msg'=>__('submit.reviewersSaved',
            ['myJrnl'=>'<a href="'.route('myJrnl').'">My '.config('jrnl.shortName').'</a>'])]);
    }

    function paConfirmRevNom($paper_id) {
        $viewPreprintLink = route('viewPaper',['vol'=>'ID','pap'=>$paper_id,'typ'=>'preprint']);
        $myJrnlLink = route('myJrnl');
        $data = ['viewPreprintLink'=>$viewPreprintLink,
            'myJrnlLink'=>$myJrnlLink,'shortName'=>config('jrnl.shortName')];
        return view('paConfirmRevNom',$data);
    }

    function adNominateEditor($id,$confirmCode) {
        // administrator needs to nominate editor for paper
        // get list of possible editors
        $paper = Paper::where('id',$id)->first();
        // check confirm code
        if ($paper->confirmCode != $confirmCode) {
            return view('error', ['msg' => __('submit.CCError')]);
        }
        // check that current user is an administrator
        $user = auth()->user();
        //dd($user);
        // return response()->json(['success'=>print_r($user,1)]);
        if (! $user->userprofile->admin) {
            return view('error', ['msg' => __('submit.NotAdmin')]);
        }
        $authArray = $paper->authorCollection->toArray();
        //dd($authArray);
        $exclude = array_column($authArray,'id');
        // dd($exclude);
        $keywords = Keywords::for_paper($id);
        //dd($keywords);
        $editorList = Keywords::find_users(array_keys($keywords), $exclude, 10, true);
        //dd($editorList);
        $edList = users_get_details($editorList,'user_id');
        //dd($edList);

    }

    function edUpdateRevs(Request $request)
    {
        $input = $request->all();
        $paper_id = $input['paper_id'];
        $confirmCode = $input['confirmCode'];
        $revs = $input['revs'];
        $editor = $input['editor'];
        $approved = $input['approved'];
        $paper = Paper::where('id', $paper_id)->first();
        if ($paper->confirmCode != $confirmCode) {
            return response()->json(['error' => 'Confirmation code error']);
        }
        $user = auth()->user();
        if ($user->id != $paper->editor_id) {
            return response()->json(['error'=>'Internal  server  error']);
        }
        if ($user->id != $paper->correspondingAuthor_id){
            return response()->json(['error' => 'Must be corresponding author']);
        }
        $revText = [];
        $revEmail = [];
        foreach ($revs as $rev) {
            if (! \App\Models\Review::where('paper_id', $paper->id)->where('user_id', $rev['id'])->exists()) {
                $reviewer = new \App\Models\Review;
                $reviewer->paper_id = $paper->id;
                $reviewer->user_id = $rev['id'];
                $reviewer->source = 'author';
                $reviewer->save();
            }
            $r = \App\Model\User::where('id',$rev['id'])->first();
            $revText[]=[$reviewer->id,$r->title->title.' '.$r->givenName.' '.$r->familyName.', '.$r->organization.', '.$r->country->country];
            $revEmail = [$r->email];
            return response()->json(['success'=>json_encode($revEmail)]);
        }
        $paper->state = 'revNominated';
        // editor has checked reviewers, so paper can be published
        $paper->preprintDate = now();
        $paper->preprintPublished = 1;
        $paper->log .= now().' Preprint published and referees contacted.\n';
        $paper->save();
        // notify authors that preprint has been published

        // contact referees
        $link = route('edConfirmRevs', ['id' => $paper->id, 'confirmCode' => $paper->confirmCode]);
        $data = ['id' => $paper->id, 'confirmCode' => $paper->confirmCode, 'link' => $link, 'shortName' => config('jrnl.shortName'),
            'vol' => $paper->volume, 'pap' => $paper->paperNumber, 'paperTitle'=>$paper->title,'auths'=>$paper->authorCollection,
            'keywords'=>$paper->keywords,'abstract'=>$paper->abstract];
        //return response()->json(['success'=>print_r($data,1)]);
        if ($editor) {
            if ($approved) {
                $leadAuthEmail = $paper->correspondingAuthor->email;
                //return response()->json(['success'=>print_r($leadAuthEmail,1)]);
                $mailer = new \App\Mail\submit\edApprovedRevs($data);
                Mail::to($leadAuthEmail)->send($mailer);
                return response()->json(['success' => 'Reviewer list approved and author advised']);
            }
            else {
                $leadAuthEmail = $paper->correspondingAuthor->email;
                //return response()->json(['success'=>print_r($leadAuthEmail,1)]);
                $mailer = new \App\Mail\submit\edNotApprovedRevs($data);
                Mail::to($leadAuthEmail)->send($mailer);
                return response()->json(['success' => 'Reviewer list updated and author asked to revise']);
            }
        }
        return response()->json(['success'=>print_r($data,1)]);
        $mailer = new \App\Mail\review\edConfirmRevs($data);
        Mail::to(config('jrnl.adminEmail'))->send($mailer);
        return response()->json(['success' => 'Reviewer list saved']);
    }

/*    function edConfirmRevs($id, $confirmCode)
    {
        $user = auth()->user();
        $paper = Paper::where('id', $id)->first();
        if (!($user->userprofile->admin or $user->id == $paper->editor_id)) {
            return view('error', ['msg' => 'Must be Administrator to perform this function']);
        }
        if ($paper->state != 'revNominated') {
            if ($paper->state == 'revApproved') {
                return view('error', ['msg' => 'Reviewers already confirmed']);
            } else {
                return view('error', ['msg' => 'Unknown error - not in expected state']);
            }
        }
        if ($paper->confirmCode != $confirmCode) {
            return view('error', ['msg' => __('submit.CCError')]);
        }
        // get reviewer collection
        $revs = \App\Models\Review::where('paper_id', $id)->get();
        $reviewers = [];
        $n = 0;
        foreach ($revs as $rev) {
            $user = $rev->user;
            $reviewers[$n] = ['id' => $user->id, 'person' => $user->title->title . ' ' . $user->givenName . ' ' . $user->familyName . '; ' .
                $user->organization . ' (' . $user->email . ')'];
            $n++;
        }
        $data = ['id' => $id, 'confirmCode' => $confirmCode, 'revs' => $reviewers,'shortName' => config('jrnl.shortName'),
            'vol' => $paper->volume, 'pap' => $paper->paperNumber,'adminFlag'=>1];
        return view('review.edConfirmRevs', $data);
    }*/

   function updateAuthors(Request $request)
    {
        $authors = json_decode($request->authors);
        //dd($authors);
        // save modified author list
        $paper = Paper::where('id',$request->id)->first();
        // first get old list of authors for log file
        $old_authors = $paper->authorCollection;
        $log_str = now()->toDateTimeString() . ': removed author_ids ';
        foreach ($old_authors as $auth) {
            $log_str .= $auth->id . ',';
        }
        //$log_str .= ' added '.print_r($authors);
        $log_str .= '\n';
        $paper->notes .= $log_str;
        //$sync = [2065=>["authorNum"=>1],19627=>['authorNum'=>2]];
        //dd($sync);
        $sync = array();
        foreach($authors->authors as $auth) {
           $sync[$auth->id] = ['authorNum'=>intval($auth->authorNum)];
        }
        $paper->authorCollection()->sync($sync);
        $paper->save();
        $paper->load('authorCollection');
        //$paper = Paper::where('id',$request->id)->first();
        $auths = '';
        foreach ($paper->authorCollection as $user) {
            // construct author list
            $auths .= $user->givenName . " " . $user->familyName . ', ';
        }
        // remove trailing ","
        $auths = trim($auths,', ');
        //dd($auths);
        $paper->authors = substr_replace($auths, ' and', strrpos($auths, ','), 1);
        $paper->save();

        return response()->json(['success'=>'modified author list saved']);
    }

    function editSubmision($id) {
        return view('submit.editSubmissionForm',['id'=>$id]);
    }

    function edNotAvailable($id,$confirmCode){
        // editor has refused nomination, so we must select a new one
        // NEEDS TO BE DEVELOPED, for now just tell teh Admin

    }

    function testEmail($paper_id) {
        $paper = \App\Models\Paper::where('id',$paper_id)->first();
        $edEmail = $paper->editor->email;
        $link = route('edConfirmRevs', ['id' => $paper->id, 'confirmCode' => $paper->confirmCode]);
        $rejectLink = route('edNotAvailable', ['id' => $paper->id, 'confirmCode' => $paper->confirmCode]);
        $data = ['id' => $paper->id, 'confirmCode' => $paper->confirmCode, 'link' => $link, 'rejectLink'=>$rejectLink,
            'shortName' => config('jrnl.shortName'),'vol' => $paper->volume, 'pap' => $paper->paperNumber,
            'edSalutation'=>$paper->editor->userprofile->salutation];
        $mailer = new \App\Mail\review\edConfirmRevs($data);
        Mail::to($edEmail)->send($mailer);
    }

    public function autocomplete($preferred,$st='')
    {
        if ($preferred) {
            $data = \App\Models\Keyword::select("keyword")
                ->where('preferred',1)
                ->get()
                ->toArray();
            //->toArray();
        }
        else {
            $data =\App\Models\Keyword::select("keyword")
                ->where('keyword','like',$st.'%')
                ->get()
                ->toArray();
        }
        $keywords = array_column($data, 'keyword');
        //dd($keywords);
        //$keywords = ['keywords'=>$data];
        //return view('showString',['s'=>json_encode($keywords)]);
        return response()->json($keywords);
    }

    function testKeywordSubmit() {
        return view('submit.testKeywordSubmit');
    }
}
