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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::resource('todo', 'TodoController', ['only' => [
        'index', 'create', 'store', 'show', 'edit','update'
    ]]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
