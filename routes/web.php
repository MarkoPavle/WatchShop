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

Route::get('/' , 'PagesController@index')->name('home');

Route::get('/proizvodi' , 'PagesController@proizvodi')->name('proizvodi');

Route::get('/kontakt', 'PagesController@kontakt')->name('kontakt');

Route::get('/proizvodi/{id}', 'PagesController@show')->name('show');



//Servis

Route::get('/servis', 'ServisController@index')->name('servis');

Route::post('servisStore', 'ServisController@store')->name('servis.store');
//Brendovi

Route::get('/brendovi' , 'BrandController@index')->name('brendovi');

Route::get('/casio','BrandController@casio')->name('casio');

Route::get('/festina', 'BrandController@festina')->name('festina');

Route::get('/citizen', 'BrandController@citizen')->name('citizen');

Route::get('/esprit', 'BrandController@esprit')->name('esprit');

Route::get('/swatch', 'BrandController@swatch')->name('swatch');

Route::get('/fossil', 'BrandController@fossil')->name('fossil');

//Admin

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');

Route::post('/adminStore', 'AdminController@store')->name('admin.store')->middleware('admin');

Route::delete('/adminDelete/{id}', 'AdminController@delete')->name('admin.delete')->middleware('admin');

Route::get('/edit{id}', 'AdminController@edit')->name('admin.edit')->middleware('admin');

Route::put('/update{id}', 'AdminController@update')->name('admin.update')->middleware('admin');

//Login
Route::post('/login/submit', 'LoginController@submit')->name('login.submit');
Route::get('/logout', 'LoginController@logout')->name('logout');


//Galerry
Route::get('/gallery', 'GalleryController@index')->name('gallery');

//
Route::post('/usersStore', 'UserController@store')->name('users.store');

//Comments
Route::post('/comment/{id}', 'CommentController@store')->name('comments');