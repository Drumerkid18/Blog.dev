@extends('layouts.master')

@section('content')

<h1 class="page-header"> Please Log in</h1>

{{ Form::open(array('action' => 'HomeController@doLogin')) }}

	<div class="form-group">
		{{ Form::label('email', 'eMail address') }}
		{{ Form:: email('email', Input::old('email'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('password', 'Password') }}
		{{ Form:: password('password', array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::submit('Log In!', array('class' => 'btn btn-primary')) }}
	</div>

{{ Form::close() }}

@stop