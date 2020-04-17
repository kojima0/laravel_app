<?php

namespace App\Http\Controllers;

use App\Prefecture;

use Illuminate\Http\Request;

class PrefectureController extends Controller
{
    public function index (Request $request)
    {
        $items = Prefecture::all();
        return view ('lv4', ['items' => $items]);
    }
}
