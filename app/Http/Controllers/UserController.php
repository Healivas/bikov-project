<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function getUser($id)
    {
        $user = User::find($id);

        return view('users.profile', [
            'user' => $user,
        ]);
    }

    public function login_vk(Request $request)
    {
        $count = User::where('vk_id', '=', $request->id)->count();

        if ($count > 0) {
            $login = User::where('vk_id', '=', $request->id)->first();
            Auth::login($login);
        } else {
            $user = new User();
            $user->name = $request->full_name;
            $user->photo = $request->photo;
            $user->email = 'ololo@me.com';
            $user->vk_id = $request->id;
            $user->save();
        }

        return response()->json(array(
            'id' => $request->id,
            'name' => $request->full_name,
            'photo' => $request->photo,
            'user_id' => $login->id,
        ));
    }

}
