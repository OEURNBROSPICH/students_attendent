<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="student_form_process" method='POST'>
        @csrf
        <label for="">First Name</label>
        <input type="text" name="first_name">
        <label for="">Last Name</label>
        <input type="text" name="last_name">
        <input type="submit" value="SEND">
    </form>
    
</body>
</html>