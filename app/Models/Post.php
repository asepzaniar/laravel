<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts = [
        [
            "titles"=>"JUDUL PERTAMA",
            "slug"=>"judul-pertama",
            "autors"=>"Asep",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Magnam, recusandae dicta modi asperiores ",
            "image" => "me.jpg"
        ], [
            "titles"=>"JUDUL KEDUA",
            "slug"=>"judul-kedua",
            "autors"=>"Dadang",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Magnam, recusandae dicta modi asperiores veniam consequatur voluptatibus 
            consectetur deleniti provident ",
            "image" => "me.jpg"
        ],
        
    
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
    $posts = static::all();

    return $posts->firstWhere('slug', $slug);
    }
}
