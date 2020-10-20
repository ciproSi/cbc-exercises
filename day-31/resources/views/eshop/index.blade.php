<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>The best book store ever</title>
</head>
<body>
    <div class="container">
        {{-- list of categories --}}
        <h2>We offer those categories</h2>
        <nav>
            @foreach ($categories as $cat)
                <a href="/eshop/category/{{ $cat->id }}">{{ $cat->name }}</a>
            @endforeach
        </nav>
    
        {{-- list of books --}}
        <h2>All books</h2>
        <div class="list">
            @foreach ($books as $book)
                <div class="book">
                    <div class="book__name">{{ $book->title }}</div>
                    <div class="book__author">{{ $book->authors }}</div>
                    <img src="{{ $book->image }}" alt="Image of the book">
                </div>
                
            @endforeach
        </div>
    </div>
</body>
</html>