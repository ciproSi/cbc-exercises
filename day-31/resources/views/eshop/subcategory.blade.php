<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simon's books eshop - {{ $subcat_name }}</title>
</head>
<body>
    <h1> {{ $category->name }} / {{ $subcat_name }}</h1>
    
     <a href="/eshop/category/{{ $category->id }}">Back to the {{ $category->name }}</a>

     {{-- list of books --}}
     <h2>Books of {{ $subcat_name }}</h2>
     <div class="list">
        @foreach ($books as $book)
            <div class="book-name">{{ $book->title }}</div>
            <div class="book-author">{{ $book->authors }}</div>
            <img src="{{ $book->image }}" alt="Image of the book">
            
        @endforeach
    </div>

</body>
</html>