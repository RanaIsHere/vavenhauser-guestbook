@extends('preload.default')

@section('container')
    <div class="bg-dark text-light text-center">
        <div class="pt-5 mb-5 pb-5">
            <h1> {{ $md->media_title }} </h1>
            <p> Made by <a href="/media?user={{ $md->user->username }}" class="text-muted text-decoration-none"> {{ $md->user->name }} </a> </p>
            <p> Category: <a class="text-decoration-none" href="/media?category={{ $md->category->media_category_linker }}"> {{ $md->category->media_category_name }} </a> </p>

            <div class="container" style="width: 80%">
                 {!! $md->media_message !!}
            </div>

            <div class="d-flex justify-content-center">
                {{-- <img src="../images/{{ $md->media_image }}" width="1024px" height="768px"> --}}
                <img class="img-fluid" src="https://source.unsplash.com/1024x768/?{{ $md->category->media_category_name }}">
            </div>
        </div>

        <a href="/media" role="button" class="btn btn-outline-light mb-5"align: center"> Back to Home </a>
    </div>
@endsection
