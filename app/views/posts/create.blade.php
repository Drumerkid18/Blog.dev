@extends ('layouts.master')

@section ('content')
	<div class="container">
	{{ Form::open(array('action' => 'PostsController@store')) }}
	<h3>Enter Items</h3>

	@include('posts.form')
	
	{{ Form::submit('Submit Post', array('class' => 'btn btn-primary')) }}  <a class="btn btn-info" href="{{{ action('PostsController@index') }}}">Back</a>
	{{ Form::close() }}
	</div>
@stop