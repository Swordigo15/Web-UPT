<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class PostController extends Controller
{
    public function post(){
        $title = '';

        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '.$category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by '.$author->name;
        }

        return view('posts', [
            "title" => 'All Posts'.$title,
            "active" => 'blog',
            // "posts" => Post::all()
            "posts" => Post::latest()->Filter(request(['search', 'category', 'author']))
            ->paginate(7)->withQueryString()
        ]);
    }

    function singlePost(Post $post){
        $post->views += 1;
        $post->save();

        return view('post', [
            "title" => "Single Post",
            "active" => 'blog',
            "post" => $post
        ]);
    }
}
