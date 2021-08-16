@extends('preload.default')

@section('container')
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 bg-dark">

            <h2 class="text-primary"> Guestbook </h2>

            @if (session()->has('sent'))
                <div class="alert alert-success mt-5" role="alert">
                    {{ session('sent') }}
                </div>
            @endif

            <div class="container w-50 text-light">
                <form action="/guestbook" method="post">
                    @csrf

                    <div class="form-group mb-5">
                        <label for="full_name"> Full Name </label>
                        <input type="text" name="name" id="full_name" class="form-control">
                    </div>

                    <div class="form-group mb-5">
                        <label for="email_address"> Email Address </label>
                        <input type="email" name="email" id="email_address" class="form-control">
                    </div>

                    <div class="form-group mb-5">
                        <label for="phone_number" > Phone Number </label>
                        <input type="text" name="phone" id="phone_number" class="form-control">
                    </div>

                    <div class="form-group mb-5">
                        <label for="guest_message"> Message </label>
                        <input type="text" name="message" id="guest_message" class="form-control">
                    </div>

                    <div class="form-group mb-5">
                        <button type="submit" name="inputSubmit" value="submit" class="btn btn-outline-primary"> Submit </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
