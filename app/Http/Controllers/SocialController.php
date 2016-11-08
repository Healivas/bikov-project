<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\SocialAccountService;
use Socialite;

class SocialController extends Controller
{
    public function login($provider)
    {
        return Socialite::with($provider)->redirect();
    }

    public function callback(SocialAccountService $service, $provider)
    {
        $driver = Socialite::driver($provider)->stateless(false);
        //dd($driver->user());
        $user = $service->createOrGetUser($driver, $provider);
        \Auth::login($user, true);
        return redirect()->intended('/');
    }

}
