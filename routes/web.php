<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them w
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Main page route*/
Route::resource('/', HomeController::class)->only('index');

/*Post controller routes*/
Route::resource('/posts', PostController::class);

/*Что то связанное с логином и регистрацией*/

/*Fallback, если маршрута не существует*/
Route::fallback(function () {
    return view('404');
});
