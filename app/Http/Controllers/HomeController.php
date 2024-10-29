<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'name' => 'Antoine',
            'surname' => 'Hendriks',
            'country' => 'nl',
            'job' => '<b>Projectleader</b>',
            'hobbies' => ['football', 'movies', 'webdesign'],
        ]);
    }
}
