<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    function index()
    {
        $following_user=auth()->user()->following->pluck('id');
        $following_user=$following_user->push(auth()->user()->id);
        $explore_user= User::whereNotIn('id',$following_user)->paginate(5);

        return view('explore',compact('explore_user'));
    }
}
