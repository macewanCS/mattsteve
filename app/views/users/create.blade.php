@extends('layouts.default')


@section('header')
	<h1>Create New User</h1>
@stop


@section('content')

	{{ Form::open(['route' => 'users.store']) }}
	   <div>
	   {{ Form::label('Name', 'Username: ') }}
	   {{ Form::text('Name') }}
	   {{ $errors->first('Name') }}
	   </div>

	   <div>
	   {{ Form::label('Password', 'Password: ') }}
	   {{ Form::password('Password') }}
	   {{ $errors->first('Password') }}
	   </div>

	   <div> {{ Form::submit('Create User') }} </div>

	{{ Form::close() }}

@stop
