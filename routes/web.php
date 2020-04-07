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
Auth::routes(['verify' => true]);
Route::get('/auth',function(){
 return view('welcome');
})->middleware('auth');
Route::get('/home','HomeController@index')->name('home');
Route::get('/laporan','LaporanController@index')->name('dataAlumni');
// Route::get('/inputAlumni', function () {
//     return view('admin.inputDataAlumni');
// })->name('inputAlumni');
Route::get('/input', function () {
    return view('forminput');
});

//IO
Route::get('siswa/export/','HomeController@export')->name('export.siswa');
Route::post('import', 'LaporanController@import')->name('import.siswa');
//alumni
Route::resource('/inputalumni','SiswaController');
Route::get('/json/alumni','SiswaController@json');
Route::get('/alumni/detail/{id}','SiswaController@detail');
Route::delete('inputalumni/delete/{id}','SiswaController@destroy');

//jurusan
Route::resource('/inputjurusan','JurusanController');
Route::get('/json/jurusan','JurusanController@json');
Route::delete('inputjurusan/delete/{id}','JurusanController@destroy');

//recycle bin
Route::get('/trash','SiswaController@trash');
Route::get('/json/alumni/trash','SiswaController@jsontrash');
Route::get('/alumni/restore/{id}','SiswaController@restore');
Route::get('/alumni/restore_all','SiswaController@restore_all');
Route::delete('/alumni/delete/{id}','SiswaController@destroy_permanent');

//rayon
Route::resource('/inputrayon','RayonController');
Route::get('/json/rayon','RayonController@json');
Route::delete('inputrayon/delete/{id}','RayonController@destroy');

//instansi
Route::resource('/inputinstansi','InstansiController');
Route::get('/json/instansi','InstansiController@json');
Route::delete('inputinstansi/delete/{id}','InstansiController@destroy');

//Product
Route::resource('ajaxproducts','ProductController');
Route::get('/user','UserController@index');

//AlumniDashboard
Route::post('/update/profile','HomeController@UpdateProfile')->name('profile.update');
Route::post('/update/akademik','HomeController@UpdateAkademik')->name('akademik.update');
Route::get('/EditProfil','HomeController@profiles')->name('profiles');
Route::post('/EditProfil','HomeController@editProfiles')->name('edit.profiles');
Route::get('/send/email','EmailController@reminder');
Route::post('/EditDetail','HomeController@editDetail')->name('edit.detail');

//ColorPreset
Route::get('/preset','PresetController@index')->name('preset');
Route::post('/preset/edit','PresetController@edit')->name('presetColor.submit');

//web Config
Route::get('/config','ConfigController@index')->name('config');
Route::post('/config/edit','ConfigController@edit')->name('config.submit');
//landing page
Route::get('/','LandingsController@index');
// Form Lowongan
Route::get('/form-single-lowongan','LandingsController@form_single_lowongan');
Route::get('/form-full-lowongan','LandingsController@form_full_lowongan');
// Form Sekolah
Route::get('/form-single-sekolah','LandingsController@form_single_sekolah');
Route::get('/form-full-sekolah','LandingsController@form_full_sekolah');