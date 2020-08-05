<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//Publication
Route::get('/publications', 'PublicationController@index');
Route::get('/publication/create', 'PublicationController@create');
Route::post('/publication', 'PublicationController@store');

//Ldap
Route::get('/ldap/user/list', 'UserLdapOneController@index');



