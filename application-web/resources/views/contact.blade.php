<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
</head>
<body>
    <h3>Hello Contact</h3>
    <ul>
        <li><a href="{{ url('/villa/about') }}">About</a></li>
        <li><a href="{{ url()->previous() }}">Contact</a></li>
    </ul>

</body>
</html>
