@extends('layouts.main-admin', ['title' => 'Eshop admin'])

@section('content')

@if (session()->get('success'))
    <div class="{{ session()->get('class') }} alert alert-success">{{ session()->get('success') }}</div>
@endif

<table class="table table-striped mt-4">
    <thead class="thead-dark">
        <tr>
            <th>#ID</th>
            <th>Category name</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td><a href="{{ action('CategoryController@show', ['id' => $category->id]) }}">{{ $category->name }}</a></td>
            <td><a href="{{ action('CategoryController@edit', ['id' => $category->id]) }}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ action('CategoryController@destroy', ['id' => $category->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
    
@endsection