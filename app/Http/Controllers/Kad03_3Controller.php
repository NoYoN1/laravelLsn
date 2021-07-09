<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class Kad03_3Controller extends Controller
{
    public function index()
    {

        $time = Carbon::now();
        $message = 'Carbonクラス1';
        return view('kad03_3', ['message' => $message, 'dt' => $time]);
    }
}
