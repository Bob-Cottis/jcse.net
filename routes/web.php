<?php

Route::get('/', 'ViewvolController@show')->name('home');
Route::get('/error/{msg}', function($msg) {return view('error',['msg'=>$msg]);})->name('error');
Route::get('/phpinfo', function() {return view('phpinfo');});
Route::any('/dummy/{src}','DummyController@show')->name('dummy');
Route::any('/viewAllVol','ViewvolController@showAll')->name('viewAllVol');
Route::get('/viewvol/{vol}', 'ViewvolController@viewvolget')->name('viewVolget');
Route::post('/viewvol', 'ViewvolController@viewvolpost')->name('viewVolpost');
Route::get('/viewPaper/{vol}/{pap}/{typ?}/{rev?}','ViewpaperController@viewPaper',['middleware'=>'auth'])->name('viewPaper');
//Route::get('/viewPaperByID/{id}','ViewpaperController@viewPaper',['middleware'=>'auth'])->name('viewPaperByID');
Route::get('showPDF/{typ}/{vol}/{pap}/{rev?}','ViewpaperController@showPDF',['middleware'=>'auth'])->name('showPDF');
Route::get('showHTML/{typ}/{vol}/{pap}/{rev}/{commentCount}', 'ViewpaperController@showHTML',['middleware'=>'auth'])->name('showHTML');
Route::get('showPage/{page}', 'ShowPageController@show')->name('showPage');
Route::get('/dbxfer','dbXferController@xfr')->name('dbXfer');
Route::get('/addComment/{pap_id}/{html}/{comm_id?}','CommentController@add',['middleware'=>'auth'])->name('addComment');
Route::get('/viewComments/{pap_id}/{html?}','CommentController@view')->name('viewComments');
Route::post('/createComment','commentController@create')->name('createComment');
Route::get('/caConfirm/{id}/{confirmCode}','commentController@caConfirm',['middleware'=>'auth'])->name('caConfirm');
Route::get('/edNotify/{id}','commentController@edNotify')->name('edNotify');
Route::get('/RejectComment/{id}/{confirmCode}/{src}','commentController@Reject')->name('RejectComment');
Route::post('/RejectComment','commentController@RejectPost')->name('RejectCommentPost');
Route::get('/paNotify/{id}','commentController@paNotify')->name('paNotify');
Route::get('/edAcceptComment/{id}/{confirmCode}','commentController@edAccept',['middleware'=>'auth'])->name('edAcceptComment');
Route::get('/adAcceptComment/{id}/{confirmCode}','commentController@adAccept',['middleware'=>'auth'])->name('adAcceptComment');
//Route::get('/adRejectComment/{id}/{confirmCode}','commentController@adReject',['middleware'=>'auth'])->name('adRejectComment');
Route::get('/newVersion', function() {return view('newVersion');})->name('newVersion');
Route::get('/caConfirmTest', function(){return view('comments.caConfirm');});
Route::get('/subForm1', function() {return view('submit.subForm1');})->name('subForm1');
Route::get('/subForm2', function() {return view('submit.subForm2');},['middleware'=>'auth'])->name('subForm2');
Route::post('/CheckEmail', 'SubmitController@checkEmailPost')->name('submitCheckEmailPost');
Route::get('/CheckEmail/{email?}', 'SubmitController@checkEmail')->name('CheckEmail');
Route::post('/createPaper', 'SubmitController@createPaper',['middleware'=>'auth'])->name('createPaper');
Route::post('/postDump', function() {return view('submit.postDump');});
Route::get('/testSubmit', function() {return view('submit.testSubmit');});
Route::get('/testSelects', function() {return view('/testSelects');});
Route::post('/loadPaper','SubmitController@loadPaper',['middleware'=>'auth'])->name('/loadPaper');
//Route::get('/paperSaved/{paper_id}','SubmitController@paperSaved')->name('paperSaved');
Route::post('/sendCommentReject','CommentController@processReject')->middleware('auth')->name('sendCommentReject');
Route::get('/testRelations','TestController@testRelations')->name('testRelations');
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
Route::get('/testEmail/{paper_id}','SubmitController@testEmail')->name('testEmail');
Route::get('/paConfirmRevNom/{paper_id}','SubmitController@paConfirmRevNom')->middleware('auth')->name('paConfirmRevNom');
Route::get('/adNominateEditor/{id}/{confirmCode}','SubmitController@adNominateEditor')->middleware('auth')->name('adNominateEditor');
Route::post('/edSaveRevs','ReviewController@edSaveRevs')->middleware('auth')->name('edSaveRevs');
Route::get('/getReviewerTopics','UserController@getReviewerTopics')->middleware('auth')->name('getReviewerTopics');
Route::post('/saveReviewerTopics','UserController@saveReviewerTopics')->middleware('auth')->name('saveReviewerTopics');
Route::get('/revReplyRequest/{id}/{confirmCode}/{answer}','ReviewController@revReplyRequest')->middleware('auth')->name('revReplyRequest');
Route::get('/reviewPaper/{id}/{confirmCode}','ReviewController@reviewPaper')->middleware('auth')->name('reviewPaper');
Route::get('/myJrnl','UserController@myJrnl')->middleware('auth')->name('myJrnl');
Route::get('/reviewAdvice','ReviewController@reviewAdvice')->middleware('auth')->name('reviewAdvice');
Route::get('/submissionProcess', function() {return view('submit.submissionProcess');})->name('submissionProcess');
Route::get('/keywords',function () {return view('submit.keywords');})->name('keywords');
Route::get('/autocomplete/{st}/{preferred?}','SubmitController@autocomplete')->name('autocomplete');
Route::get('/testKeywordSubmit','SubmitController@testKeywordSubmit')->name('testKeywordSubmit');


Auth::routes();

Route::get('/home', 'ViewVolController@showAll')->name('home');
