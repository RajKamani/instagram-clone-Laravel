@extends('layouts.app')

@section('content')
    <main class="profile-container">
        <section class="profile">
            <header class="profile__header">
                <div class="profile__avatar-container">
                    <img src="images/avatar.jpg">
                </div>
                <div class="profile__info">
                    <div class="profile__name">
                        <h1 class="profile__title">{{$user->username}}</h1>
                        <a href="edit-profile.html" class="profile__button u-fat-text">Edit profile</a>
                        <a href="{{route('upload.show',$user->username)}}" class="text-decoration-none">Post Image</a>
                    </div>
                    <ul class="profile__numbers">
                        <li class="profile__posts">
                            <span class="profile__number u-fat-text">{{$user->posts()->count()}}</span> posts
                        </li>
                        <li class="profile__followers">
                            <span class="profile__number u-fat-text">40</span> followers
                        </li>
                        <li class="profile__following">
                            <span class="profile__number u-fat-text">134</span> following
                        </li>
                    </ul>
                    <div class="profile__bio">
                        <span class="profile__full-name u-fat-text">{{$user->name}}</span>
                        <p class="profile__full-bio">{{$user->profile->bio ?$user->profile->bio:'No bio'}}</p><br>
                        <a href="http://serranoarevalo.com" class="profile__link u-fat-text">serranoarevalo.com</a>
                    </div>
                </div>
            </header>
            <div class="profile__pictures">
                @if($user->posts->count() > 0)
                    @foreach($user->posts as $post)
                        @include('image_profile',$post)
                    @endforeach
                @else
                    <div style="text-align: center;padding-left: 50%"><p class="text-danger">No post yet.</p></div>
                @endif
            </div>
        </section>
    </main>
@endsection
