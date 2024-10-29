<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowCarTempController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return '__Invokeable';
    }
}
