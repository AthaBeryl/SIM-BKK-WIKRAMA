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

Auth::routes();
Route::get('/',function(){
 return view('admin.webPreset');
})->middleware('auth');
Route::get('/home','HomeController@index')->name('home');
Route::get('/laporan','LaporanController@index')->name('dataAlumni');
// Route::get('/inputAlumni', function () {
//     return view('admin.inputDataAlumni');
// })->name('inputAlumni');
Route::get('/input', function () {
    return view('forminput');
});

//alumni
Route::resource('/inputalumni','SiswaController');
Route::get('/json/alumni','SiswaController@json');
Route::get('/alumni/detail/{id}','SiswaController@detail');
Route::delete('inputalumni/delete/{id}','SiswaController@destroy');
Route::get('siswa/export/','HomeController@export')->name('export.siswa');

//jurusan
Route::resource('/inputjurusan','JurusanController');
Route::get('/json/jurusan','JurusanController@json');
Route::delete('inputjurusan/delete/{id}','JurusanController@destroy');

//rayon
Route::resource('/inputrayon','RayonController');
Route::get('/json/rayon','RayonController@json');
Route::delete('inputrayon/delete/{id}','RayonController@destroy');

//instansi
Route::resource('/inputinstansi','InstansiController');
Route::get('/json/instansi','InstansiController@json');
Route::delete('inputinstansi/delete/{id}','InstansiController@destroy');

//Status
// Route::resource('/inputstatus','StatusController'); -> jangan dulu
//Product
Route::resource('ajaxproducts','ProductController');
Route::get('/user','UserController@index');

//AlumniDashboard
Route::post('/update/profile','HomeController@UpdateProfile')->name('profile.update');
Route::post('/update/akademik','HomeController@UpdateAkademik')->name('akademik.update');

//email
Route::get('/send/email/','EmailController@reminder');

//Web Config
Route::get('/preset',function(){
    return view('admin.webPreset');
   })->middleware('auth');