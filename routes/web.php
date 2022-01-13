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

Route::get('/', function () { return redirect(route('socialShare.index')); });

Route::get('/social-share', 'App\Http\Controllers\SocialShareController@index')->name('socialShare.index');

Route::get('blog/{blog}','App\Http\Controllers\SocialShareController@blog' )->name('socialShare.blog');