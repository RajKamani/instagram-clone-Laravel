<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    function show(User $user)
    {
        return view('profile', ['user' => $user]);
    }

    function profile_show(User $user)
    {
        return view('Edit_profile', ['user' => $user]);
    }

    function update(User $user)
    {

        $data = \request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required','string', 'max:25', 'alpha_dash','unique:users,username,'.$user->id],
            'link' => ['url','nullable'],
            'bio' => ['string', 'max:255','nullable'],
            'avatar' => ['image']
        ]);
        if (\request('avatar')) {
            $data['avatar'] = request('avatar')->store('avatars', 'public');
            $data['avatar'] = 'storage/' . $data['avatar'];
            $img = ['avatar' => $data['avatar']];
        }
        $user->name = $data['name'];
        $user->username = $data['username'];
        $user->save();
        unset($data['name']);
        unset($data['username']);

        $user->profile()->update(array_merge(
           $data,
            $img ?? []
        ));


        return redirect()->route('profile.show', $user->username);


    }


}
