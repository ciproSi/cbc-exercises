@extends('layouts.main-admin')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Hello, my lord!</h1>
        <p class="lead">We have {{ count($books) }} books in the database. You can add more, edit them, view them or eventually delete them.</p>
        <hr class="my-4">
        <p>This is just to simulate an admin dashboard.</p>
    </div>
@endsection

