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

Route::get('/auth/facebook',function(){
    return Socialite::driver('facebook')->redirect();
});

Route::get('/auth/facebook/callback',function(){
    $user = Socialite::driver('facebook')->user();
    echo $user->getEmail().'<br>';
    echo $user->getName().'<br>';
    echo $user->getAvatar().'<br>';
});

Route::get('/auth/google',function(){
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/google/callback',function(){
    $user = Socialite::driver('google')->user();
    dd($user);
});

Route::get('/auth/twitter',function(){
    return Socialite::driver('twitter')->redirect();
});

Route::get('/auth/twitter/callback',function(){
    $user = Socialite::driver('twitter')->user();
    dd($user);
});

Route::get('/auth/github',function(){
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/github/callback',function(){
    $user = Socialite::driver('github')->user();
   dd($user);
});
