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
        return view('animalNames', ['animalNames' => $animalNames]);

    }

    public function showAllFoods(Request $request)
    {
        $foods = Food::pluck('type_of_food');
        //dd($foods->toArray());
       return view('foods', ['foods' => $foods]);
    }

    public function showAllEmployees(Request $request)
    {
        $employees = Employee::pluck('name_of_worker');
        //dd($employees->toArray());
        return view('employee', ['employees' => $employees]);
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

