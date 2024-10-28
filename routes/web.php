<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //    $person = [
    //        'name' => 'John Doe',
    //        'email' => 'john@doe.com',
    //    ];
    //    dump($person);
    //    dd($person);
    //    ddd($person);
    //    $aboutPageUrl = route('about');
    //    dd($aboutPageUrl);
    //Names Routes With Parameters
    $ProductPageUrl = route('product.view', ['lang' => 'en', 'id' => '1234']);
    dd($ProductPageUrl);

    return view('welcome');
});

//Route::get('/about', function () {
//    return view('about');
//});
Route::view('/about', 'about')->name('about');

//Names Routes With Parameters
Route::get('{lang}/product/{id}', function (string $lang, string $id) {
    //...
})->name('product.view');

//Route Required Parameters
//Route::get('/product/{id}', function (string $id) {
//    return "Product ID=$id";
//});

//Route Optional Parameters
//Route::get('/product/{category?}', function (?string $category = null) {
//    return "Product with category {$category}";
//});

//Route Parameters Validation
//Route::get('/product/{id}', function (string $id) {
//    return "Works! $id";
//})->whereNumber('id');

//Route::get('{lang}/product/{id}', function (string $lang, string $id) {
//    return "$lang Product with ID $id";
//})->whereAlpha('lang')->whereNumber('id');

//Route::get('{lang}/products', function (string $lang) {
//    return "Language $lang";
//})->whereIn('lang', ['en', 'ka', 'in']);

//Route::get('/user/{username}', function (string $username) {
//    return "Works! $username";
//})->whereAlpha('username');

//Route::get('/user/{username}', function (string $username) {
//    return "Works! $username";
//})->whereAlphaNumeric('username');

//Route Parameter Validation with regex
//Route::get('/user/{username}', function (string $username) {
//    return "Works! $username";
//})->where('username', '[a-z]*');
//
//Route::get('{lang}/product/{id}', function (string $lang, string $id) {
//    return "$lang Product with ID $id";
//})->where(['lang' => '[a-z]{2}', 'id' => '\d{4,}']);
//
//Route::get('/search/{search}', function (string $search) {
//    return $search;
//})->where('search', '.*');

//Route Groups
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return '/admin/users';
    });
});

//Fallback function
Route::fallback(function () {
    return 'Droplul';
});

//Challenge
//Create Route which accepts two route parameters.
// These parameters should be integers.
// You should calculate the sum of these two parameters and print that sum.
Route::get('/sum/{a}/{b}', function (float $a, float $b) {
    echo 'Sum: '.($a + $b);
})->whereNumber(['a', 'b']);
