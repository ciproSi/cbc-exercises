@extends('layouts.main', ['title' => 'Do you hate this page? We do!']);

@section('content')
<h1 class="error">You have just reached the end of known universe :-(</h1>
<p class="bigga">What about <a href="{{ action('BookController@index') }}">checking our bookshelf</a></p>
@endsection