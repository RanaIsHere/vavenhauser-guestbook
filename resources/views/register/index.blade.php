@extends('preload.default')

@section('container')
    <div class="container w-50 mt-5 text-light" style="margin-bottom: 15vw">
        <form action="/register" method="post">
            @csrf

            <h1 class="h3 mb-3 fw-normal">Please register</h1>

            <div class="form-floating mb-5 text-dark">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="inputFullName" placeholder="My name is..." value="{{ old('name') }}">
                <label for="inputFullName">Full Name</label>

                @error('name')
                    <div class="invalid-feedback">
                        Please provide your full name
                    </div>
                @enderror
            </div>

            <div class="form-floating mb-5 text-dark">
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="inputName" placeholder="My name is..." value="{{ old('username') }}">
                <label for="inputName">Username</label>

                @error('username')
                    <div class="invalid-feedback">
                        Please provide your username
                    </div>
                @enderror
            </div>

            <div class="form-floating mb-5 text-dark">
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="inputEmail" placeholder="My name is..." value="{{ old('email') }}">
                <label for="inputEmail">Email Address</label>

                @error('email')
                    <div class="invalid-feedback">
                        Please provide your email address
                    </div>
                @enderror
            </div>

            <div class="form-floating mb-5 text-dark">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>

                @error('password')
                    <div class="invalid-feedback">
                        Please provide your password, must be at least 3 characters.
                    </div>
                @enderror
            </div>

            <button class="w-30 mt-2 btn btn-lg btn-primary" name="inputLogin" value="inputLogin" type="submit">Register</button>
        </form>
        <div class="container mt-3">
            <small> Have an account? <a class="text-decoration-none" href="/login"> Go here. </a> </small>
        </div>
    </div>
@endsection