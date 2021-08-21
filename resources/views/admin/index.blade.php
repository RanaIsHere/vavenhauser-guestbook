@extends('preload.default')

@section('container-fluid')
    <div class="row">
        <div class="col-md-3 bg-primary">
            <div class="container">
                <div class="row"> <img class="img-fluid" src="images/img_2.jpg"> </div>

                <div class="row mt-5">
                    <a href="/admin?d=dashboard" role="button" class="btn btn-success"> Dashboard </a>
                </div>

                <div class="row mt-5">
                    <a href="/admin?d=users" role="button" class="btn btn-success"> Users </a>
                </div>

                <div class="row mt-5">
                    <a href="/admin?d=medias" role="button" class="btn btn-success"> Medias </a>
                </div>

                <div class="row mt-5 mb-5">
                    <a href="/admin?d=guestbooks" role="button" class="btn btn-success"> Guestbooks </a>
                </div>
            </div>
        </div>

        <div class="col-md-9 bg-light text-dark">
            @if(request('d') == 'dashboard')
                <div class="container">
                    <h1>Dashboard</h1>
                </div>
            @endif

            @if(request('d') == 'users')
                <div class="container">
                    <h1>Users</h1>

                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>

                            @foreach($gb_users as $data)
                                <tr>
                                    <td> {{ $data->id }} </td>
                                    <td> {{ $data->name }} </td>
                                    <td> {{ $data->username }} </td>
                                    <td> {{ $data->email }} </td>
                                    <td> {{ $data->password }} </td>
                                    <td> {{ $data->created_at }} </td>
                                    <td>
                                        <form action="/delete" method="post">
                                            @csrf

                                            <input type="hidden" name="delete" value="{{$data->id}}">
                                            <input type="hidden" name="d" value="{{ request('d') }}">

                                            <button type="submit" class="btn btn-danger mb-2 w-100"> Delete </button>
                                        </form>

                                        <form action="/update" method="get">
                                            @csrf

                                            <input type="hidden" name="update" value="{{$data->id}}">
                                            <input type="hidden" name="d" value="{{ request('d') }}">

                                            <button type="submit" class="btn btn-primary w-100"> Update </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            @endif

            @if(request('d') == 'medias')
                <div class="container">
                    <h1>Medias</h1>

                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <tr>
                                <th>Id</th>
                                <th>C-Id</th>
                                <th>U-Id</th>
                                <th>Title</th>
                                <th>Updated At</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>

                            @foreach($gb_medias as $data)
                                <tr>
                                    <td> {{ $data->id }} </td>
                                    <td> {{ $data->category_id }} </td>
                                    <td> {{ $data->user_id }} </td>
                                    <td> {{ $data->media_title }} </td>
                                    <td> {{ $data->updated_at }} </td>
                                    <td> {{ $data->created_at }} </td>
                                    <td>
                                        <form action="/delete" method="post">
                                            @csrf

                                            <input type="hidden" name="delete" value="{{$data->id}}">
                                            <input type="hidden" name="d" value="{{ request('d') }}">

                                            <button type="submit" class="btn btn-danger mb-2 w-100"> Delete </button>
                                        </form>

                                        <form action="/update" method="get">
                                            @csrf

                                            <input type="hidden" name="update" value="{{$data->id}}">
                                            <input type="hidden" name="d" value="{{ request('d') }}">

                                            <button type="submit" class="btn btn-primary w-100"> Update </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            @endif

            @if(request('d') == 'guestbooks')
                <div class="container">
                    <h1>Guestbooks</h1>

                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>

                            @foreach($gb_guestbooks as $data)
                                <tr>
                                    <td> {{ $data->id }} </td>
                                    <td> {{ $data->name }} </td>
                                    <td> {{ $data->email }} </td>
                                    <td> {{ $data->phone }} </td>
                                    <td> {{ $data->message }} </td>
                                    <td> {{ $data->created_at }} </td>
                                    <td>
                                        <form action="/delete" method="post">
                                            @csrf

                                            <input type="hidden" name="delete" value="{{$data->id}}">
                                            <input type="hidden" name="d" value="{{ request('d') }}">

                                            <button type="submit" class="btn btn-danger mb-2 w-100"> Delete </button>
                                        </form>

                                        <form action="/update" method="get">
                                            @csrf

                                            <input type="hidden" name="update" value="{{$data->id}}">
                                            <input type="hidden" name="d" value="{{ request('d') }}">

                                            <button type="submit" class="btn btn-primary w-100"> Update </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
