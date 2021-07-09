@extends('layouts.kadapp')
@section('title','課題 06_1')
<div class="container" >
    <div class="jumbotron text-light bg-primary" >
        @section('title1','ファイルのアップロード')
        @section('content')
    </div>
    <div class="col-sm">
        <p>ファイルをアプロードしています。</p>
        <div class="form-group row">
            <form action="/kad06_1" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <input type="file" name="image">
            @error('image')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group row">
            <input class="btn btn-primary"  type="submit" name="sub" value="送信">
        </div>
        </form>
    </div>
</div>
@endsection
