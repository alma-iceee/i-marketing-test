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

Route::match(array('GET', 'POST'),'/', 'HomeController@index');

Route::post('/get-json', 'HomeController@getJson');

Route::post('/test', function () {
    return view('hello-world');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
