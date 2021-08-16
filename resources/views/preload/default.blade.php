<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

{{--        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">--}}
{{--        <!-- Font Awesome -->--}}
{{--        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">--}}
{{--        <!-- Ionicons -->--}}
{{--        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">--}}
{{--        <!-- Theme style -->--}}
{{--        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">--}}
{{--        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter--}}
{{--              page. However, you can choose any other skin. Make sure you--}}
{{--              apply the skin class to the body tag so the changes take effect. -->--}}
{{--        <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">--}}

{{--        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->--}}
{{--        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->--}}
{{--        <!--[if lt IE 9]>--}}
{{--        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>--}}
{{--        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
{{--        <![endif]-->--}}

{{--        <!-- Google Font -->--}}
{{--        <link rel="stylesheet"--}}
{{--              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">--}}

        <link rel="stylesheet" href="{{ URL('css/global_styling.css') }}">
        <title> Vavenhauser {{ $title }} </title>

        <style>
            @yield('styling')

            @media (max-width: 768px) {
                .navbar-brand {
                    font-size: 0.8rem;
                }

                * {
                    font-size: 0.9rem;
                }
            }
        </style>
    </head>
    <body style="background-color: black">

        @include('partials.header')

        @yield('body-content')

        <div class="container">
            @yield('container')
        </div>

        <div class="container-fluid">
            @yield('container-fluid')
        </div>

        <footer>
            <div class="container-fluid bg-primary" style="padding-bottom: 59px">
                <div class="row">
                    <div class="footer mt-auto py-3">
                        <p class="text-light copyright">Copyright ©  Rana Rosihan 2021-2022</p>
                    </div>
                </div>
            </div>
        </footer>


        <!-- jQuery 3 -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>
