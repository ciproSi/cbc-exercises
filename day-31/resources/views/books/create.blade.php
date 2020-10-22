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
            @component('components.form-group', ['label' => 'Title:'])
                <input type="text" name="title">    
            @endcomponent
            
            @component('components.form-group', ['label' => 'Authors:'])
                <input type="text" name="authors">
            @endcomponent

            @component('components.form-group', ['label' => 'Image URL'])
                <input type="text" name="image">
            @endcomponent
            <button class="btn btn-success">Safe book</button>
        </form>
   </div>
</body>
</html>