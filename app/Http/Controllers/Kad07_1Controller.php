<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bcontent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;



class Kad07_1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Bcontent::all();
        // $content = new Bcontent(); //モデルクラスのオブジェクトを作成する
        //10 件分取り出す
        // $data = $content->orderBy('id', 'desc')->limit(10)->get();
        $data = Bcontent::orderBy('created_at', 'desc')->paginate(5);
        // ['data' => $data]
        return view('kad07_1', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kad09_1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $content = new Bcontent();
        //
        $this->validate($request, Bcontent::$rules, Bcontent::$messages);
        //
        // $image = Storage::disk('public')->put('/bcontents_images/', $request->image_url);
        $image = Storage::disk('public')->put('/bcontents_images/', $request->image_url);

        $content->title = $request->input('title');
        $content->contents = $request->input('contents');
        $content->image_url = basename($image);

        DB::transaction(function () use ($content) {
            $content->save();
        });
        //sfs
        $request->session()->regenerateToken();
        return redirect('/kad07_1/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $data = Bcontent::find($id);
        return view('kad09_2', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $image =
            Storage::disk('public')->put('/bcontents_images/', $request->image_url);
        $content = Bcontent::find($id);
        $content->title = $request->input('title');
        $content->contents = $request->input('contents');
        $content->image_url = basename($image);
        DB::transaction(function () use ($content) {
            $content->save();
        });


        $request->session()->regenerateToken();
        return redirect('/kad07_1/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        DB::transaction(function () use ($id) {
            Bcontent::destroy($id); //テーブルの内容を変更する処理
        });
        return redirect('/kad07_1/'); //リダイレクト
    }
}
