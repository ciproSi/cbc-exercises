@extends('layouts.main-admin', ['title' => 'Editing' . $category->name])

@section('content')

    @include('common.errors')

    <form action="{{ action('CategoryController@update', ['id' => $category->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Category name</label>
            <input type="text" name="name" class="form-control" value="{{ $category->name }}">
            <button class="btn btn-success">Save changes</button>
        </div>

    </form>
    
@endsection