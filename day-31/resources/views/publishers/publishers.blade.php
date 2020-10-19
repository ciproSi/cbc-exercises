<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of publishers</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>Publisher</td>
                <td>Show</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($publishers as $publisher)
                <tr>
                    <td>{{ $publisher->title }}</td>
                    <td><a href="/publishers/{{ $publisher->id }}">Detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>