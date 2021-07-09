<!DOCTYPE htnl>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <!-- css をインポート -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>@yield('title1')</h1>
        @yield('content')
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
