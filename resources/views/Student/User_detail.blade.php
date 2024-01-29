<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User_Detail</title>
</head>
<body>
    <H1>Welcome</H1>
    <form action="user_detial_Process" method='GET'>
        @csrf
        <label name="user">Search For User</label>
        <input type="text" name="user">
        <input type="submit" value="search">
    </form>
</body>
</html>