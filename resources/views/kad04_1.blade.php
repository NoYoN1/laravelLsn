    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
        <title>課題04_1</title>
    </head>
    <body>

        <div class="container"><h1 class="jumbotron  bg-primary text-white">{{$title}}</h1></div>
        <div class="row">
            <div class="col-sm-8"><h1 class="text-center text-primary">{{$dt->isoFormat('YYYY年MM月DD日(dd)')}}</h1></div>
            <div class="col-sm-1"><a href="{{$dt->copy()->subMonth()->toDateString()}}"><button type="button" class="btn btn-primary">前月</button></a></div>
            <div class="col-sm-1"><a href="{{$now->toDateString()}}"><button type="button" class="btn btn-primary">現在月</button></a></div>
            <div class="col-sm-1"><a href="{{$dt->copy()->addMonth()->toDateString()}}"><button type="button" class="btn btn-primary">次月</button></a></div>
        </div>
        <div class="d-flex justify-content-center">
            <h2 class="table-responsive-sm" >
            <table class=" table table-bordered text-right ">
                 <tr>
                    @foreach ($week as $w)
                    <td class="bg-primary text-white">
                        <h5>{{$w}}</h5>
                    </td>
                    @endforeach
                 </tr>
                 @foreach ($cal as $month)
                 <tr>
                    @foreach ($month as $day)
                        <td>{{$day}}</td>
                    @endforeach
                </tr>
                 @endforeach
                {{-- @for ($i = 0; $i < count($cal); $i++)
                    <tr>
                    @for($j = 0; $j < count($cal[0]); $j++)
                        <td >{{$cal[$i][$j]}}</td>
                    @endfor
                    </tr>
                @endfor --}}
            </table>
            </h2>
        </div>
    </body>
    </html>
