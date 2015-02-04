@extends('layouts.master')

@section ('content')

    <h1>{{{ $post->title }}}</h1>
    <h5>{{{ $post->user->email }}}</h5>
    <h3>{{{ $post->body }}}</h3>
	
	@if(Auth::check())
		{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete')) }}
			{{ Form::submit('Delete Post', array('class' => 'btn btn-danger')) }}
		{{ Form::close() }}
	@endif    

@stop