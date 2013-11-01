@extends('layouts.master')

@section('content')
    <h1>Reset Your Password Now</h1>

    {{ Form::open() }}
        {{ Form::hidden('token', $token) }}

        <div>
            {{ Form::label('email', 'Email Address:') }}<br>
            {{ Form::text('email') }}
        </div>

        <div>
            {{ Form::label('password', 'Password:') }}<br>
            {{ Form::password('password') }}
        </div>

        <div>
            {{ Form::label('password_confirmation', 'Password Confirmation:') }}<br>
            {{ Form::password('password_confirmation') }}
        </div>

        <div>{{ Form::submit('Create New Password') }}</div>
    {{ Form::close() }}

    @if (Session::has('error'))
        <p>{{ Session::get('reason') }}</p>
    @endif

@stop
