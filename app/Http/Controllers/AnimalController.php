<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;
use App\Models\AnimalData;

class AnimalController extends Controller
{
    public function showAll(Request $request)
    {
        $animals = Animals::all();
        return view('animals', ['animalList' => $animals]);
    }

    public function showAnimalData(Request $request, $animalId)
    {

        $animal = Animals::find($animalId);
        $animalData = AnimalData::where('animal_id', $animalId)->get();

        return view('animalData', [
            'animal' => $animal,
            'animalData' => $animalData
        ]);
    }
}
