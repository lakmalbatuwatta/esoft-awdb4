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

    return view('test');
});


Route::get('/login', function () {

    return view('user.login');
});


Route::get('/blog/{id}', function ($id) {

    $blogData = [
        'composer'=>'Composer provides an installer, written in PHP. Make sure you\'re in your home directory, and retrieve the installer using',
        'composer-install'=>'sudo apt-get install curl php-cli php-mbstring git unzip'
    ];


    dd($blogData[$id]);

});