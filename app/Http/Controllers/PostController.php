<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function post(){
        return view('posts', [
            "title" => 'All Posts',
            "active" => 'posts',
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    function singlePost(Post $post){
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
