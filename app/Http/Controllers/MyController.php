<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MyController extends Controller
{
    function __construct()
    {
        $datas = DB::table('config')->where('type', '=', 2)->get();
        $others = [];
        foreach ($datas as $data) {
            $others[$data->name] = $data->value;
        }
        $this->others = $others;
    }
}
