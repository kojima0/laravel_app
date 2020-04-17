<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $home;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')
             ->except('gizumo_lv1','showNameForm','gizumo_lv2');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function gizumo_lv1()
    {
        return 'gizumo';
    }

    public function showNameForm()
    {
        return view('lv2');
    }

    public function gizumo_lv2(Request $request)
    {
        return $request;
    }
}
