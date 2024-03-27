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
    [AnimalController::class, 'showAll']);


Route::get(
    'animals/{animalId}',
    [AnimalController::class, 'showAnimalData'])->name('animal.data');


Route::get('animalNames',
    [AnimalController::class, 'showAllNames']);



Route::get('employees/{animal_id}',
    [AnimalController::class, 'showAllEmployees'])->name('employees_data');



Route::get(
    'food/{animal_id}',
    [AnimalController::class, 'showAllFoods'])->name('foods_data');
