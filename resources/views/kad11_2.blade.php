@extends('layouts.kadapp')
@section('title','課題 11_2')
<div class="container" >
    <div class="jumbotron text-light bg-primary" >
        @section('title1')<h1>{{$msg}}</h1>
        @section('content')
    </div>

    <h3>
        <p class="text-danger">{{$msg}}</p> {{$json -> message}}(code:{{$json -> cod}})
    </h3>

</div>
@endsection
