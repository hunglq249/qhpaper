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

Route::get('/', 'HomeController@home')->name('home');

Route::group(['prefix' => 'san-pham'], function () {
    Route::get('/', 'ProductController@index')->name('product_index');
    Route::get('/getDetail', 'ProductController@getDetail')->name('product_get_detail');
});

Route::group(['prefix' => 'ung-dung'], function () {
    Route::get('/', 'ApplicationController@index')->name('application_index');
});

Route::get('/ve-chung-toi', 'AboutController@index')->name('about_us');

Route::get('/lien-he', 'ContactController@index')->name('contact_us');
