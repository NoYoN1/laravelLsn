@extends('layouts.kadapp')
@section('title','課題 09_2')
<div class="container" >
    <div class="jumbotron text-light bg-primary" >
        @section('title1','データベース更新')
        @section('content')
    </div>

    <form action="/kad07_1/{{$data->id}}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="form-group row">
            <p class="col-sm-2">タイトル</p>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title" placeholder="タイトルを入力" value="{{$data->title}}">
            </div>
        </div>
        <div class="form-group row">
            <p class="col-sm-2">本文</p>
            <div class="col-sm-10">
                <textarea class="form-control" name="contents">{{$data->contents}}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <div  class="col-sm-2">
                @empty($data->image_url)
                @else
                    <img src="{{asset('/storage/bcontents_images/'.$data->image_url) }}" style="width: 150px; height: 100px;">
                @endempty
            </div>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="image_url">
            @error('image_url')
            <div class="text-danger">{{$message}}</div>
            @enderror
            </div>
            </div>
        <div class="form-group row">
            <div class="col-sm">
                <form action='/kad07_1/{{$data->id}}' method="POST">
                    @method('PUT')
                    @csrf
                    <input type="submit" class="btn btn-primary"  value="更新">
               </form>
            </div>
        </div>
    </form>

</div>
@endsection
