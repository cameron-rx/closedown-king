<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DiscordController extends Controller
{
    //
    public function callback() 
    {

    $discordUser = Socialite::driver('discord')->user();

    $user = User::updateOrCreate([

        'discord_id' => $discordUser->id,

    ], [

        'name' => $discordUser->name,
        'avatar' => $discordUser->avatar,

    ]);



    Auth::login($user);
    return redirect('/');
}

    public function redirect()
    {
        return Socialite::driver('discord')->redirect();
    }
}
