@extends('layouts.foodo')
@section('content')
    <div class="row">
        <div class="columns small-6 small-centered">
            <H1>Home Page</H1>
            <p><a href="{{route('login')}}">Login</a></p>
            <p><a href="{{route('register')}}">Register</a></p>
        </div>
    </div>
@endsection