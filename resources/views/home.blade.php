@extends('preload.default')

@section('container')
    <h1 class="text-primary">Media</h1>

    {{-- <div class="container bg-dark text-light d-flex justify-content-center">
        <form action="" method="post">
            <h2> {{ $title }} </h2>

            <div class="form-group">
                <label for="media_title" class="form-label"> Title </label>
                <input type="text" name="media_title" id="media_title" class="form-control">
            </div>
                <label for="media_preview" class="form-label"> Summary </label>
                <input type="text" name="media_preview" id="media_preview" class="form-control">
            <div class="form-group">
                <label for="media_message" class="form-label"> Message </label>
                <textarea cols="50" rows="10" name="media_message" id="media_message" class="form-control"></textarea>
                <div>
                    <p> HTML Markdown are allowed!</p>
                </div>
            </div>
            <button type="submit" name="inputSubmit" value="submit" class="btn btn-outline-primary mt-3"> Submit </button>
        </form>
    </div> --}}

    <div class="container bg-dark text-light pt-5 pb-5">
        <h2>Search</h2>
        <div class="container d-flex justify-content-center">
            <form action="/media/" method="get" class="d-flex w-50 pb-5 mb-5">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if (request('user'))
                    <input type="hidden" name="user" value="{{ request('user') }}">
                @endif

                <div class="input-group">
                    <input type="search" placeholder="Search" name="search" id="searchBox" value="{{ request('search') }}" class="form-control bg-dark text-light">
                    <button type="submit" name="inputSearch" value="searched" class="btn btn-outline-primary"> Search </button>
                    <a href="/media/" role="button" class="btn btn-outline-primary"> Clear </a>
                </div>
            </form>
        </div>

        <div class="container d-flex justify-content-center">
            {{ $md->links() }}
        </div>

        @if ($md->count())
            @foreach ($md as $data)
                <div style="margin-bottom: 150px;">
                    <h1> <a class="text-decoration-none" href="../media/{{ $data->media_linker }}"> {{ $data->media_title }} </a> </h1>
                    <p> Made by <a href="/media?user={{ $data->user->username }}" class="text-muted text-decoration-none"> {{ $data->user->name }} </a> since {{ $data->created_at->diffForHumans() }} </p>
                    <p> Category: <a class="text-decoration-none" href="/media?category={{ $data->category->media_category_linker }}"> {{ $data->category->media_category_name }} </a> </p>
                    <h5> {{ $data->media_preview }}</h5>
                    {{-- <img src="../images/{{ $data->media_image }}" width="1024px" height="768px"> --}}
                    <img class="img-fluid" src="https://source.unsplash.com/1024x768/?{{ $data->category->media_category_name }}">
                </div>
            @endforeach
        @else
            <p>No media has been found.</p>
        @endif

        <div class="container d-flex justify-content-center">
            {{ $md->links() }}
        </div>
    </div>
@endsection
