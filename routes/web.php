<?php

use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
        "title" => "HOME",
        'active'=> 'home',
    ]);
})->name('Home');

Route::get('/About', function(){
    return view('about', [
        "title" => "ABOUT",
        'active'=> 'about',
        "name" => "Muhammad Annys",
        "email" => "annys.abubakar@gmail.com",
        "image" => "logo.png"
    ]);
})->name('About');

Route::get('/Post', [PostController::class, 'post'])->name('Post');
Route::get('/Post/{post:slug}', [PostController::class, 'singlePost']);

Route::get('/Categories', function(){
    return view('category', [
        'title' => 'Category',
        'active'=> 'category',
        'categories' => Category::all(),
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);