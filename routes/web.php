<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/master', function(){
    return view('layout.master');
});

Route::get('/about', function(){
    return view('layout.about');
});

Route::get('/detail', function(){
    return view('layout.detail');
});

Route::get('/login', function(){
    return view('admin.login');
});

Route::get('/dashboard', function(){
    return view('admin.dashboard');
});

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
