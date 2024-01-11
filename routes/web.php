<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return view('welcome'); });

Route::get('/Home', function(){
    return view('home', [
        "title" => "HOME"
    ]);
})->name('Home');

Route::get('/About', function(){
    return view('about', [
        "title" => "ABOUT",
        "name" => "Muhammad Annys",
        "email" => "annys.abubakar@gmail.com",
        "image" => "logo.png"
    ]);
})->name('About');

Route::get('/Post', [PostController::class, 'post'])->name('Post');
Route::get('/Post/{post:slug}', [PostController::class, 'singlePost']);