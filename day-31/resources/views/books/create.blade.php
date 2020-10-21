<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Create new book</title>
</head>
<body>
   <div class="container">
        <form action="{{ action('BookController@store') }}" method="POST" >
            @csrf
            <label for="title">Title <br>
                <input type="text" name="title">
            </label>
            <br>
            <label for="authors">Authors <br>
                <input type="text" name="authors">
            </label>
            <br>
            <label for="image">Image URL <br>
                <input type="text" name="image">
            </label>
            <br>
            <button class="btn btn-success">Safe book</button>
        </form>
   </div>
</body>
</html>