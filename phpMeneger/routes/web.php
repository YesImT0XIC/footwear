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

Route::get('/', 'App\Http\Controllers\MainController@welcome');

Route::get('/send', 'App\Http\Controllers\MainController@send')->name('send');

Route::post('/send/check', 'App\Http\Controllers\MainController@send_check');

Route::get('/full', 'App\Http\Controllers\MainController@full')->name('full');
