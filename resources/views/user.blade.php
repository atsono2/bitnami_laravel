<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>user</p>
    <form action="/user/post" method="POST">
        @method('PUT')
        @csrf
        <input type="text" name="test">
        <input type="submit">
    </form>
</body>
</html>
