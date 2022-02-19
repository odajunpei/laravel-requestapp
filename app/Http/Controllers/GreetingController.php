<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    //add
    public function index()
    {
        return view('greeting.index');
    }

    public function welcome(Request $request)
    {
        $rule = [
            'username' => 'required|max:20'
        ];
        $request->validate($rule);
        $username = $request->input('username');
        return view('greeting.welcome', ['username' => $username]);
    }
}
