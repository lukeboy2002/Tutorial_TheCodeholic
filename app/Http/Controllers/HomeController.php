<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarImage;

class HomeController extends Controller
{
    public function index()
    {
        $car = Car::find(1);

        //Create new image
//        $image = new CarImage(['image_path' => 'something', 'position' =>2]);
//        $car->images()->save($image);

//        $car->images()->create(['image_path' => 'something2', 'position' =>3]);

        // Attach multiple images to $car
        $car->images()->saveMany([
            new CarImage(['image_path' => 'something3', 'position' => 4]),
            new CarImage(['image_path' => 'something4', 'position' => 5]),
        ]);

// the same as above
        $car->images()->createMany([
            ['image_path' => 'something5', 'position' => 6],
            ['image_path' => 'something6', 'position' => 7],
        ]);
//        dd($car->images);


        return view('home.index');
    }
}
