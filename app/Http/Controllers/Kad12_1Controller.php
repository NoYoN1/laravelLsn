<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bcontent;
use App\Http\Resources\BcontentResource;

class Kad12_1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BcontentResource::collection(Bcontent::orderBy('created_at', 'desc')->paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //11
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Bcontent::find($id);
        if ($data) {
            return new BcontentResource($data);
        } else {
            $json = array('error' => array(
                'message' => '該当のレコードが存在しません。',
                'code' => 404,
            ));
            return response()->json($json, 404);
        }
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
