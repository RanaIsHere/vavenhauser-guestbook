@extends('preload.default')

@section('container')
    <div class="row">
        <div class="col-md-12">
            <div class="container bg-light pb-5 mb-5">
{{--                TODO implement self messages--}}
                <div class="d-flex justify-content-start">
                    <div class="container mt-5 mb-5 rounded-3 bg-dark text-light" style="text-align: left" id="message-self">
                        <div class="bg-dark text-light w-25 mt-2">
                            <p>Username <small style="color: lightgrey;"> posted this since 2 mins ago </small> </p>
                        </div>

                        <h5> hello world </h5>

                        <div class="bg-dark text-light text-end mb-2">
                            Closed
                            {{--                            TODO depends on the status--}}
                        </div>
                    </div>
                </div>

{{--                TODO implement others messages--}}
                <div class="d-flex justify-content-end">
                    <div class="container mt-5 mb-5 rounded-3 bg-primary text-light" style="text-align: left" id="message-self">
                        <div class="bg-primary text-light w-25 mt-2">
                            <p>Username <small style="color: lightgrey;"> posted this since 2 mins ago </small> </p>
                        </div>
                        <h5> hello world </h5>

                        <div class="bg-primary text-light text-end mb-2">
                            Read
{{--                            TODO depends on the status--}}
                        </div>
                    </div>
                </div>

                <form action="" method="post">
                    <div class="container d-flex fw-bold">
                        <label for="messageBox""> Messaging: </label>
                    </div>
                    <div class="input-group">
                        <input class="form-control outline-dark" type="text" name="messageBox" id="messageBox">
                        <button class="btn btn-primary ms-2" type="submit" name="inputSender" value="sent"> Send </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
