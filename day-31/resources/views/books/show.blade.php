@extends('layouts.main')

@section('content')
    <div class="row">
        <h1>{{ $book->title }}</h1>
    </div>
    <div class="row">
        <div class="col">
            <img src="{{ $book->image }}" alt="{{ $book->title }}">
        </div>
        <div class="col">
            <h5>Author:</h5>
            <h6>{{ $book->authors }}</h6>
        </div>
        <div class="col">
            <h5>Ratings</h5>
            @foreach ($book->ratings as $rating)
                <h6>Rating: {{ $rating->value }}</h6>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col">
            
        </div>
        <div class="col">
            <a href="/book" class="btn btn-primary">Back to list of all books</a>
        </div>
        <div class="col">
            
        </div>
    </div>

    
@endsection

