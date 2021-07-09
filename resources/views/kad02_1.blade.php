<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>課題02_1</title>
</head>
<body>
    <h1>初めてのBlade</h1>
    <hr>
    <div>{{$message}}</div>
    <hr>
    @for ($i = 0; $i < count($lang); $i++)
        <div> {{$lang[$i]}} </div>
    @endfor
</body>
</html>
