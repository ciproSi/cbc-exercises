@extends('layouts.main-admin', ['title' => 'Create new category'])

@section('content')
    @include('common.errors')
    <form action="/categories" method="POST">
        {{-- csrf = cross-site forgery attack  --}}
        @csrf
        <div class="form-group">
            <label for="name">Name of the category</label>
            <input type="text" name="name" class="form-control">
        </div>
        <button class="btn btn-success">Create the category</button>
    </form>
@endsection