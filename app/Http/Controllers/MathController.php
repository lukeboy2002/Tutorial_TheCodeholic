<?php

namespace App\Http\Controllers;

class MathController extends Controller
{
    public function sum($a, $b)
    {

        return 'Sum :'.($a + $b);
    }

    public function subtract($a, $b)
    {
        return 'Subtract :'.($a - $b);
    }
}
