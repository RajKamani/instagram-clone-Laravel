<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class UploadController extends Controller
{
    function show(User $user)
    {
        return view('upload',[
            'user'=>$user,
        ]);
    }
    function store(User $user)
    {
        $data = request()->validate([
            'caption' => ['required','max:255'],
            'image_to_upload' => ['required','image']
        ]);
        if(\request('image_to_upload'))
        {
            $path=request('image_to_upload')->store('uploads','public');
            $path='storage/'.$path;
        }
        $image=Image::make(public_path($path))->fit(1200,1200);
        $image->save();
        auth()->user()->posts()->create([
            'caption'=>$data['caption'],
            'image_path'=>$path
        ]);
        return redirect()->route('profile.show',compact('user'));
    }
}
