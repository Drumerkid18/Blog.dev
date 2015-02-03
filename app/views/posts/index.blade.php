@extends('layouts.master')

@section ('content')

@foreach ($posts as $post)

    <h1>{{{ $post->title }}} <a class="btn btn-info" href="posts/{{{$post->id}}}/edit">Edit Post</a></h1>
    <h3>{{{ $post->body }}}</h3>

@endforeach

{{ $posts->links() }}
@stop