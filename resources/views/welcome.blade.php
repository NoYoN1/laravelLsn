<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>

                </div>
                <hr>
                {{-- p-2 bg-info flex-fill --}}
                <h3 class="links">KADAI LIST</h3>
                <br>

                <div class="links d-flex">
                    <div class='links p-2 bg-light  flex-fill'>
                        <a href="#" target="_blank">KAD01</a>
                        <hr>
                        <dd class="links"><a href="http://127.0.0.1:8000/kad01_1/" target="_blank">- KAD01_1</a></dd>
                    </div>
                    <div class='links p-2  flex-fill'>
                        <dt class="links"><a href="#">KAD02</a></dt>
                        <hr>
                            <dd class="links"><a href="http://127.0.0.1:8000/kad02_1/" target="_blank">- KAD02_1</a></dd>
                            <dd class="links"><a href="http://127.0.0.1:8000/kad02_2/" target="_blank">- KAD02_2</a></dd>
                    </div>
                    <div class='links p-2  bg-light flex-fill'>
                        <dt class="links"><a href="#">KAD03</a></dt>
                        <hr>
                            <dd class="links"><a href="http://127.0.0.1:8000/kad03_1/" target="_blank">- KAD03_1</a></dd>
                            <dd class="links"><a href="http://127.0.0.1:8000/kad03_3/" target="_blank">- KAD03_3</a></dd>
                    </div>
                    <div class='links p-2  flex-fill'>
                        <dt class="links"><a href="#">KAD04</a></dt>
                        <hr>
                            <dd class="links"><a href="http://127.0.0.1:8000/kad04_1/" target="_blank">- KAD04_1</a></dd>
                            <dd class="links"><a href="http://127.0.0.1:8000/kad04_2/" target="_blank">- KAD04_2</a></dd>
                    </div>
                    <div class='links p-2  bg-light flex-fill'>
                        <dt class="links"><a href="#">KAD05</a></dt>
                        <hr>
                            <dd class="links"><a href="http://127.0.0.1:8000/kad05_1/" target="_blank">- KAD05_1</a></dd>
                    </div>
                </div>
                <br>
            <hr>
            <br>
                <div class="links d-flex">
                    <div class='links p-2  flex-fill'>
                        <a href="#" target="_blank">KAD06</a>
                        <hr>
                        <dd class="links"><a href="http://127.0.0.1:8000/kad06_1/" target="_blank">- KAD06_1</a></dd>

                    </div>
                    <div class='links p-2 bg-light flex-fill'>
                        <dt class="links"><a href="#">KAD07</a></dt>
                        <hr>
                            <dd class="links"><a href="http://127.0.0.1:8000/kad07_1/" target="_blank">- KAD07_1</a></dd>
                            <dd class="links"><a href="http://127.0.0.1:8000/kad02_2/" target="_blank">- #</a></dd>
                    </div>
                    <div class='links p-2  flex-fill'>
                        <dt class="links"><a href="#">KAD08</a></dt>
                        <hr>
                            <dd class="links"><a href="http://127.0.0.1:8000/kad03_1/" target="_blank">- #</a></dd>
                            <dd class="links"><a href="http://127.0.0.1:8000/kad03_3/" target="_blank">- #</a></dd>
                    </div>
                    <div class='links p-2 bg-light flex-fill'>
                        <dt class="links"><a href="#">KAD09</a></dt>
                        <hr>
                            <dd class="links"><a href="http://127.0.0.1:8000/kad04_1/" target="_blank">- #</a></dd>
                            <dd class="links"><a href="http://127.0.0.1:8000/kad04_2/" target="_blank">- #</a></dd>
                    </div>
                    <div class='links p-2  flex-fill'>
                        <dt class="links"><a href="#">KAD10</a></dt>
                        <hr>
                            <dd class="links"><a href="http://127.0.0.1:8000/kad05_1/" target="_blank">- #</a></dd>
                    </div>
                </div>


            </div>
        </div>
    </body>
</html>
