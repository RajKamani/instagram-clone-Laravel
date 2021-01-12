@extends('layouts.app')

@section('content')
    <main class="edit-profile">
        <section class="profile-form">
            <header class="profile-form__header">
                <div class="profile-form__avatar-container">
                    <img src="{{'/'.$user->profile->avatar}}" class="profile-form__avatar">
                </div>
                <h4 class="profile-form__title">{{$user->username}}</h4>
            </header>

            <form action="{{route('profile.update',$user->username)}}" method="post" class="edit-profile__form" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="edit-profile__form-row">
                    <label for="name" class="edit-profile__label">Name
                    </label>
                    <input id="name" type="text"  name="name" value="{{$user->name}}" class="edit-profile__input">
                    @error('name')
                    <span class=" pl-2 text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="edit-profile__form-row">
                    <label for="username" class="edit-profile__label">
                        Username
                    </label>
                    <input type="text" id="username"  name="username" class="edit-profile__input" value="{{$user->username}}">
                    @error('username')
                    <span class=" pl-2 text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="edit-profile__form-row">
                    <label for="website" class="edit-profile__label">
                        Website
                    </label>
                    <input type="url" name="link" placeholder="eg. https://www.google.com" id="website" class="edit-profile__input"
                           value="{{$user->profile->link ?$user->profile->link  :''}}">
                </div>
                <div class="edit-profile__form-row">
                    <label for="bio" class="edit-profile__label">
                        Bio
                    </label>
                    <textarea id="bio" name="bio" class="edit-profile__textarea"
                              style="margin-top: 0px; margin-bottom: 0px; height: 45px;">{{$user->profile->bio}}</textarea>
                </div>

                <div class="edit-profile__form-row">
                    <label for="avatar" class="edit-profile__label">
                        Profile Pic
                    </label>
                    <input type="file" name="avatar">
                </div>

                <div class="edit-profile__form-row">
                    <label class="edit-profile__label"></label>
                    <input type="submit" value="Submit">
                </div>
            </form>

        </section>
    </main>
@endsection
