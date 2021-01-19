<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users= auth()->user()->following()->pluck('profiles.id');
        $users=$users->push(auth()->user()->id);
        $posts= Post::whereIn('user_id',$users)->with('user')->latest()->paginate(5);
        return view('home',compact('posts'));
    }
}
