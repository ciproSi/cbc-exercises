@extends('layouts.main', ['title' => 'Edit existing book'])

@section('content')
    
    <h4>You are editing: {{ $book->title }}</h4>
    @include('common.errors')

    <form action="/book/{{ $book->id }}" method="POST" >
        @method('PUT')
        @csrf
        @component('components.form-group', ['label' => 'Title:'])
            <input type="text" name="title" value="{{ $book->title }}">    
        @endcomponent
        
        @component('components.form-group', ['label' => 'Authors:'])
            <input type="text" name="authors" value="{{ $book->authors }}">
        @endcomponent

        @component('components.form-group', ['label' => 'Image URL'])
            <input type="text" name="image" value="{{ $book->image }}">
        @endcomponent
        <button class="btn btn-success">Save</button>
    </form>

@endsection