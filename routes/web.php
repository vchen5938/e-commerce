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

Route::resource('items', 'ItemController');
Route::resource('cgies', 'CgyController');
Route::resource('orders', 'OrderController');
Route::resource('users', 'UserController');


Route::get('/', 'MyController@index');

Route::get('createsession', 'MyController@createsession');
Route::get('getsession', 'MyController@getsession');
Route::get('delsession', 'MyController@delsession');
Route::get('flashdata', 'MyController@flashData');


Route::get('/test/{item}', 'ItemController@destroy');
Route::get('additem/{cgy}/{item}', 'CgyController@addItem');
Route::get('orders/additem/{order}/{item}', 'OrderController@addItem');
Route::get('orders/syncitem/{order}/{item}', 'OrderController@syncItem');
Route::get('item/syncitem/{order}/{item}', 'OrderController@syncItem');
Route::get('updateitem/{item}', 'ItemController@updateItem');
Route::get('/item/accessor/{item}', 'ItemController@testAccessor');
Route::get('/item/mutator/{item}', 'ItemController@testMutator');
Route::get('/item/sell/{item}', 'ItemController@sell_at');
Route::get('/item/cast/{item}', 'ItemController@testCast');

Route::get('/who', 'HomeController@who');
Route::get('/auth', 'HomeController@authlogin');
Route::get('/logout', 'HomeController@authlogout');
Route::get('/store', 'HomeController@storePage');
Route::get('/store1', 'HomeController@storePage1');
Route::get('/addcart/{item}', 'HomeController@addCart');
Route::get('/checkout', 'HomeController@checkOut');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
