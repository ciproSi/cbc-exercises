<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Books in my shelf</title>
</head>
<body>
    <div class="container">
        <h1>Index of the books</h1>
        <a href="{{ action('BookController@create') }}" class="btn btn-success">Create new book</a>
        {{-- check if there is a flash message in session --}}
        @if (session()->get('flash_message'))
            <div class="alert alert-success">
                <h4>{{ session()->get('flash_message') }}</h4>
            </div>
        @endif
        
        {{-- table with books and methods to handle them --}}
        <table class="table-striped">
            <thead>
                <tr>
                    <th scope="col">ID#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Authors</th>
                    <th scope="col">Cover image</th>
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
                        <td><img class="img-thumbnail" src="{{ $book->image }}" alt=""></td>
                        <td><button class="btn btn-info">Update</button></td>
                        <td><button class="btn btn-danger">Delete</button></td>

                    </tr>
            @endforeach
            </tbody>
        </table>
    </div>
        
</body>
</html>