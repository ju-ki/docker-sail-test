<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $id }}番目の記事です</title>
</head>

<body>
    {{ $id }}番目の記事です
    <h1>{{ $post->subject }}</h1>
    <p>{{ $post->content }}</p>
    <p>日付{{ $today }}</p>
</body>

</html>
