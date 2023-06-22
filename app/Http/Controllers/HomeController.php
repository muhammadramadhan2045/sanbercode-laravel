<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('day1_index');
    }

    public function registerdalam()
    {
        return view('day1_form');
    }
    public function welcome(Request $request)
    {
        $first_name = $request["first_name"];
        $last_name = $request["last_name"];
        return view('day1_welcome', ["first_name" => $first_name, "last_name" => $last_name]);
    }
}
