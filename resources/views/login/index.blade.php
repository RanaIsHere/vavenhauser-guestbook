@extends('preload.default')

@section('container')
    @if (session()->has('success'))
        <div class="alert alert-success mt-5" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="container w-50 mt-5 text-light" style="margin-bottom: 15vw">
        <form action="/login" method="post">
            @csrf

            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating mb-5 text-dark">
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="inputName" placeholder="My name is...">
                <label for="inputName">Username</label>

                @error('username')
                    <div class="invalid-feedback">
                        Please provide the correct username
                    </div>
                @enderror
            </div>

            <div class="form-floating mb-5 text-dark">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>

                @error('password')
                    <div class="invalid-feedback">
                        Please provide the correct password
                    </div>
                @enderror
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>

            <button class="w-30 mt-2 btn btn-lg btn-primary" name="inputLogin" value="inputLogin" type="submit">Sign in</button>
        </form>
        <div class="container mt-3">
            <small> Not registered yet? <a class="text-decoration-none" href="/register"> Go here. </a> </small>
        </div>
    </div>
@endsection