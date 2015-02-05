@extends('layouts.master')

@section ('content')

@foreach ($posts as $post)

    <h1>{{{ $post->title }}} 
    @if (Auth::check()) 
		<a class="btn btn-info" href="{{{ action('PostsController@edit', $post->id) }}}">Edit Post</a>
		<button class="btn btn-danger btn-md dlt-btn-post", data-form-action="{{{ action('PostsController@destroy', $post->id) }}}">Delete</button>
    @endif
 	</h1>
    <h3>{{{ $post->body }}}</h3>
    <p>{{{ $post->user->email }}}</p> 
    <p>Posted {{{ $post->created_at->diffForHumans() }}}</p>
    @unless(empty($post->photo))
	    <img src="{{{ $post->photo }}}" alt="{{{ $post->title }}}">
    @endunless
    @if ($post->created_at != $post->updated_at)
	    <p>Upated {{{ $post->updated_at->diffForHumans() }}}</p>
	@endif

@endforeach

{{ Form::open(array('method' => 'DELETE', 'id' => 'delete-post-form')) }}
{{ Form::close() }}

{{ $posts->links() }}

@stop