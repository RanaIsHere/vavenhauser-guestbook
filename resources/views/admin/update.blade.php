@extends('preload.default')

@section('container')
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 bg-dark">

            <h2 class="text-primary mt-3 mb-3"> Editing {{ $d }} </h2>

            <div class="container w-50 text-light">

{{--                Users--}}

                @if( request('d') == 'users')
                    <form action="/update" method="post">
                        @csrf

                        <input type="hidden" name="update" value="{{ request('update') }}">
                        <input type="hidden" name="d" value="{{ request('d') }}">

                        <div class="form-group mb-5">
                            <label for="name"> Name </label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ DB::table('users')->where('id', '=', request('update') )->value('name') }}">
                        </div>

                        <div class="form-group mb-5">
                            <label for="username"> Username </label>
                            <input type="text" name="username" id="username" class="form-control" value="{{ DB::table('users')->where('id', '=', request('update') )->value('username') }}">
                        </div>

                        <div class="form-group mb-5">
                            <label for="email" > Email Address </label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ DB::table('users')->where('id', '=', request('update') )->value('email') }}">
                        </div>

                        <div class="form-group mb-5">
                            <label for="password"> Password </label>
                            <input type="password" name="password" id="password" class="form-control" value="{{ DB::table('users')->where('id', '=', request('update') )->value('password') }}" disabled>
                        </div>

                        <div class="form-group mb-5">
                            <button type="submit" name="inputSubmit" value="submit" class="btn btn-outline-primary"> Submit </button>
                        </div>
                    </form>
                @endif

{{--                Guestbooks--}}

                @if( request('d') == 'guestbooks')
                    <form action="/update" method="post">
                        @csrf

                        <input type="hidden" name="update" value="{{ request('update') }}">
                        <input type="hidden" name="d" value="{{ request('d') }}">

                        <div class="form-group mb-5">
                            <label for="name"> Name </label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ DB::table('guestbooks')->where('id', '=', request('update') )->value('name') }}">
                        </div>

                        <div class="form-group mb-5">
                            <label for="email" > Email Address </label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ DB::table('guestbooks')->where('id', '=', request('update') )->value('email') }}">
                        </div>

                        <div class="form-group mb-5">
                            <label for="phone"> Phone Number </label>
                            <input type="text" name="phone" id="phone" class="form-control" value="{{ DB::table('guestbooks')->where('id', '=', request('update') )->value('phone') }}">
                        </div>

                        <div class="form-group mb-5">
                            <label for="message"> Message </label>
                            <input type="text" name="message" id="message" class="form-control" value="{{ DB::table('guestbooks')->where('id', '=', request('update') )->value('message') }}">
                        </div>

                        <div class="form-group mb-5">
                            <button type="submit" name="inputSubmit" value="submit" class="btn btn-outline-primary"> Submit </button>
                        </div>
                    </form>
                @endif

{{--                Medias--}}

                @if( request('d') == 'medias')
                    <form action="/update" method="post">
                        @csrf

                        <input type="hidden" name="update" value="{{ request('update') }}">
                        <input type="hidden" name="d" value="{{ request('d') }}">

                        <table class="table table-bordered table-light table-striped table-sm">
                            <tr>
                                <th>Category IDs</th>
                                <th>Category Name</th>
                            </tr>

                            @foreach(DB::table('categories')->get() as $keys)
                            <tr>
                                <td>{{ $keys->id }}</td>
                                <td>{{ $keys->media_category_name }}</td>
                            </tr>
                            @endforeach
                        </table>

                        <div class="form-group mb-5">
                            <label for="category_id" > Category ID </label>
                            <input type="number" name="category_id" id="category_id" class="form-control" value="{{ DB::table('medias')->where('id', '=', request('update') )->value('category_id') }}">
                        </div>

                        <div class="form-group mb-5">
                            <label for="media_title"> Title </label>
                            <input type="text" name="media_title" id="media_title" class="form-control" value="{{ DB::table('medias')->where('id', '=', request('update') )->value('media_title') }}">
                        </div>

                        <div class="form-group mb-5">
                            <button type="submit" name="inputSubmit" value="submit" class="btn btn-outline-primary"> Submit </button>
                        </div>
                    </form>
                @endif

            </div>
        </div>
    </div>
@endsection
