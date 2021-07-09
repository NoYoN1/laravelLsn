<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kad03_1Controller extends Controller
{
    public function index()
    {
        $message = "これはコントローラーからブレードに渡したメッセージです。";
        return view('kad03_1', compact('message'));
    }
}
