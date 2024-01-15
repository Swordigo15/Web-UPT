<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('categories/{category:slug}', function(Category $category){
    return view('categories', [
        'title' => 'Category',
        'posts' => Category::all(),
    ]);
});

Route::get('categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post by Categoty : $category->name",
        'posts' => $category->posts->load('category', 'author')
    ]);
});

Route::get('authors/{author:username}', function(User $author){
    return view('posts', [
        'title' => "Post by Aithor : $author->name",
        'posts' => $author->posts->load('category', 'author')
    ]);
});