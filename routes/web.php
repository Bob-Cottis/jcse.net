<?php

use App\Http\Controllers\AdminController;

Route::get('/', 'ViewVolController@show')->name('home');
Route::get('/underConstruction/{msg?}', function($msg="") {return view('underConstruction',['msg'=>$msg]);})->name('underConstruction');
Route::get('/error/{msg}', function($msg) {return view('error',['msg'=>$msg]);})->name('error');
Route::any('/viewAllVol','ViewVolController@showAll')->name('viewAllVol');
Route::get('/viewVol/{vol}', 'ViewVolController@viewVolget')->name('viewVolget');
Route::post('/viewVol', 'ViewVolController@viewVolpost')->name('viewVolpost');
Route::get('/viewPaper/{vol}/{pap}','ViewpaperController@viewPaper',['middleware'=>'auth'])->name('viewPaper');
//Route::get('/viewPaperByID/{id}','ViewpaperController@viewPaper',['middleware'=>'auth'])->name('viewPaperByID');
Route::get('showPDF/{typ}/{vol}/{pap}/{rev?}','ViewpaperController@showPDF',['middleware'=>'auth'])->name('showPDF');
Route::get('showHTML/{typ}/{vol}/{pap}/{rev}/{commentCount}', 'ViewpaperController@showHTML',['middleware'=>'auth'])->name('showHTML');
Route::get('showPage/{msg}', 'ShowPageController@show')->name('showPage');
Route::get('/addComment/{pap_id}/{html}/{comm_id?}','CommentController@add',['middleware'=>'auth'])->name('addComment');
Route::get('/viewComments/{pap_id}/{html?}','CommentController@view')->name('viewComments');
Route::post('/createComment','CommentController@create')->name('createComment');
Route::get('/caConfirm/{id}/{confirmCode}','CommentController@caConfirm',['middleware'=>'auth'])->name('caConfirm');
Route::get('/edNotify/{id}','CommentController@edNotify')->name('edNotify');
Route::get('/RejectComment/{id}/{confirmCode}/{src}','CommentController@Reject')->name('RejectComment');
Route::post('/RejectComment','CommentController@RejectPost')->name('RejectCommentPost');
Route::get('/paNotify/{id}','CommentController@paNotify')->name('paNotify');
Route::get('/edAcceptComment/{id}/{confirmCode}','CommentController@edAccept',['middleware'=>'auth'])->name('edAcceptComment');
Route::get('/adAcceptComment/{id}/{confirmCode}','CommentController@adAccept',['middleware'=>'auth'])->name('adAcceptComment');
//Route::get('/adRejectComment/{id}/{confirmCode}','CommentController@adReject',['middleware'=>'auth'])->name('adRejectComment');
Route::get('/newVersion', function() {return view('newVersion');})->name('newVersion');
Route::get('/caConfirmTest', function(){return view('comments.caConfirm');});
Route::get('/subForm1', function() {return view('submit.subForm1');})->name('subForm1');
Route::get('/subForm2', function() {return view('submit.subForm2');},['middleware'=>'auth'])->name('subForm2');
Route::post('/CheckEmail', 'SubmitController@checkEmailPost')->name('submitCheckEmailPost');
Route::get('/CheckEmail/{email?}', 'SubmitController@checkEmail')->name('CheckEmail');
Route::post('/createPaper', 'SubmitController@createPaper',['middleware'=>'auth'])->name('createPaper');
Route::post('/postDump', function() {return view('submit.postDump');});
Route::post('/loadPaper','SubmitController@loadPaper',['middleware'=>'auth'])->name('/loadPaper');
//Route::get('/paperSaved/{paper_id}','SubmitController@paperSaved')->name('paperSaved');
Route::post('/sendCommentReject','CommentController@processReject')->middleware('auth')->name('sendCommentReject');
Route::get('/viewComment/{id}','CommentController@viewComment')->name('viewComment');
Route::get('/editSubmission/{id}','SubmitController@editSubmission')->middleware('auth')->name('editSubmission');
Route::get('/adminCheckPaper/{id}/{confirmCode}','SubmitController@adminCheckPaper')->middleware('auth')->name('adminCheckPaper');
Route::get('/paConfirmPDF/{id}/{confirmCode}/{modify?}','SubmitController@paConfirmPDF')->middleware('auth')->name('paConfirmPDF');
Route::get('/pdfConfirmed/{id}/{confirmCode}','SubmitController@pdfConfirmed')->middleware('auth')->name('pdfConfirmed');
Route::get('/pdfRevise/{id}/{confirmCode}','SubmitController@pdfRevise')->middleware('auth')->name('pdfRevise');
Route::get('/pdfModAuth/{id}/{confirmCode}','SubmitController@pdfModAuth')->middleware('auth')->name('pdfModAuth');
Route::post('/thirdPartyAddUser','UserController@thirdPartyAddUser')->middleware('auth')->name('thirdPartyAddUser');
Route::post('/updateAuthors','SubmitController@updateAuthors')->middleware('auth')->name('updateAuthors');
Route::get('/remindLoadPaper/{paper_id}/{confirmCode}/{modify}', function($paper_id,$confirmCode,$modify) {
            return view('submit.paperCreated',['paper_id'=>$paper_id,'confirmCode'=>$confirmCode,'modify'=>$modify]);})
            ->name('remindLoadPaper');
Route::get('/PDFAdvice', function() {return view('submit.PDFAdvice');})->name('PDFAdvice');
Route::post('/adApprove', 'SubmitController@adApprove')->middleware('auth')->name('adApprove');
Route::get('/nominateReviewers/{id}/{confirmCode}', 'SubmitController@nominateReviewers')->middleware('auth')->name('nominateReviewers');
Route::post('/paUpdateRevs','SubmitController@paUpdateRevs')->middleware('auth')->name('paUpdateRevs');
Route::post('/edUpdateRevs','SubmitController@edUpdateRevs')->middleware('auth')->name('edUpdateRevs');
Route::get('/edConfirmRevs/{id}/{confirmCode}','ReviewController@edConfirmRevs')->middleware('auth')->name('edConfirmRevs');
Route::get('/edNotAvailable/{id}/{confirmCode}','ReviewController@edNotAvailable')->middleware('auth')->name('edNotAvailable');
Route::get('/getAuthors/{paper_id}', 'ReviewController@getAuthors')->name('getAuthors');
Route::get('/paConfirmRevNom/{paper_id}','SubmitController@paConfirmRevNom')->middleware('auth')->name('paConfirmRevNom');
Route::get('/adNominateEditor/{id}/{confirmCode}','ReviewController@adNominateEditor')->middleware('auth')->name('adNominateEditor');
Route::post('/edSaveRevs','ReviewController@edSaveRevs')->middleware('auth')->name('edSaveRevs');
//Route::get('/getReviewerTopics','UserController@getReviewerTopics')->middleware('auth')->name('getReviewerTopics');
//Route::post('/saveReviewerTopics','UserController@saveReviewerTopics')->middleware('auth')->name('saveReviewerTopics');
Route::get('/revReplyRequest/{id}/{confirmCode}/{answer}/{user_id}','ReviewController@revReplyRequest')->middleware('auth')->name('revReplyRequest');
Route::get('/reviewPaper/{id}/{confirmCode}/{review_id?}','ReviewController@reviewPaper')->middleware('auth')->name('reviewPaper');
Route::post('/submitReview','ReviewController@submitReview')->middleware('auth')->name('submitReview');
Route::post('/saveReview','ReviewController@saveReview')->middleware('auth')->name('saveReview');
Route::get('/confirmReviewSubmission/{review_id}/{confirmCode}','ReviewController@confirmReviewSubmission')->middleware('auth')->name('confirmReviewSubmission');
Route::get('/myJrnl','UserController@myJrnl')->middleware('auth')->name('myJrnl');
Route::get('/reviewAdvice','ReviewController@reviewAdvice')->name('reviewAdvice');
Route::get('/submissionProcess', function() {return view('submit.submissionProcess');})->name('submissionProcess');
Route::get('/keywords',function () {return view('submit.keywords');})->name('keywords');
Route::get('/autocomplete/{st}/{preferred?}','SubmitController@autocomplete')->name('autocomplete');
Route::post('/adNomEditor','ReviewController@adNomEditor')->name('adNomEditor');

// MyJrnl
Route::get('myJrnlHome','MyJrnlController@home')->middleware('auth')->name('myJrnlHome');
Route::get('/myJrnlPreferences','MyJrnlController@preferences')->middleware('auth')->name('myJrnlPreferences');
Route::get('/myJrnlEditPaper/{vol}/{pap}/{rev?}','MyJrnlController@editPaper')->middleware('auth')->name('myJrnlEditPaper');
Route::get('/myJrnlContactEditor/{paper_id}/{confirmCode}/{user_id}/{prevMsg?}','MyJrnlController@contactEditor')->middleware('auth')->name('myJrnlContactEditor');
Route::post('/emailEditor','MyJrnlController@emailEditor')->middleware('auth')->name('emailEditor');

// Administration
Route::get('/adminJrnl','AdminController@home')->middleware('auth');
Route::get('/adminPapersCompleted/{id}','AdminController@adminPapersCompleted')->middleware('auth')->name('adminPapersCompleted');
Route::any('/saveMetaData','AdminController@saveMetaData')->middleware('auth')->name('saveMetaData');
Route::any('/reloadMetaData','AdminController@reloadMetaData')->middleware('auth')->name('reloadMetaData');
Route::any('/saveRegAuth','AdminController@saveRegAuth')->middleware('auth')->name('saveRegAuth');
Route::any('/reloadRegAuth','AdminController@reloadRegAuth')->middleware('auth')->name('reloadRegAuth');
Route::any('/markDeleted/{vol}/{pap}','AdminController@markDeleted')->middleware('auth')->name('markDeleted');
Route::any('/editPaperByID/{paper_id}/{confirmCode}','AdminController@editPaperByID')->middleware('auth')->name('editPaperByID');
Route::get('/contactAuthorForm/{paper_id}/{author_id}/{confirmCode}/{prevMsg?}','AdminController@contactAuthorForm')->middleware('auth')->name('contactAuthorForm');
Route::post('/emailAuthor','AdminController@emailAuthor')->middleware('auth')->name('emailAuthor');


// routest for testing only
Route::any('/dummy/{src}','DummyController@show')->name('dummy');
Route::get('/testSubmit', function() {return view('submit.testSubmit');});
Route::get('/testSelects', function() {return view('/testSelects');});
Route::get('/testRelations','TestController@testRelations')->name('testRelations');
Route::get('/phpinfo', function() {return view('phpinfo');});
Route::get('/testEmail/{paper_id}','SubmitController@testEmail')->name('testEmail');
Route::post('/testDisplayPost','TestController@testDisplayPost')->name('testDisplayPost');
Route::get('/testKeywordSubmit','SubmitController@testKeywordSubmit')->name('testKeywordSubmit');
Route::get('/testfunction/{func?}','TestController@testFunction')->name('testfunction');
Route::get('/testCollapse',function() {return view('test.testCollapse');});

Auth::routes(['verify' => true]);

Route::get('/home', 'ViewVolController@showAll')->name('home');
