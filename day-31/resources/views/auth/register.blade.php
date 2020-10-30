@extends('layouts.main-admin', ['title' => 'Administration'])

@section('content')
    @foreach ($errors->all() as $error)
    <div class="error">{{ $error }}</div>
    @endforeach

    <form action="{{ route('register') }}" method="post">
        @csrf

        <form-group>
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" value="{{ old('name') }}">
        </form-group>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" value="">
        </div>
        <div class="form-group">
            <label for="password_confirmation">password_confirmation</label>
            <input class="form-control" type="password" name="password_confirmation" value="">
        </div>
        <button class="btn btn-success">Register</button>

    </form>
@endsection