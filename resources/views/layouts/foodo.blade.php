<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Foodo') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/vendor-start.js') }}"></script>
    <script>
        $(document).ready(function(){
            $(document).foundation();
        });
    </script>

    <!-- Styles -->
    <link href="{{ asset('css/foodo.css') }}" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        @include('layouts.nav')
    </div>
    <div class="page-content-left-buffer">

    </div>
    <div class="top__bar">
        <h1>FOODO</h1>
    </div>
    <div class="page-content-top-buffer">
    </div>
    <div class="page-content">
        <div class="background__div">
            @yield('content')
        </div>
    </div>
</body>
</html>