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
}
