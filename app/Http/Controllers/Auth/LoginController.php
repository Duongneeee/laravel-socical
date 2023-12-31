<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function facebookCallback(){
        $user = Socialite::driver('facebook')->user();
        echo $user->getEmail().'<br>';
        echo $user->getName().'<br>';
        echo $user->getAvatar().'<br>';
    }

    public function googleCallback(){
        $user = Socialite::driver('google')->user();
        echo $user->getEmail().'<br>';
        echo $user->getName().'<br>';
        echo $user->getAvatar().'<br>';
    }

    public function twitterCallback(){}

    public function githubCallback(){
        $user = Socialite::driver('github')->user();
        echo $user->email.'<br>';
        echo $user->name.'<br>';
        echo $user->getAvatar().'<br>';
    }

}
