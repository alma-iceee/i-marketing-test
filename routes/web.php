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

Route::post('/send-message', 'HomeController@getJsonSendMessage');

Route::post('/subscribe', 'HomeController@getJsonSubscribe');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
