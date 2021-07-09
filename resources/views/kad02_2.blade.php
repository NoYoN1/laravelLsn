<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <title>課題02_2</title>
</head>
<body>
    <h1>Blade</h1>
    <hr>
    <div>{{$text}}</div>
    @foreach($url as $name => $link)
        <div>
           <a href="{{$link}}">{{$name}}</a>
        </div>
    @endforeach
</body>
</html>
