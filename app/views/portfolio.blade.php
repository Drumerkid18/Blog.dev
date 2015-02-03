@extends ('layouts.master')

@section('content')
    <h1>Hello, This is my portfolio site!</h1>
@stop

@section('data')
    <p>This is a paragraph!</p>
    <a href="{{ action('HomeController@resume') }}">Here is my Resume</a>
@stop