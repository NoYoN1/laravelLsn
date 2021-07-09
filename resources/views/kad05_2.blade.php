@extends('layouts.kadapp')
@section('title','課題 05_1')
<div class="container" >
    <div class="jumbotron text-light bg-primary" >
        @section('title1','フォーム処理1')
        @section('content')
    </div>

   <p>メールアドレスは: {{$email}} です。</p>
    <a href="/kad05_1">入力フォームに戻る</a>

</div>
@endsection
