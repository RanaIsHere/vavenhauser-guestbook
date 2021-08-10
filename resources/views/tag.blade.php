@extends('preload.default')

@section('container')
    <h1 class="text-primary">Media</h1>

    <h5 style="color: rgb(204, 204, 204)"> Tags List </h5>

    <div class="container bg-dark text-light pt-5 pb-5">
        @foreach ($tag as $data)
            <div style="margin-bottom: 30px;">
                <ul>
                    <li> <h3><a href="/tags/{{ $data->media_category_linker }}"> {{ $data->media_category_name }} </a></h3></li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection
