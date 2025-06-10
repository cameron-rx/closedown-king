<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

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

    // TODO: Auto verification and role assignment
    // Get user access token 
    // Make http request to guilds endpoint 
    // if 404 verified = false
    // else verified = true
    // check roles for tl/manager id 
    // if  present admin = true
    // else admin = false
    // Revs guild id = 963448945592373320

    $accessToken = $discordUser->token;

    $response = Http::withToken($accessToken)->get('https://discord.com/api/v10/users/@me/guilds/963448945592373320/member');


    if ($response->ok()) {
        // role ids for managment and team leader role in server
        $adminRoles = ['963496000935301181', '971022818055696384'];
        // server specific nickname
        $nickname = $response['nick'];
        $roles = $response['roles'];
        $admin = false;

        foreach ($adminRoles as $roleId) {
            if (in_array($roleId, $roles)) {
                $admin = true;
                break;
            }
        } 

        $user->name = $nickname;
        $user->is_whitelisted = true;
        $user->is_admin = $admin;
        $user->save();
    }





    Auth::login($user);
    return redirect('/');
}

    public function redirect()
    {
        return Socialite::driver('discord')->scopes(['guilds.members.read'])->redirect();

    }

}
