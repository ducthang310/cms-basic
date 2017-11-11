<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="assets/images/favicon-32x32.png?v=2" sizes="32x32">

        <title>Frame - @yield('title')</title>

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="assets/vendor/materialize/css/materialize.min.css"  media="screen,projection"/>

        <link type="text/css" rel="stylesheet" href="assets/css/app.css" />

        @stack('header-scripts')
    </head>
    <body>
        <div class="wrapper">
            @include('shared.header')

            @yield('content')

        </div>



        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="assets/vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="assets/vendor/materialize/js/materialize.min.js"></script>
        <script type="text/javascript" src="assets/js/app.js"></script>

        @stack('footer-scripts')
    </body>
</html>