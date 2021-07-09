@extends('layouts.kadapp')
@section('title','課題 07_1')
<div class="container" >
    <div class="jumbotron text-light bg-primary" >
        @section('title1','データベース修理')
        @section('content')
    </div>


    <div class="row">
        <div class="col-sm-9"> <a href="/kad07_1/create" class="btn btn-primary">新規作成</a></div>
        <div class="col-sm-3">  {{ $data->links() }}</div>
    </div>


        @foreach($data as $cont)
        <p class="text-secondary float-right">{{$cont->created_at}}</p>
            <div class="media my-4">
                @empty($cont->image_url)
                @else
                <img class="mr-3" alt="" src="{{asset('/storage/bcontents_images/'.$cont->image_url) }}" style="width: 350px; height: 220px;">
                @endempty
                <div class="media-body">
                    <div class="text-primary">{{$cont->title}} </div>
                    {{$cont->contents}}
                </div>
            </div>
            <div class="row">
                    <div class="col-sm-9"><p></p></div>
                    {{-- 更新 --}}
                    <div class="col-sm-2">
                        <a href="/kad07_1/{{$cont->id}}/edit" class="btn btn-primary float-right">更新</a>
                    </div>
                    {{-- 削除 --}}
                    <div class="col-sm-1">
                        <form action="/kad07_1/{{$cont->id}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input type="submit" class="btn btn-secondary float-right"
                            onclick="return confirm('レコードを削除します。よろしいですか？')" value="削除">
                        </form>
                    </div>
                </div>
            <hr>
        @endforeach
</div>
@endsection
