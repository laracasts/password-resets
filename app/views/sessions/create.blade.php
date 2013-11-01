@extends('layouts.master')

@section('content')
    <h1>Login</h1>
    {{ Form::open(['route' => 'sessions.store']) }}
        <div>
            {{ Form::label('username', 'Username:') }}
            {{ Form::text('username') }}
        </div>

        <div>
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password') }}
        </div>

        <div>
            {{ Form::submit('Login') }}
            {{ link_to_route('password_resets.create', 'Forgot your password?') }}
        </div>
    {{ Form::close() }}
@stop
