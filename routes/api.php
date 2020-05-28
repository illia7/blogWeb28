<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function(){
	return response() -> json(['User' => ['Name' => 'Ivan', 'Email' => 'example@mail.ua']], 200);
});

Route::get('/news', function(){
	return response() -> json(\App\News::all(),200);
});
