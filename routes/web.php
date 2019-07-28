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
    return view('home');
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/wall', function () {
    return view('wall');
});

Route::get('/addpost', function () {
    return view('addPost');
});

Route::get('/calander', function () {
    return view('calander');
});

Route::get('/timeline', function () {
    return view('timeline');
});
