@extends('layouts.kadapp')
@section('title','課題 06_1')
<div class="container" >
    <div class="jumbotron text-light bg-primary" >
        @section('title1','ファイルのアップロード')
        @section('content')
    </div>
    <p>以下のファイルをアップロードしました。</p>
    <div class="rounded">
        <img class="img-fluid mx-auto d-block" alt="kad06" src="{{asset('/storage/kad06_images/' . $image) }}">
    </div>
    <a href="/kad06_1">戻る</a>
</div>
@endsection
