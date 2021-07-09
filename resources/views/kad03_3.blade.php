    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
        <title>課題03_3</title>
    </head>
    <body>
        <div class="container ">
            <h1 class="jumbotron text-light bg-primary">{{$message}}</h1>
            <div class = "row">
                <div class="col-sm-8">{{$dt->isoFormat('今日はYYYY年MM月DD日(dd)です。')}}</div>
                <div class="col-sm-4 d-flex flex-row-reverse">{{$dt->isoFormat('現在の時刻は、H時m分s秒です。')}} </div>
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
    </html>
