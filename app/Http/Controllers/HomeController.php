<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarType;

class HomeController extends Controller
{
    public function index()
    {
//        $car = Car::find(1);
//        $carType = CarType::where('name', 'sedan')->first();
////        dd($carType->cars);
//        $cars = Car::whereBelongsTo($carType)->get();
//        dd($cars);

        $car = Car::find(1);
        $carType = CarType::where('name', 'sedan')->first();

//        $car->car_type_id = $carType->id;
//        $car->save();

        $car->carType()->associate($carType);
        $car->save();

        return view('home.index');
    }
}
