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


// Route::get('/inputAlumni', function () {
//     return view('admin.inputDataAlumni');
// })->name('inputAlumni');
Route::get('/input', function () {
    return view('forminput');
});

//report
Route::get('/laporan','LaporanController@index')->name('dataAlumni');
Route::get('/laporan;','LaporanController@filtered')->name('laporan.filter');
Route::get('siswa/export/','LaporanController@export')->name('export.siswa');
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

//status
Route::resource('/riwayatStatus','StatusDetailController');
Route::get('/json/statusDetail','StatusDetailController@json');
Route::delete('riwayatStatus/delete/{id}','StatusDetailController@destroy');

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
Route::get('/EditProfil','HomeController@profiles')->name('profiles');
Route::post('/EditProfil','HomeController@editProfiles')->name('edit.profiles');
route::get('datatables','HomeController@datatables');
Route::get('status_detail/delete/{id}', 'HomeController@destroy');

//editstatus
Route::get('/editstatus','StatusController@index')->name('status.edit');
Route::post('/EditDetail','HomeController@editDetail')->name('edit.detail');
Route::post('/update/akademik','HomeController@UpdateAkademik')->name('akademik.update');

//ColorPreset
Route::get('/preset','PresetController@index')->name('preset');
Route::post('/preset/edit','PresetController@edit')->name('presetColor.submit');

//web Config
Route::get('/config','ConfigController@index')->name('config');
Route::post('/config/edit','ConfigController@edit')->name('config.submit');
//landing page
Route::get('/','LandingsController@index')->name('welcome');
// Form Lowongan
Route::get('/form-single-lowongan;{id}','LandingsController@form_single_lowongan');
Route::get('/form-full-lowongan','LandingsController@form_full_lowongan');
// Form Sekolah
Route::get('/form-single-sekolah;{id}','LandingsController@form_single_sekolah');
Route::get('/form-full-sekolah','LandingsController@form_full_sekolah');

// Input Info Sekolah
Route::get('/infosekolah','InfoSekolahController@index');
Route::get('/json/infosekolah','InfoSekolahController@json');
Route::get('/inputinfosekolah','InfoSekolahController@create');
Route::post('/inputinfosekolah/store','InfoSekolahController@store');
Route::get('/editinfosekolah;{id}','InfoSekolahController@edit');
Route::post('/editinfosekolah/update;{id}','InfoSekolahController@update');

Route::post('/infosekolah/active/{id}','InfoSekolahController@active');
Route::post('/infosekolah/deactive/{id}','InfoSekolahController@deactive');
Route::delete('infosekolah/delete/{id}','InfoSekolahController@destroy');

// Input Info Lowongan
Route::get('/infolowongan','InfoLowonganController@index');
Route::get('/json/infolowongan','InfoLowonganController@json');
Route::get('/inputinfolowongan','InfoLowonganController@create');
Route::post('/inputinfolowongan/store','InfoLowonganController@store');
Route::get('/editinfolowongan;{id}','InfoLowonganController@edit');
Route::post('/editinfolowongan/update;{id}','InfoLowonganController@update');

Route::post('/infolowongan/active/{id}','InfoLowonganController@active');
Route::post('/infolowongan/deactive/{id}','InfoLowonganController@deactive');
Route::delete('infolowongan/delete/{id}','InfoLowonganController@destroy');

//CV
Route::get('/resume/{userId}','ResumeController@index');
Route::get('/resume/download/{userId}','ResumeController@download')->name('cv.download');

//Pesan
Route::resource('/pesan','PesanController');
Route::get('/json/pesan','PesanController@json');
Route::post('/pesan/active/{id}','PesanController@active');
Route::post('/pesan/deactive/{id}','PesanController@deactive');
Route::get('/pesan/detail/{id}','PesanController@detail');
Route::delete('pesan/delete/{id}','PesanController@destroy');

// Input Info Sekolah
Route::get('/portofolio','PortofolioController@index')->name('portofolio');
Route::get('/json/portofolio','PortofolioController@json');
Route::get('/inputportofolio','PortofolioController@create');
Route::post('/inputportofolio/store','PortofolioController@store');
Route::get('/editportofolio;{id}','PortofolioController@edit');
Route::post('/editportofolio/update;{id}','PortofolioController@update');

Route::post('/portofolio/active/{id}','PortofolioController@active');
Route::post('/portofolio/deactive/{id}','PortofolioController@deactive');
Route::delete('portofolio/delete/{id}','PortofolioController@destroy');

// Web Config
route::get('/piconfig','PicConfigController@index')->name('piconfig');

