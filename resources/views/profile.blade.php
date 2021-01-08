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
                        <i class="fa fa-cog fa-2x" id="cog"></i>
                    </div>
                    <ul class="profile__numbers">
                        <li class="profile__posts">
                            <span class="profile__number u-fat-text">10</span> posts
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
                <a href="image-detail.html" class="profile-picture">
                    <img src="images/feedPhoto.jpg" class="profile-picture__picture">
                    <div class="profile-picture__overlay">
                            <span class="profile-picture__number">
                                <i class="fa fa-heart"></i> 450
                            </span>
                        <span class="profile-picture__number">
                                <i class="fa fa-comment"></i> 39
                            </span>
                    </div>
                </a>
                <a href="image-detail.html" class="profile-picture">
                    <img src="/images/feedPhoto.jpg" class="profile-picture__picture">
                    <div class="profile-picture__overlay">
                            <span class="profile-picture__number">
                                <i class="fa fa-heart"></i> 450
                            </span>
                        <span class="profile-picture__number">
                                <i class="fa fa-comment"></i> 39
                            </span>
                    </div>
                </a>
                <a href="image-detail.html" class="profile-picture">
                    <img src="/images/feedPhoto.jpg" class="profile-picture__picture">
                    <div class="profile-picture__overlay">
                            <span class="profile-picture__number">
                                <i class="fa fa-heart"></i> 450
                            </span>
                        <span class="profile-picture__number">
                                <i class="fa fa-comment"></i> 39
                            </span>
                    </div>
                </a>
                <a href="image-detail.html" class="profile-picture">
                    <img src="images/feedPhoto.jpg" class="profile-picture__picture">
                    <div class="profile-picture__overlay">
                            <span class="profile-picture__number">
                                <i class="fa fa-heart"></i> 450
                            </span>
                        <span class="profile-picture__number">
                                <i class="fa fa-comment"></i> 39
                            </span>
                    </div>
                </a>
                <a href="image-detail.html" class="profile-picture">
                    <img src="/images/feedPhoto.jpg" class="profile-picture__picture">
                    <div class="profile-picture__overlay">
                            <span class="profile-picture__number">
                                <i class="fa fa-heart"></i> 450
                            </span>
                        <span class="profile-picture__number">
                                <i class="fa fa-comment"></i> 39
                            </span>
                    </div>
                </a>
                <a href="image-detail.html" class="profile-picture">
                    <img src="images/feedPhoto.jpg" class="profile-picture__picture">
                    <div class="profile-picture__overlay">
                            <span class="profile-picture__number">
                                <i class="fa fa-heart"></i> 450
                            </span>
                        <span class="profile-picture__number">
                                <i class="fa fa-comment"></i> 39
                            </span>
                    </div>
                </a>
            </div>
        </section>
    </main>
@endsection
