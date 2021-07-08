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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','FrontController@getData')->name('data');
Route::get('/contact','FrontController@contact')->name('contact');
Route::get('blog/{id}','FrontController@blog')->name('blog');
// Route::get('/share-social','FrontController@shareSocial')->name('blog');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/login', 'HomeController@index')->name('login');
// Route::get('/share-social', [ShareSocialController::class,'shareSocial']);