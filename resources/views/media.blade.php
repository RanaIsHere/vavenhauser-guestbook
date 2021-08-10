@extends('preload.default')

@section('container')
    <div class="bg-dark text-light text-center">
        <div class="pt-5 mb-5 pb-5">
            <h1> {{ $md['media_title'] }} </h1>
            <h3> {{ $md['media_author'] }}</h3>
            <h5> {{  $md['media_message'] }}</h5>
            <div class="d-flex justify-content-center">
                <img src="../images/{{ $md['media_image'] }}" width="1024px" height="768px">
            </div>
        </div>

        <a href="/media" role="button" class="btn btn-outline-light mb-5"align: center"> Back to Home </a>
    </div>
@endsection