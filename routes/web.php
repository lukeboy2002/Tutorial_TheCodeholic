<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $person = [
        'name' => 'John Doe',
        'email' => 'john@doe.com',
    ];
    //    dump($person);
    //    dd($person);
    ddd($person);

    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
