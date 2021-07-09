<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    <title>課題05_1</title>
</head>
<body>
    <div class="container"><h1 class="jumbotron  bg-primary text-white">{{$title}}</h1>
    <form action="/kad05_1" method="POST">
        @csrf
        <div class="form-group row">
            <div class="col-sm-3">メールアドレス</div>
                <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" placeholder="メールアドレスを入力" required>
                </div>
             </div>
                 <div class="form-group row">
                    <div class="col-sm-3">パスワード</div>
                        <div class="col-sm-9">
                        <input type="password" class="form-control" name="pass" placeholder="パスワードを入力" required>
                    </div>
                </div>
            <div class="form-group row">
                <div class="col-sm">
                <input type="submit" class="btn btn-primary" name="sub" value="送信">
            </div>
        </div>
    </form>
</div>
</body>
</html>
