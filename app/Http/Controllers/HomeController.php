<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
//        $maker = Maker::factory(10)->create();

//        Maker::factory(5)
//            ->hasModels(5)
//            ->create();

//        Model::factory()
//            ->count(5)
//            ->forMaker()
//    ->forMaker(['name' => 'Toyota']) // This will create 5 models for Toyota maker
//            ->create();
//
//        Model::factory()
//            ->count(5)
//            ->for(Maker::factory()->state(['name' => 'Toyota']), 'carMaker')
//            ->create();
//
//        $maker = Maker::factory()->create();
//        Model::factory()
//            ->count(5)
//            ->for($maker)
//            ->create();

        User::factory()
            ->has(Car::factory()->count(5), 'favouriteCars')
            ->create();

//        User::factory()
//            ->hasAttached(Car::factory()->count(5), 'favouriteCars')
//            ->create();

        return view('home.index');
    }
}
