@extends('templates.main')

@section('content')

<h2>Login</h2>
<div class="row">
    <div class="col-md-6">
        Login
    </div>
    <div class="col-md-6">
        {{ Form::open(array('url' => 'login')) }}
        <div class="form-group">
            {{ Form::label('username', 'Username') }}
            {{ Form::text('username', '', array('class'=>'form-control'))}}
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', array('class' => 'form-control'))}}
        </div>
        @if ($error = $errors->first("password"))
        <div class="alert alert-danger">
            {{ $error }}
        </div>
        @endif
        {{ Form::submit('Login', array('class' => 'btn btn-default'))}}
        {{ Form::close() }}
    </div>
</div>

@stop

@section('sidebar')

@stop
