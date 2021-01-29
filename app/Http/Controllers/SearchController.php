<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    function index($user)
    {
        $found=User::where('username',$user)->first();
        if($found)
        {
            $avatar=$found->profile->avatar;
            return [$found->username,$avatar];
        }
        return 'User Not Found!';

    }

    function show($user)
    {
        $user=User::where('username',$user)->first();
        return view('search_result',compact('user'));
    }
}
