<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('chinh-sach-rieng-tu',function(){
    return '<h1>Duong</h1>';
});

Route::get('auth/facebook',function(){
    return Socialite::driver('facebook')->redirect();
});

Route::get('auth/facebook/callback',function(){
    return 'callback login facebook';
});
