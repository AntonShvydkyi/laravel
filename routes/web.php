<?php

use App\Http\Controllers\AnimalController;
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

Route::get('/', function () {
    return view('animals');
});

Route::get(
    'animals',
    [\App\Http\Controllers\AnimalController::class, 'showAll']
);

Route::get(
    'animals/{animalId}',
    [\App\Http\Controllers\AnimalController::class, 'showAnimalData']
)->name('animal.data');
