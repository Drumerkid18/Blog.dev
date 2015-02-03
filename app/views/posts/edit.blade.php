@extends ('layouts.master')

@section ('content')
	<div class="container">
	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'put')) }}
	<h3>Enter Items</h3>

	@include('posts.form')

	{{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}  <a class="btn btn-info" href="/posts">Back</a>
	{{ Form::close() }}

	</div>
@stop