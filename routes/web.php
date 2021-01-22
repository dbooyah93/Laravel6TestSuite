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

Route::get('/welcome', function () {
    $var = 'homepage';
    return view('welcome', [
        'var' => $var
    ]);
});

Route::get('/about', function () {
    

    return view('about', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});

Route::get('/articles/{article}', 'ArticlesController@show');

// Route::get('/posts/{post}', 'PostsController@show');

// Route::get('/{endPoint}', function ($endPoint) {
//     $name = 'Sarai';
//     if ($endPoint === 'test') {
//         $this->name = 'David Boyea';
//     }
//     return view($endPoint, [
//         'user' => $name
//     ]);
// });



// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/testing', function () {
//     return [ 'array' => 'here' ];
// });
