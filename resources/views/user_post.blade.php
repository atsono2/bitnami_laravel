<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>あなたの入力は{{ $request['test'] }}でした</p>
    <p>
        <a href="{{ route('test', ['name' => $request['test']]) }}">リンク</a>
    </p>
</body>
</html>
