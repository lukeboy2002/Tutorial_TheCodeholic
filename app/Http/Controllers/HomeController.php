<?php

namespace App\Http\Controllers;

use App\Models\Car;

class HomeController extends Controller
{
    public function index()
    {
//        $cars = Car::get();
//        $cars = Car::where('published_at', '!=', null)->get();
//        $car = Car::where('published_at', '!=', null)->first();
//        $cars = Car::where('published_at','!=', null)
//            ->where('user_id', 1)
//            ->orderBy('published_at', 'desc')
//            ->limit(2)
//            ->get();
//        dump($cars);

        $carData = [
            'maker_id' => 1,
            'model_id' => 1,
            'year' => 2024,
            'price' => 20000,
            'vin' => '999',
            'mileage' => 5000,
            'car_type_id' => 1,
            'fuel_type_id' => 1,
            'user_id' => 1,
            'city_id' => 1,
            'address' => 'Something',
            'phone' => '999',
            'description' => null,
            'published_at' => now(),
        ];
//
//// Create and return record
//        $car2 = Car::create($carData);
//
//// Or create a model, fill with data and then save in DB
//        $car2 = new Car();
//        $car2->fill($carData);
//        $car2->save();
//
////  Or
//        $car3 = new Car($carData);
//        $car3->save();

//        update
//        $car = Car::find(1);
//        $car->price = 14000;
//        $car->save();

//        $car = Car::updateOrCreate(
//            ['mileage' => '5000', 'price' => 18000], // where condition
////            $carData
//        );

//        Car::where('published_at', '=', null)
//            ->where('user_id', 1)
//            ->update(['description' => 'lorum ipsum']);

//        dd($car);

//        $car = Car::find(1);
//        $car->delete();

//        Car::destroy([2, 3]);
        $deleted = Car::where('published_at', null)
            ->where('user_id', 1)
            ->delete();

        return view('home.index');
    }
}
