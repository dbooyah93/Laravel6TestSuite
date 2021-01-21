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


Route::get('/posts/{post}', 'PostsController@show');

Route::get('/{endPoint}', function ($endPoint) {
    $name = 'Sarai';
    if ($endPoint === 'test') {
        $this->name = 'David Boyea';
    }
    return view($endPoint, [
        'user' => $name
    ]);
});


// Route::get('/', function () {
//     $name = request('name');
    
//     return view('welcome', [
//         'name' => $name
//     ]);
// });

// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/testing', function () {
//     return [ 'array' => 'here' ];
// });
