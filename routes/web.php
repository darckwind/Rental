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

Route::get('/', function () {
    return redirect('login');;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ruta a los controladores

Route::resource('moto','MotoController');
Route::resource('rent','RentController');
Route::resource('seguro','SeguroController');
Route::resource('mantenimiento','MantenientoController');

Route::get('mantenimiento/custom/{pantente}','MantenientoController@customCreate');

Route::get('moto/download/{moto}','DownloadController@getRVM')->name('moto.rvm');
Route::get('moto/downloadSeguro/{moto}','DownloadController@getSeguro')->name('moto.seguro');
Route::get('moto/downloadRev/{moto}','DownloadController@getRev')->name('moto.rev');
Route::get('moto/downloadper/{moto}','DownloadController@getPer')->name('moto.per');
