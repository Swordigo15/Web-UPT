<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Satu",
            "slug" => "judul-post-satu",
            "author" => "Muhammad Annys",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Vero nostrum atque deleniti quod dolorum eaque iste beatae ex asperiores! 
            Assumenda sed porro dicta odio voluptates illum non? Laboriosam explicabo, 
            non odio aperiam sed quidem corporis fuga magnam accusantium eveniet, 
            repudiandae accusamus quam nihil aliquid! Dolorum repellat voluptatum est alias adipisci id esse enim, 
            quis cupiditate cum quia nostrum aperiam doloribus impedit cumque architecto officiis. 
            Sint, numquam? Cum velit tempore, dignissimos tempora ad earum nostrum culpa expedita 
            reprehenderit necessitatibus quam! Voluptatem!"
        ],
        [
            "title" => "Judul Post Dua",
            "slug" => "judul-post-dua",
            "author" => "Muhammad Qayyim Mafaza",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Vero nostrum atque deleniti quod dolorum eaque iste beatae ex asperiores! 
            Assumenda sed porro dicta odio voluptates illum non? Laboriosam explicabo, 
            non odio aperiam sed quidem corporis fuga magnam accusantium eveniet, 
            repudiandae accusamus quam nihil aliquid! Dolorum repellat voluptatum est alias adipisci id esse enim, 
            quis cupiditate cum quia nostrum aperiam doloribus impedit cumque architecto officiis. 
            Sint, numquam? Cum velit tempore, dignissimos tempora ad earum nostrum culpa expedita 
            reprehenderit necessitatibus quam! Voluptatem!"
        ],
        [
            "title" => "Judul Post Tiga",
            "slug" => "judul-post-tiga",
            "author" => "Muhammad Nasser",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Vero nostrum atque deleniti quod dolorum eaque iste beatae ex asperiores! 
            Assumenda sed porro dicta odio voluptates illum non? Laboriosam explicabo, 
            non odio aperiam sed quidem corporis fuga magnam accusantium eveniet, 
            repudiandae accusamus quam nihil aliquid! Dolorum repellat voluptatum est alias adipisci id esse enim, 
            quis cupiditate cum quia nostrum aperiam doloribus impedit cumque architecto officiis. 
            Sint, numquam? Cum velit tempore, dignissimos tempora ad earum nostrum culpa expedita 
            reprehenderit necessitatibus quam! Voluptatem!"
        ],
    ];

    public static function all(){ return collect(self::$blog_posts); }
    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
