<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('tes','AdminController@index');
Route::get('login','LoginController@login');

Route::post('authenticate','LoginController@authenticate');
Route::post('reset_password','LoginController@reset');
Route::get('logout','LoginController@logout');


Route::get('/', 'HomeController@home');
Route::get('home', 'HomeController@home');
Route::get('about', 'HomeController@about');
Route::get('news', 'HomeController@news');
Route::get('contact', 'HomeController@contact');
Route::get('grafik','HomeController@grafik');


Route::group(array('before'=>'auth'),function(){
	//akses untuk admin
	Route::group(array('prefix'=>'cetak','before'=>'admin'),function(){
		
	});


	Route::group(array('prefix'=>'admin','before'=>'admin'),function(){
		Route::get('home','AdminController@index');
		Route::resource('jenjang','JenjangController');
		Route::resource('kelompok','KelompokController');
		Route::resource('anggota','AnggotaController');
		Route::resource('agenda','AgendaController');
		Route::resource('users','UserController');
	});
	//end akses admin
});

Route::get('chart','WebController@index');