<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hellow laravel</h1>
    <hr>
        @foreach($users as $user);
        <h1>{{ $user->name }}</h1>
        <h1>{{ $user->email }}</h1>
        <h1>{{ $user->id }}</h1>
    @endforeach
</body>
</html>