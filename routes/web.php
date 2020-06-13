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


Route::get('/', function () {
    return view('welcome');
});

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




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
