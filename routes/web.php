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
Route::get('/home','HomeController@index')->name('home');
Route::get('/laporan','LaporanController@index')->name('dataAlumni');
Route::get('/inputAlumni', function () {
    return view('admin.inputDataAlumni');
})->name('inputAlumni');
Route::get('/input', function () {
    return view('forminput');
});
Route::get('siswa/export/','HomeController@export')->name('export.siswa');
//jurusan
Route::resource('/inputjurusan','JurusanController');
//rayon
Route::resource('/inputrayon','RayonController');
//Status
// Route::resource('/inputstatus','StatusController'); -> jangan dulu
//Product
Route::resource('ajaxproducts','ProductController');



