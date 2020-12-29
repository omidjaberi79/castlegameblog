<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    $name = "Omid";
//    return view('welcome', compact('name'));
//});
Route::get('/' , function () {
    return view('index');
});
Route::get('/about' , function () {
    return view('about');
});
Route::get('/contact' , function () {
    return view('contact');
});

//Route::prefix('admin')->group(function () {
//   Route::get('category' , function () {
//      return "admin category";
//    });
//    Route::get('profile' , function () {
//        return "admin profile";
//    });
//    Route::get('panel' , function () {
//        return "admin panel";
//    });
//    Route::get('archive' , function () {
//        return "admin archive";
//    });
//});
//Route::get('/shop/{id}' , function ($id) {
//    return $id;
//});
