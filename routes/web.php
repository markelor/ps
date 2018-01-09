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
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {
  route::resource('book','BookTable\BookTableController');
  route::resource('contact','Contact\ContactController');
  route::resource('event','Event\EventController');
  route::get('servicios', function () {
	 return view('service.service');
  });
  route::get('manos-pies', function () {
   return view('service.manos-pies');
  });
  route::get('depilacion', function () {
   return view('service.depilacion');
  });
  route::get('facial', function () {
   return view('service.facial');
  });
  route::get('corporal', function () {
   return view('service.corporal');
  });
  route::get('corporales-faciales-aparato', function () {
   return view('service.corporales-faciales-aparato');
  });
  route::get('actividades', function () {
   return view('service.actividades');
  });
  route::get('galeria', function () {
    return view('gallery.gallery');
  });      
  route::get('contacto', function () {
    return view('contact.contact');
  });
  route::resource('calendario', 'Calendar\calendarController');
  route::get('oauth', ['as' => 'oauthCallback', 'uses' => 'Calendar\calendarController@oauth']);
      
});
