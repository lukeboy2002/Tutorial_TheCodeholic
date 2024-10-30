<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class RegisterController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }
}
