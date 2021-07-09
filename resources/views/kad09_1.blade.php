@extends('layouts.kadapp')
@section('title','課題 09_1')
<div class="container" >
    <div class="jumbotron text-light bg-primary" >
        @section('title1','データベース追加')
        @section('content')
    </div>


    <form action="/kad07_1" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="form-group row">
            <p class="col-sm-2">タイトル</p>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title" placeholder="タイトルを入力" value="{{old('title')}}">
                @error('title')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <p class="col-sm-2">本文</p>
            <div class="col-sm-10">
                <textarea class="form-control" name="contents">{{old('contents')}}</textarea>
                @error('contents')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm">
                <input type="file" class="form-control" name="image_url">
                @error('image_url')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm">
                <input type="submit" class="btn btn-primary" name="sub" value="追加">
            </div>
        </div>
    </form>

</div>
@endsection
