<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ImageViewController extends Controller
{
    function show(Post $post)
    {
        return view('post_detail',compact('post'));
    }
}
