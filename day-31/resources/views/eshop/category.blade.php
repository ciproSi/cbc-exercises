<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simon's books eshop - {{ $category->name }}</title>
</head>
<body>
    <h1>Category: {{ $category->name }}</h1>
    
    <h3>Subcategories</h3>
    <nav>
        @foreach ($subcategories as $subcat)
            <a href="/eshop/subcategory/{{ $subcat->id }}">{{ $subcat->name }}</a>    
        @endforeach
    </nav>

    <a href="/eshop">Back to list of categories</a>

     {{-- list of books --}}
     <h2>Books of {{ $category->name }}</h2>
     <div class="list">
        @foreach ($books as $book)
            <div class="book-name">{{ $book->title }}</div>
            <div class="book-author">{{ $book->authors }}</div>
            <img src="{{ $book->image }}" alt="Image of the book">
            
        @endforeach
    </div>

</body>
</html>