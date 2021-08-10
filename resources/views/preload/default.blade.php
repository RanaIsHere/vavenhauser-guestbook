<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL('css/global_styling.css') }}">
        <title> Vavenhauser {{ $title }} </title>
    </head>
    <body style="background-color: black">

        @include('partials.header')

        <div class="container">
            @yield('container')
        </div>
        
        <footer>
            <div class="container-fluid bg-primary" style="padding-bottom: 59px">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto">
                        <p class="text-light copyright">Copyright © Brand 2021</p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>