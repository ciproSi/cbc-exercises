@extends('layouts.main-admin', ['title' => 'Index of Books'])

    @section('content')
        <h1>Index of the books</h1>
        
        {{-- check if there is a flash message in session --}}
        @if (session()->get('flash_message'))
            <div class="alert alert-success">
                <h4>{{ session()->get('flash_message') }}</h4>
            </div>
        @endif
        
        {{-- table with books and methods to handle them --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Authors</th>
                    {{-- <th scope="col">Cover image</th> --}}
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <th scope="row">{{ $book->id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->authors }}</td>
                        {{-- <td><img class="img-thumbnail" src="{{ $book->image }}" alt=""></td> --}}
                        <td><a href="{{ route('admin.books.show', $book->id) }}" class="btn btn-secondary">Detail</a></td>
                        <td><a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-info">Edit</a></td>
                        <td>@include('common.delete-book')</td>

                    </tr>
            @endforeach
            </tbody>
        </table>
@endsection