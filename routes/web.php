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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/order', 'Order\PostController@save');
Route::get('/order/detail/{id}', 'Order\ViewController@detail');
Route::get('/profil/{id}', 'Users\ViewController@detail');

Route::get('/admin', 'Admin\ViewController@index');
Route::get('/admin/users', 'Admin\ViewController@users');
Route::get('/admin/pool', 'Admin\ViewController@pool');
Route::get('/admin/order', 'Admin\ViewController@order');

Route::post('/users/baru', 'Users\PostController@save');
Route::get('/users/single/{id}', 'Users\ViewController@single');
Route::get('/users/edit/{id}', 'Users\ViewController@edit');
Route::post('/users/edit/{id}', 'Users\PostController@save');
Route::get('/users/delete/{id}', 'Users\PostController@delete');

Route::post('/pool/baru', 'Pool\PostController@save');
Route::get('/pool/single/{id}', 'Pool\ViewController@single');
Route::get('/pool/edit/{id}', 'Pool\ViewController@edit');
Route::post('/pool/edit/{id}', 'Pool\PostController@save');
Route::get('/pool/delete/{id}', 'Pool\PostController@delete');

Route::post('/order/baru', 'Order\PostController@save');
Route::get('/order/single/{id}', 'Order\ViewController@single');
Route::get('/order/edit/{id}', 'Order\ViewController@edit');
Route::post('/order/edit/{id}', 'Order\PostController@save');
Route::get('/order/delete/{id}', 'Order\PostController@delete');