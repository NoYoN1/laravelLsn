@extends('layouts.kadapp')
@section('title','課題 11_1')
<div class="container" >
    <div class="jumbotron text-light bg-primary" >
        @section('title1')<h1>{{$json -> city -> name}}の天気</h1>
        @section('content')
    </div>


    <table class="table table-bordered">
        @foreach ($json -> list as $l)
            <tr>
                <td class="align-middle">{{\Carbon\Carbon::parse($l-> dt)->isoFormat('YYYY 年 MM 月　DD 日(ddd) HH 時')}}</td>
                <td class="align-middle"><p>天気： {{$l -> main -> temp}}&#176;C</p></td>
                <td class="align-middle"><img src="http://openweathermap.org/img/wn/{{$l -> weather[0] -> icon}}@2x.png"></td>
                <td class="align-middle">{{$l -> weather[0]-> description}}</td>
            </tr>
        @endforeach
    </table>

</div>
@endsection
