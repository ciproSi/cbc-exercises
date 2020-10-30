@extends('layouts.main')

@section('content')
    {{-- check the session for 'flash_messages' --}}
    @if (session()->get('flash_message'))
        <div class="alert alert-success mt-2">
            <h3>{{ session()->get('flash_message') }}</h3>
        </div>
    @endif    

    <div class="row mt-3">
        <div class="col">
            <h1>{{ $book->title }}</h1>
            <div class="col">
                <a href="{{ action('BookController@edit', ['id' => $book->id]) }}" class="btn btn-info">Edit book</a>
                @include('common.delete-book')
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <img src="{{ $book->image }}" alt="{{ $book->title }}">
        </div>
        <div class="col">
            <h5>Author:</h5>
            <h6>{{ $book->authors }}</h6>
        </div>
        <div class="col">
            <form action="{{ action('OrderController@store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" class="form-control">
                </div>
                <input type="hidden" name="book_id" value="{{ $book->id }}">
                <button class="btn btn-success">To the cart</button>
            </form>
        </div>
        
    </div>

    {{-- review form --}}
    <div class="row mt-3">
        <div class="col">
            <h2>Write a review</h2>
    
            @include('common.errors')
    
            <form action="{{ action('BookController@storeReview', ['id' => $book->id]) }}" method="POST">
                @csrf
    
                <div class="form-group">
                    <label for="review_author">Author of the review</label>
                    <input type="text" name="review_author" class="form-control">
                </div>
                <div class="group-form">
                    <label for="review">Your review</label>
                    <input type="text" name="review" class="form-control">
                </div>
                <div class="form-group">
                    <label for="rating">Rating 1-100</label>
                    <input type="number" name="rating" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit review and help the other readers</button>
                </div>
            </form>
        </div>

        {{-- show all reviews --}}
        <div class="col">
            <h3>Reviews:</h3>
            @foreach ($book->ratings as $rating)
                <div class="card mt-2">
                    <div class="card-header">
                       Author: {{ $rating->review_author }}
                    </div>
                    <div class="card-body">
                        <h5>{{ $rating->review }}</h5>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: {{ $rating->value }}%" aria-valuenow="{{ $rating->value }}" aria-valuemin="0" aria-valuemax="100">{{ $rating->value }}%</div>
                          </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
@endsection

