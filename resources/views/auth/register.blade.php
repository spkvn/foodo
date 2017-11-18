@extends('layouts.foodo')

@section('content')
    <div class="row">
        <div class="columns small-6 small-centered">
            <h1>Register</h1>
            {!! Form::open(['url' => route('register'), 'method' => 'post']) !!}

            {!! Form::label('username', 'Username:') !!}
            {!! Form::text('username', old('name'), ['placeholder' => 'Enter a username']) !!}
            {!! $errors->first('username', '<span class="form-error is-visible">:message</span>') !!}

            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', old('email'), ['placeholder'=>'Enter your email address']) !!}
            {!! $errors->first('email', '<span class="form-error is-visible">:message</span>') !!}

            {!! Form::label('password','Password:') !!}
            {!! Form::password('password', ['placeholder'=>'Password']) !!}
            {!! $errors->first('password', '<span class="form-error is-visible">:message</span>') !!}

            {!! Form::label('password_confirmation','Confirm Password:') !!}
            {!! Form::password('password_confirmation', ['placeholder'=>'Re-enter Password']) !!}
            {!! $errors->first('password_confirmation', '<span class="form-error is-visible">:message</span>') !!}

            {!! Form::submit('Register') !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
