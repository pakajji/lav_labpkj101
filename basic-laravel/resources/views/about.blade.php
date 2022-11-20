<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <h1>About</h1>
    <h3>This is viwe 'about'</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde cupiditate minus corrupti labore sed perferendis repellendus eius accusantium, eligendi qui id totam at porro! Odit numquam quasi debitis atque reiciendis.</p>
    <p><em>ที่อยู่ : {{$address}}</em></p>
    <p><em>เบอร์โทร : {{$tel}}</em></p>
    <a href="/">Laravel</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('admin') }}">Admin</a>
</body>
</html>