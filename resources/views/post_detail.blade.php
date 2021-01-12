@extends('layouts.app')

@section('content')
        <main class="d-flex justify-content-center">
        <div class="d-flex" style="
                             max-width: 75%;
                             background-color: white;
                            border:1px solid rgba(0,0,0,.0975);
                            border-radius: 3px;">


            <div class=" border-right">
                <div>
                    <img src="{{"/".$post->image_path}}"
                         class="pb-0 " style="width: 55%; border-radius: unset;"
                         alt="Image">
                </div>
            </div>

            <div class=" col-3 mt-2 ml-2">
                <div class="d-flex align-items-center  profile-form__avatar-container">
                    <img src="{{"/".$post->user->profile->avatar}}"
                         class="profile-form__avatar mr-2">
                    <p class="font-weight-bold ml-2">{{$post->user->username}}</p>
                    <a href="" class="ml-3 text-decoration-none">Follow</a>
                </div>
                <p class="mt-3">{{$post->caption}}</p>
            </div>

        </div>


    </main>
@endsection
