<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
//        $car = Car::find(1);
//        dd($car->favouredUsers);

//        $user = User::find(1);
//        dd($user->favouriteCars);

        $user = User::find(1);

// Add cars with IDs 1, 2, and 3 into favourites
//        $user->favouriteCars()->attach([1, 2, 3]);

// Add cars with IDs 1, 2, and 3 into favourites, but delete all others
//        $user->favouriteCars()->sync([3]);

// If you want to provide pivot table additional values
//        $user->favouriteCars()->syncWithPivotValues([1, 2, 3], ['column1' => 'value1']);
//        $user = User::find(1);
//        $user->favouriteCars()->detach([3]);
//        $user->favouriteCars()->detach();


        return view('home.index');
    }
}
