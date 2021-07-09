<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class kad11_1Controller extends Controller
{
    //
    public function index()
    {
        $url = 'http://api.openweathermap.org/data/2.5/forecast?q=Osaka,JP&mode=jso%20n&appid=9ee62872232aefb38296f985ae213d6c&lang=ja&units=metric';

        $client  = new Client();
        $method = 'GET'; //メソッドの指定
        $response = $client->request($method, $url, ['http_errors' => false]);
        $posts = $response->getBody(); //レスポンスボディを取得

        $status = $response->getStatusCode();

        $posts = mb_convert_encoding(
            $posts,
            'UTF-8',
            'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN'
        );
        $msg = "ERROR!!!";

        $json = json_decode($posts); //JSON データを配列として格納される
        if ($status == 200) {
            return view('kad11_1', compact('json'));
        } else {
            return view('kad11_2',  ["json" => $json, "msg" => $msg]);
        }
    }
}
