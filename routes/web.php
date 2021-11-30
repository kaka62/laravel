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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    $blogs = [
        [
        "title"=>"Judul Blog1",
        "slug" => "halaman-blog1",
        "author" => "Ridwan Fauzi1",    
        "content" => "1Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus mollitia quas maxime possimus ex, eaque ducimus dicta deleniti eligendi quos pariatur nobis, voluptatum libero obcaecati ab debitis qui placeat ipsum veniam fugiat, quasi dolores! Suscipit quisquam maxime fugit commodi, est, soluta, placeat asperiores aspernatur sequi odio cumque ex itaque ipsam aperiam adipisci tempore deserunt ipsa obcaecati! Itaque nobis quod veniam inventore eos consequuntur consectetur fuga praesentium ipsum eum dolorum error aliquid libero culpa et, odio a. Voluptates beatae nam nobis esse dolorem maxime ipsum rem unde optio id accusantium ullam asperiores officia quibusdam vero odit, dolores sunt voluptatum sequi possimus!"
        ],
        [
            "title"=>"Judul Blog2",
            "slug" => "halaman-blog2",
            "author" => "Ridwan Fauzi2",    
            "content" => "2Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus mollitia quas maxime possimus ex, eaque ducimus dicta deleniti eligendi quos pariatur nobis, voluptatum libero obcaecati ab debitis qui placeat ipsum veniam fugiat, quasi dolores! Suscipit quisquam maxime fugit commodi, est, soluta, placeat asperiores aspernatur sequi odio cumque ex itaque ipsam aperiam adipisci tempore deserunt ipsa obcaecati! Itaque nobis quod veniam inventore eos consequuntur consectetur fuga praesentium ipsum eum dolorum error aliquid libero culpa et, odio a. Voluptates beatae nam nobis esse dolorem maxime ipsum rem unde optio id accusantium ullam asperiores officia quibusdam vero odit, dolores sunt voluptatum sequi possimus!"
        ],
    ];
    return view('blog', [
        "posts"=>$blogs]);
});

Route::get('/blog/{slug}', function (){
   return view('post'); 
});