<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books in my shelf</title>
</head>
<body>
    <h1>Index of the books</h1>
    <div class="list">
        @foreach ($books as $book)
            <div class="book-name">{{ $book->title }}</div>
            <div class="book-author">{{ $book->authors }}</div>
            <img src="{{ $book->image }}" alt="">
            
        @endforeach
    </div>
</body>
</html>