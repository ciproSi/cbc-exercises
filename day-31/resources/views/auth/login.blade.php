@extends('layouts.main-unauth')

@section('content')
    
    @include('common.errors')
    
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password">
        </div>
        <button class="btn btn-success">Login</button>
    </form>

@endsection