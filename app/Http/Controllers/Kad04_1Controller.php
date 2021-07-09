<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Faker\Provider\Lorem;

class Kad04_1Controller extends Controller
{
    public function index($calDate = 0)
    {

        if ($calDate == 0) {
            $dt = Carbon::now();
        } else {
            $dt = new Carbon($calDate);
        }
        $now = Carbon::now();
        $title = "Calendar";
        $week = array("SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT");

        return view("kad04_1", ["title" => $title, "dt" => $dt, "now" => $now, "cal" => $this->createCalendar($dt), 'week' => $week]);
    }
    function createCalendar($dt)
    {
        /****************************************************************
         カレンダー作成メソッド（引数︓Carbon オブジェクト）引数の日付の月のカレンダーを
        6 ⾏ 7 列の 2 次元配列にして戻す。
         ****************************************************************/
        $day = 1;
        /***************************************
         6 ⾏ 7 列のカレンダーを作成する 1 次元配列を作成してから、2 次元配列に直す。
         *****************************************/
        for ($i = 0; $i < (6 * 7); $i++) {
            //月の最初の曜日までは、スペースを⼊⼒
            if ($i < $dt->copy()->startOfMonth()->dayOfWeek) {
                $cal[$i] = ' ';
            } else if ($day <= $dt->daysInMonth) { //その月の日数
                $cal[$i] = $day;
                $day++;
            } else {
                $cal[$i] = ' '; //最後の日よりも後にはスペースを⼊⼒
            }
        }
        $cal = array_chunk($cal, 7); //1 次元配列を 7 列の 2 次元配列にする。
        return $cal;
    }
}
