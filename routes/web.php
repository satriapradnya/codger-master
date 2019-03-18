<?php

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
    return view('cs.coming-soon');
});

//landing page


//blog
Route::get('/blog', function () {
    return view('blog.index');
});
Route::get('/blog-about', function () {
    return view('blog.about');
});


//forum
