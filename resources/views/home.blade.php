@extends('layouts.app')

@section('content')
    <main class="feed">
        @forelse($posts as $post)
            <section class="photo">
                <header class="photo__header">
                    <div class="photo__header-column">
                        <img
                            class="photo__avatar"
                            src="{{$post->user->profile->avatar}}"
                        />
                    </div>
                    <div class="photo__header-column">
                        <a href="{{route('profile.show',$post->user->username)}}" class="text-decoration-none" style="color: black"><span class="photo__username">{{$post->user->username}}</span></a>
                    </div>
                </header>
                <div class="photo__file-container">
                    <img
                        class="photo__file"
                        src="{{$post->image_path}}"
                    />
                </div>
                <div class="photo__info">
                    <div class="photo__icons">
                        <span class="photo__icon">
                            <i class="fa fa-heart-o heart fa-lg"></i>
                        </span>
                        <span class="photo__icon">
                            <i class="fa fa-comment-o fa-lg"></i>
                        </span>
                    </div>
                    <span class="photo__likes">35 likes</span>
                    <ul class="photo__comments">
                        <li class="photo__comment">
                            <span class="photo__comment-author">{{$post->user->username}}</span>{{$post->caption}}
                        </li>

                    </ul>
                    <span class="photo__time-ago">{{$post->created_at->diffForHumans()}}</span>
                    <div class="photo__add-comment-container">
                        <textarea placeholder="Add a comment..." class="photo__add-comment"></textarea>
                        <i class="fa fa-ellipsis-h"></i>
                    </div>
                </div>
            </section>
        @empty
            <p class="text-info font-weight-bold" >No Post yet !</p>
        @endforelse
    </main>
@endsection
