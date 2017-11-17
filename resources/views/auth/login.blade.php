@extends('layouts.foodo')

@section('content')
    <div class="row">
        <div class="columns small-6 small-centered">
            <h1>Log In</h1>
            <fieldset>
            {!! Form::open(['url' => route('login'), 'method' => 'post']) !!}
            {!! Form::label('email','Email:') !!}
            {!! Form::text('email', old('email'),['placeholder'=>'example@email.com']) !!}
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password') !!}
            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
            {!! Form::submit('Log In') !!}
            {!! Form::close() !!}
            </fieldset>
            <a href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>
        </div>
    </div>
@endsection
