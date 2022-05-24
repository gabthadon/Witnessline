<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomilyController;
use App\Http\Controllers\ArticlesController;
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

Route::get('/', [HomeController::class, 'show']);

Route::get('/sunday/homily', [HomilyController::class, 'sunday']);

Route::get('/weekday/homily', [HomilyController::class, 'weekday']);

Route::get('/know/your/faith', [ArticlesController::class, 'knowYourFaith']);

Route::get('/poems', [ArticlesController::class, 'poem']);

Route::get('/about', function(){
    return view("about");
});

Route::get('/donate', function(){
    return view("donate");
});


Route::get('/post/{slug}/{id}', [HomeController::class, 'read']);

Route::get('/homily', [HomeController::class, 'find']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
