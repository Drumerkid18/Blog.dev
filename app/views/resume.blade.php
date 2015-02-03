@extends ('layouts.master')

@section('content')
    <h1>Hello, This is my resume site!</h1>
@stop

@section('data')
    <p>This is a paragraph!</p>
    <a href="{{ action('HomeController@portfolio') }}">Back to Portfolio</a>
@stop