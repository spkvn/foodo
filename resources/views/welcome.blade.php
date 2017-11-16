@extends('layouts.app')
@section('content')
    <h1>Home Page</h1>
    <p><a href="{{route('login')}}">Login</a></p>
    <p><a href="{{route('register')}}">Register</a></p>
@endsection