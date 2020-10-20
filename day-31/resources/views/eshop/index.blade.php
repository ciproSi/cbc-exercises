<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The best book store ever</title>
</head>
<body>
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
            <div class="book-name">{{ $book->title }}</div>
            <div class="book-author">{{ $book->authors }}</div>
            <img src="{{ $book->image }}" alt="Image of the book">
            
        @endforeach
    </div>
</body>
</html>