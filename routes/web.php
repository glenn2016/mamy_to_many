<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormationController;
use App\Http\Controllers\AppartementController;
use App\Http\Controllers\FormationAppartementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
})->name("login");

Route::resource('appartements',AppartementController::class);
Route::resource('formations',FormationController::class);
Route::resource('formation-appartements',FormationAppartementController::class);