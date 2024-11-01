<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeatures;

class HomeController extends Controller
{
    public function index()
    {
//        $car = Car::find(1);

//        dd($car->primaryImage, $car->features);

//        $car->features->abs = 0;
//        $car->features->save();

//        $car->features->update(['abs' => 1]);
//        $car->primaryImage->delete();

        $car = Car::find(2);

        $carFeatures = new CarFeatures([
            'abs' => false,
            'air_conditioning' => false,
            'power_windows' => false,
            'power_door_locks' => false,
            'cruise_control' => false,
            'bluetooth_connectivity' => false,
            'remote_start' => false,
            'gps_navigation' => false,
            'heated_seats' => false,
            'climate_control' => false,
            'rear_parking_sensors' => false,
            'leather_seats' => false,
        ]);
        $car->features()->save($carFeatures);
        
        return view('home.index');
    }
}
