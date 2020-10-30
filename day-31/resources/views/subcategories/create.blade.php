@extends('layouts.main-admin', ['title' => 'New subcategory'])

@section('content')

<form action="{{ action('SubcategoryController@store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Subcategory name</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="category">Choose a parent category:</label>
        <select name="category" class="form-control">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach    
        </select>
    </div>
    <button class="btn btn-success">Save subcategory</button>
</form>
    
@endsection