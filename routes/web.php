<?php

Route::get('/', 'ViewvolController@show')->name('home');
Route::get('/phpinfo', function() {return view('phpinfo');});
Route::any('/dummy/{src}','DummyController@show')->name('dummy');
Route::any('/viewAllVol','ViewvolController@showAll')->name('viewAllVol');
Route::get('/viewvol/{vol}', 'ViewvolController@viewvolget')->name('viewVolget');
Route::post('/viewvol', 'ViewvolController@viewvolpost')->name('viewVolpost');
Route::get('/viewPaper/{vol}/{pap}/{rev?}','ViewpaperController@viewPaper',['middleware'=>'auth']);
Route::get('showPDF/{typ}/{vol}/{pap}/{rev?}','ViewpaperController@showPDF',['middleware'=>'auth'])->name('showPDF');
Route::get('showHTML/{typ}/{vol}/{pap}/{pap_id}/{commentCount}', 'ViewpaperController@showHTML',['middleware'=>'auth'])->name('showHTML');
Route::get('showPage/{page}', 'ShowPageController@show')->name('showPage');
Route::get('/dbxfer','dbXferController@xfr')->name('dbXfer');
Route::get('/addComment/{pap_id}/{pageOrPara}/{comm_id?}','CommentController@add',['middleware'=>'auth'])->name('addComment');
Route::get('/viewComments/{pap_id}/{html?}','CommentController@view')->name('viewComments');
Route::post('/createComment','commentController@create')->name('createComment');
Route::get('/caConfirm/{id}/{confirmCode}','commentController@caConfirm',['middleware'=>'auth'])->name('caConfirm');
Route::get('/edNotify/{id}','commentController@edNotify')->name('edNotify');
Route::get('/paNotify/{id}','commentController@paNotify')->name('paNotify');
Route::get('/edConfirm/{id}','commentController@edConfirm',['middleware'=>'auth'])->name('edConfirm');
Route::get('/adConfirm/{id}','commentController@adConfirm',['middleware'=>'auth'])->name('adConfirm');
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

Auth::routes();

Route::get('/home', 'ViewVolController@showAll')->name('home');
