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

Route::get('/', IndexController::class)->name('home');

Route::get('/about', 'PageController@about')->name('about');

Route::get('/contacts', 'PageController@contacts')->name('contacts');

Route::get('/services', 'PageController@services')->name('services');

Route::get('/author/{key}', News_by_author_controller::class)->name('news_by_authors');

Route::get('/news/{id}', Single_news_controller::class)->name('single_news');