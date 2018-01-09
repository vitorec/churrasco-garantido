<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>{{ config('app.name') }}</title>

        {{--<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">--}}
        <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

        <!-- Font Awesome -->
        {{--<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">--}}
        <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">

        <!-- Ionicons -->
        {{--<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">--}}
        <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">

        <!-- Theme style -->
        {{--<link rel="stylesheet" href="dist/AdminLTE.min.css">--}}
        <link rel="stylesheet" href="{{ asset('dist/AdminLTE.min.css') }}">

        <!-- AdminLTE Skins. Make sure you apply the skin class to the body tag so the changes take effect. -->
        {{--<link rel="stylesheet" href="dist/skins/skin-red.min.css">--}}
        <link rel="stylesheet" href="{{ asset('dist/skins/skin-red.min.css') }}">

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    </head>
    <body class="hold-transition login-page layout-boxed">

        <div class="login-box">

            <div class="login-logo">
                <a href="/">{{ config('app.name') }}</a>
            </div>

            <div class="login-box-body">

                <!-- Content Wrapper. Contains page content -->
                @yield('login-content')

            </div>

        <!-- Scripts -->
        @include('layouts.scripts')

    </body>
</html>
