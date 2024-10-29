<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
    public function welcome()
    {
        return view('hello.welcome', [
            'name' => 'Antoine',
            'surname' => 'Hendriks',
        ]);
    }
}
