<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;
use App\Models\AnimalData;
use App\Models\Food;
use App\Models\Employee;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function showAllNames(Request $request)
    {
        $animalNames = Animal::pluck('animal_name');
        $employees = Employee::all();
        return view('animalNames', ['animalNames' => $animalNames, 'employees' => $employees]);
    }

    public function showAllEmployees(Request $request, $animal_id)
    {
        $employees = Employee::where('animal_id', $animal_id)->get();
        $foods = Food::all();
        return view('employees', ['employees' => $employees, 'foods' => $foods]);
    }


    public function showAllFoods(Request $request, $animal_id)
    {
        $foods = Food::where('animal_id', $animal_id)->get();
        return view('foods', ['foods' => $foods]);
    }


    public function showAll(Request $request)
    {
        $animalList = Animals::all();
        return view('animals',['animalList' => $animalList]);
   }


    public function showAnimalData(Request $request, $animalId)
    {

        $animal = Animals::findOrFail($animalId);
        $animalData = AnimalData::where('animal_id', $animalId)->get();

        return view('animalData', [
            'animal' => $animal,
            'animalData' => $animalData
        ]);
    }
}

