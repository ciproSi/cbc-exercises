@extends('layouts.main-admin', ['title' => 'Eshop admin'])

@section('content')

@if (session()->get('success'))
    <div class="{{ session()->get('class') }} alert alert-success">{{ session()->get('success') }}</div>
@endif

<table class="table table-striped mt-4">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Subcategory name</th>
            <th scope="col">Parent category</th>
            <th scope="col">&nbsp;</th>
            <th scope="col">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($subcategories as $subcategory)
        <tr>
            <th scope="row">{{ $subcategory->id }}</th>
            <td><a href="{{ action('SubcategoryController@show', ['subcategory' => $subcategory->id]) }}">{{ $subcategory->name }}</a></td>
            <td>{{ $subcategory->category->name }}</td>
            <td><a href="{{ action('SubcategoryController@edit', ['subcategory' => $subcategory->id]) }}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ action('SubcategoryController@destroy', ['subcategory' => $subcategory->id]) }}" method="POST">
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