<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome',[
        "title"=>"welcome ete"
    ]);
});

Route::get('/about', function () {
    $about_post =[
        [
            "titles"=>"Tentang Saya",
            "autors"=>"asep",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, recusandae dicta modi asperiores veniam consequatur voluptatibus consectetur deleniti provident quasi nobis. Consectetur, numquam placeat eligendi sint ea ipsa libero. Ad dicta tempore ullam quidem enim vel praesentium officiis voluptate aliquid labore voluptatibus dolore ab doloribus sed saepe sunt at quasi aut aspernatur beatae nam, in fuga laborum. Explicabo fugiat nisi nostrum hic laboriosam dignissimos quaerat cupiditate quo natus illo, ipsa saepe architecto mollitia aut quidem iste? Nulla aliquam id harum."
        ],
        
    
    ];

    return view('about',[
        "title"=>"About",
        "posts"=>$about_post
    ]);
});



Route::get('/dashboard', function () {
    return view('dashboard', [
        "title"=> "Dashboard",
        "name" => "asep",
        "alamat"=> "bandung",
        "image" => "bc.png"
    ]);
});
