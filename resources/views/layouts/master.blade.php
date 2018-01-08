<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>{{ config('name') }}</title>

        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">

        <!-- Ionicons -->
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">

        <!-- Theme style -->
        <link rel="stylesheet" href="dist/AdminLTE.min.css">

        <!-- AdminLTE Skins. Make sure you apply the skin class to the body tag so the changes take effect. -->
        <link rel="stylesheet" href="dist/skins/skin-red.min.css">

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    </head>
    <body class="hold-transition skin-red sidebar-mini layout-boxed">
        <!-- Site wrapper -->
        <div class="wrapper">

            <!-- Main Header -->
            @include('layouts.header')

            <!-- Content Wrapper. Contains page content -->
            @yield('content')

            <!-- Main Footer -->
            @include('layouts.footer')

        </div>

        <!-- Scripts -->
        @include('layouts.scripts')

    </body>
</html>
