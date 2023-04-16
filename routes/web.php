<?php

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

/*Base view routes*/
Route::view('/', 'home');
Route::view('/about', 'about');

/*Post controller routes*/
Route::resource('/posts', PostController::class);

/*Fallback for 404 page*/
Route::fallback(function () {
    return view('404');
});

Route::get('/ilya', function () {
    return 'ilya';
});
