@extends('layouts.master')

@section ('content')

    <h1>{{{ $post->title }}}</h1>
    <h3>{{{ $post->body }}}</h3>
    

@stop