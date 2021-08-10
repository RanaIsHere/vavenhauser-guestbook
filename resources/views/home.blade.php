@extends('preload.default')

@section('container')
    <h1>Media</h1>

    <div class="container bg-dark text-light pt-5 pb-5">
        @foreach ($md as $data)
            <div style="margin-bottom: 150px;">
                <h1> <a href="media/{{ $data['media_linker'] }}"> {{ $data['media_title'] }} </a> </h1>
                <h3> {{ $data['media_author'] }}</h3>
                <h5> {{ $data['media_message'] }}</h5>
                <img src="images/{{ $data['media_image'] }}" width="1024px" height="768px">
            </div>
        @endforeach
    </div>
@endsection
