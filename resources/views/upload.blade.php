@extends('layouts.app')
@section('file')
    {{--<link href="{{ asset('css/upload.css') }}" rel="stylesheet">--}}
@endsection
@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="upload-container">
                <div class="border-container">
                    <div class="icons fa-4x">
                        <i class="fas fa-file-image" data-fa-transform="shrink-3 down-2 left-6 rotate--45"></i>
                        <i class="fas fa-file-alt" data-fa-transform="shrink-2 up-4"></i>
                        <i class="fas fa-file-pdf" data-fa-transform="shrink-3 down-2 right-6 rotate-45"></i>
                    </div>
                    <form enctype="multipart/form-data" method="post"
                          action="{{route('upload.store' ,$user->username)}}">
                        @csrf
                        <div class="mb-4">

                            <div class="form-outline">
                                <input placeholder="Caption" type="text" id="form1" name="caption" class="form-control"
                                       required/>
                            </div>
                            <p>
                                <input name="image_to_upload" id="upload" type="file"/>
                                <button class="btn-primary" type="submit"> Upload</button>
                            </p>

                        </div>
                    </form>
                    @error('image_to_upload')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                    @error('caption')
                    <hr>
                    <span class=" text-danger">{{$message}}</span>
                    @enderror

                </div>
            </div>
        </div>
    </div>
@endsection
