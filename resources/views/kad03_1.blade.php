@extends('layouts.kadapp')
@section('title','課題 03_1')
<div class="container" >
    <div class="jumbotron text-light bg-primary" >
        @section('title2','Blade のテンプレートで表示する')

        @section('content')
    </div>
    <div class="row">
        <div class="col-sm-8">blade で表示しています。<span class="badge badge-pill badge-danger"> new</span></div>
        <div  class = "col-sm-4"> {{$message}}</div>
    </div>
</div>
@endsection
