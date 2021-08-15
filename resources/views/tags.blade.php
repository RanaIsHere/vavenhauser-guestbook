@extends('preload.default')

@section('container')
    <h1 class="text-primary">Media</h1>

    <h5 style="color: rgb(204, 204, 204)"> Tags searched by {{ $category }}</h5>

    <div class="container bg-dark text-light pt-5 pb-5">
        @foreach ($medias as $data)
            <div style="margin-bottom: 150px;">
                <h1> <a class="text-decoration-none" href="../media/{{ $data->media_linker }}"> {{ $data->media_title }} </a> </h1>
                <p> Made by <a href="/users/{{ $data->user->username }}" class="text-muted text-decoration-none"> {{ $data->user->name }} </a> </p>
                <p> Category: <a class="text-decoration-none" href="/tags/{{ $data->category->media_category_linker }}"> {{ $data->category->media_category_name }} </a> </p>
                
                <h5> {{ $data->media_preview }}</h5>
                <img src="../images/{{ $data->media_image }}" width="1024px" height="768px">
            </div>
        @endforeach
    </div>
@endsection
