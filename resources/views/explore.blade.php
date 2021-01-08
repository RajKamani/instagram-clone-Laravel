@extends('layouts.app')

@section('content')

    <main class="explore">
        <section class="people">
            <ul class="people__list">
                <li class="people__person">
                    <div class="people__column">
                        <div class="people__avatar-container">
                            <img src="images/avatar.jpg" class="people__avatar">
                        </div>
                        <div class="people__info">
                            <span class="people__username">davidbeckham</span>
                            <span class="people__full-name">David Beckham</span>
                        </div>
                    </div>
                    <div class="people__column">
                        <a href="#">Follow</a>
                    </div>
                </li>
                <li class="people__person">
                    <div class="people__column">
                        <div class="people__avatar-container">
                            <img src="images/avatar.jpg" class="people__avatar">
                        </div>
                        <div class="people__info">
                                <span class="people__username">davidbeckham
                                    <img src="images/verified.png">
                                </span>
                            <span class="people__full-name">David Beckham</span>
                        </div>
                    </div>
                    <div class="people__column">
                        <a href="#">Follow</a>
                    </div>
                </li>
                <li class="people__person">
                    <div class="people__column">
                        <div class="people__avatar-container">
                            <img src="images/avatar.jpg" class="people__avatar">
                        </div>
                        <div class="people__info">
                            <span class="people__username">davidbeckham</span>
                            <span class="people__full-name">David Beckham</span>
                        </div>
                    </div>
                    <div class="people__column">
                        <a href="#">Follow</a>
                    </div>
                </li>
                <li class="people__person">
                    <div class="people__column">
                        <div class="people__avatar-container">
                            <img src="images/avatar.jpg" class="people__avatar">
                        </div>
                        <div class="people__info">
                            <span class="people__username">davidbeckham</span>
                            <span class="people__full-name">David Beckham</span>
                        </div>
                    </div>
                    <div class="people__column">
                        <a href="#">Follow</a>
                    </div>
                </li>
            </ul>
        </section>
    </main>
@endsection