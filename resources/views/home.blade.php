@extends('preload.default')

@section('container')
    <h1>Media</h1>

    <div class="container bg-dark text-light d-flex justify-content-center">
        <form action="" method="post">
            <h4> Post Media </h4>

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
            <button type="submit" name="inputSubmit" value="submit" class="btn btn-outline-light mt-3"> Submit </button>
        </form>
    </div>

    <div class="container bg-dark text-light pt-5 pb-5">
        @foreach ($md as $data)
            <div style="margin-bottom: 150px;">
                <h1> <a href="media/{{ $data->media_linker }}"> {{ $data->media_title }} </a> </h1>
                <p> Category: {{ $data->category->media_category_name }} </p>
                <h5> {{ $data->media_preview }}</h5>
                <img src="images/{{ $data->media_image }}" width="1024px" height="768px">
            </div>
        @endforeach
    </div>
@endsection
