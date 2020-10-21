<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new bookshop</title>
</head>
<body>
   <div class="form-container">
        <form action="{{ action('BookshopController@store') }}" method="POST">
            @csrf
            <label for="name">Name: <br>
                <input id="name" type="text" name="name">
            </label>
            <br>
            <label for="city">City: <br>
                <input id="city" type="text" name="city">
            </label>
            
            <br><br>
    
            <button type="submit">Save bookshop</button>
        </form>
   </div>
</body>
</html>