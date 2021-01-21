<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostLikesController extends Controller
{
    function store(Post $post)
    {
        $post->like(auth()->user());
        return back();
    }
}
