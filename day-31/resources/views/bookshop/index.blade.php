<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Bookshops list</title>
</head>
<body>
    <div class="container">
        @if (isset($msg))
            <h4 class="alert--good">{{ $msg }}</h4>
        @endif
        <table>
            <thead>
                <tr>
                    <td>Bookshop name</td>
                    <td>Address</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookshops as $bookshop)
                    <tr>
                        <td>{{ $bookshop->name }}</td>
                        <td>{{ $bookshop->city }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>