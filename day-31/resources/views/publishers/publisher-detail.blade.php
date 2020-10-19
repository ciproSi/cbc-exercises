<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Publisher detail</title>
</head>
<body>
    <h1>List of {{ $publisher[0]->title }} books</h1>
    
    @if (empty($publishers_books))
        <h3>This publisher is rookie and hasn't published a shit of paper yet.</h3>
    @endif

    <div class="list">
        @foreach ($publishers_books as $book)
            <div class="book-name">{{ $book->title }}</div>
            <div class="book-author">{{ $book->authors }}</div>
            <img src="{{ $book->image }}" alt="">
            
        @endforeach
    </div>


</body>
</html>