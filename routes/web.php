<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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

    // DB::table('users')->insert([
    //     'name'=> 'Huy Dương',
    //     'email'=> 'huyduong@gmail.com',
    //     'password'=> Hash::make('123456'),
    // ]);

    // $data =DB::table('users')->get();
    // dd($data);
    return view('welcome');
});

Route::get('chinh-sach-rieng-tu',function(){
    return '<h1>Duong</h1>';
});

Route::get('/auth/facebook',function(){
    return Socialite::driver('facebook')->redirect();
})->name('auth.facebook');

Route::get('/auth/facebook/callback',[LoginController::class,'facebookCallback']);

Route::get('/auth/google',function(){
    return Socialite::driver('google')->redirect();
})->name('auth.google');

Route::get('/auth/google/callback',[LoginController::class,'googleCallback']);

Route::get('/auth/twitter',function(){
    return Socialite::driver('twitter')->redirect();
});

Route::get('/auth/twitter/callback',function(){
    $user = Socialite::driver('twitter')->user();
    dd($user);
});

Route::get('/auth/github',function(){
    return Socialite::driver('github')->redirect();
})->name('auth.github');

Route::get('/auth/github/callback',[LoginController::class,'githubCallback']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
