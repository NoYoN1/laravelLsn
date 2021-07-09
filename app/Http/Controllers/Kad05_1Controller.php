<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Kad05_1Request;

class Kad05_1Controller extends Controller
{
    public function index()
    {
        $title = "フォーム処理";
        return view('kad05_1', ['title1' => $title]);
    }
    public function post(Kad05_1Request $request)
    {
        $email = $request->input('email');
        $pass = $request->input('pass');
        // $input = $request->all();
        $request->session()->regenerateToken();
        return view('kad05_2', compact('email', 'pass'));
    }
}
