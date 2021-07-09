<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kad02_2Controller extends Controller
{
    public function index()
    {
        $text = "名ページに移動します。";
        $url = array(
            'YAHOO' => 'https://www.yahoo.co.jp',
            'GOOGLE' => "https://www.google.com",
            "MSN" => "https://www.msn.com/ja-jp"
        );
        return view('kad02_2', ['text' => $text, 'url' => $url]);
    }
}
