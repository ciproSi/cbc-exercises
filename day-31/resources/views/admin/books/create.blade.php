@extends('layouts.main-admin', ['title' => 'Create a new book'])

@section('content')
    
    @include('common.errors')

    <form action="{{ action('BookController@store') }}" method="POST" >
        @csrf
        @component('components.form-group', ['label' => 'Title:'])
            <input type="text" name="title" value="{{ old('title') }}">    
        @endcomponent
        
        @component('components.form-group', ['label' => 'Authors:'])
            <input type="text" name="authors" value="{{ old('authors') }}">
        @endcomponent

        @component('components.form-group', ['label' => 'Image URL'])
            <input type="text" name="image" value="{{ old('image') }}">
        @endcomponent
        <button class="btn btn-success">Safe book</button>
    </form>

@endsection