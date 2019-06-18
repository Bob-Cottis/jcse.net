<?php

Route::get('/', 'ViewvolController@show')->name('home');
Route::get('/phpinfo', function() {return view('phpinfo');});
Route::any('/dummy/{src}','DummyController@show')->name('dummy');
Route::any('/viewAllVol','ViewvolController@showAll')->name('viewAllVol');
Route::get('/viewvol/{vol}', 'ViewvolController@viewvolget')->name('viewVolget');
Route::post('/viewvol', 'ViewvolController@viewvolpost')->name('viewVolpost');
Route::get('/viewPaper/{vol}/{pap}/{typ?}/{rev?}','ViewpaperController@viewPaper',['middleware'=>'auth']);
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
Route::post('/postTest', 'SubmitController@postTest')->name('postTest');
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
Route::post('/updateRevs','SubmitController@updateRevs')->name('updateRevs');
Route::get('/adConfirmRevs/{id}/{confirmCode}','SubmitController@adConfirmRevs')->middleware('auth')->name('adConfirmRevs');
Route::post('/showPost','TestController@showPost')->name('showPost');

Auth::routes();

Route::get('/home', 'ViewVolController@showAll')->name('home');
