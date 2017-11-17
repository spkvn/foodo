@extends('layouts.foodo')

@section('content')
    <div class="row">
        <div class="columns small-6 small-centered">
            <h1>Register</h1>
            {!! Form::open(['url' => route('register'), 'method' => 'post']) !!}
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', old('name'), ['placeholder' => 'Enter your name']) !!}
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', old('email'), ['placeholder'=>'Enter your email address']) !!}
            {!! Form::label('password','Password:') !!}
            {!! Form::password('password', ['placeholder'=>'Password']) !!}
            {!! Form::label('password-confirm','Confirm Password:') !!}
            {!! Form::password('password-confirm', ['placeholder'=>'Re-enter Password']) !!}
            {!! Form::submit('Register') !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
