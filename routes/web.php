<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'ViewvolController@show')->name('home');
Route::get('/phpinfo', function() {return view('phpinfo');});
Route::any('/dummy/{src}','DummyController@show')->name('dummy');
Route::any('/viewAllVol','ViewvolController@showAll')->name('viewAllVol');
Route::get('/viewvol/{vol}', 'ViewvolController@viewvolget')->name('viewVolget');
Route::post('/viewvol', 'ViewvolController@viewvolpost')->name('viewVolpost');
Route::get('/viewPaper/{vol}/{pap}/{rev?}','ViewpaperController@viewPaper',['middleware'=>'auth']);
Route::get('showPDF/{typ}/{vol}/{pap}/{rev?}','ViewpaperController@showPDF',['middleware'=>'auth'])->name('showPDF');
// Route::get('/showHTML/{typ}/{vol}/{pap}','ViewpaperController@showHTML',['middleware'=>'auth'])->name{'showHTML'};
Route::get('showHTML/{typ}/{vol}/{pap}', 'ViewpaperController@showHTML',['middleware'=>'auth'])->name('showHTML');
Route::get('showPage/{page}', 'ShowPageController@show')->name('showPage');
Route::get('/dbxfer','dbXferController@xfr')->name('dbXfer');

Auth::routes();

Route::get('/home', 'ViewVolController@showAll')->name('home');
