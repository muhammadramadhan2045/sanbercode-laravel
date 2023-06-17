<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
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
