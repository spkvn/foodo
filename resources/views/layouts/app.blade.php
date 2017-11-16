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
    <div class="app">
        @include('layouts.nav')
        @yield('content')
    </div>
</body>
</html>
