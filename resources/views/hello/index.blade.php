<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1>Hello / Index</h1>
    <h2>config msg</h2>
    <p>{{ $msg }}</p>
    <h2>config data</h2>
    @foreach ($data as $item)
    <p>{{ $item }}</p>
    @endforeach
</body>
</html>
