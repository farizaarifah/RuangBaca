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

Route::get('/', 'BukuController@index');

Route::get('/register', function () {
    return view('register');
});

Route::get('/loginn','AuthController@index');
//Route::post('native/login','AuthNativeController@auth');


Route::get('/create', 'BukuController@create');

Route::get('/buku', 'BukuController@index');
Route::get('/buku/read', 'BukuController@read');
Route::get('/buku/create', 'BukuController@create');
Route::get('/buku/{buku}', 'BukuController@show');
Route::post('/buku', 'BukuController@store');
Route::get('/buku/{buku}/edit', 'BukuController@edit');
Route::patch('/sbuku/{buku}', 'BukuController@update');
Route::get('/buku/{buku}/delete', 'BukuController@destroy');

Auth::routes();

Route::get('/home', 'BukuController@index')->name('home');



