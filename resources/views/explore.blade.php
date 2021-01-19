@extends('layouts.app')

@section('content')

    <main class="explore">
        <section class="people">
            <ul class="people__list">

                @forelse($explore_user as $user)
                    <li class="people__person">
                        <div class="people__column">
                            <div class="people__avatar-container">
                                <a style="background-color: white;padding: unset"
                                   href="{{route('profile.show',$user->username)}}"> <img
                                        src="{{$user->profile->avatar}}" class="people__avatar">
                                </a>
                            </div>
                            <div class="people__info">
                             <span
                                 class="people__username">{{$user->username}}</span>

                                <span class="people__full-name">{{$user->name}}</span>
                            </div>
                        </div>
                        <div class="people__column">
                            <form method="post" action="{{route('follow',$user->username)}}">
                                @csrf
                                <button type="submit"
                                        class="btn btn-primary rounded-pill">{{ auth()->user()->is_following($user)? 'Unfollow': 'Follow'  }}</button>
                            </form>
                        </div>
                    </li>
                @empty
                    <p class="text-danger p-3">No User to Follow! wait for other to join instagram.</p>
                @endforelse
            </ul>

        </section>
        <div class="d-flex justify-content-center mt-2">{{ $explore_user->links("pagination::bootstrap-4") }}</div>
    </main>

@endsection


