@extends('layouts.main-admin', ['title' => 'Edit existing book'])

@section('content')
    
    <h4>You are editing: {{ $book->title }}</h4>

    @include('common.errors')

    <form action="{{ route('admin.books.update', $book->id) }}" method="POST" >
        @method('PUT')
        @csrf
        @component('components.form-group', ['label' => 'Title:'])
            <input class="form-control" type="text" name="title" value="{{ $book->title }}">    
        @endcomponent
        
        @component('components.form-group', ['label' => 'Authors:'])
            <input class="form-control" type="text" name="authors" value="{{ $book->authors }}">
        @endcomponent

        @component('components.form-group', ['label' => 'Image URL'])
            <input class="form-control" type="text" name="image" value="{{ $book->image }}">
        @endcomponent

        <div class="form-group">
            @foreach ($genres as $genre)
                <label>
                    <input type="checkbox" name="genre[{{ $genre->id }}]"
                        value="1"
                        {{ $book_genres_id->contains($genre->id) ? 'checked' : ''}}>
                    {{ $genre->name }}
                </label>
            @endforeach
        </div>
        <button class="btn btn-success">Save</button>
    </form>

@endsection