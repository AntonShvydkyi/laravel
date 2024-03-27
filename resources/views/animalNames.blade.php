@extends('template')

@section('title', 'Animals name')

@section('content')
    <div class="container text-center">
        <div class="row mt-3 mb-3">
            <div class="col">
                <b>Name</b>
            </div>
            <div class="col">
                <b>Link to worker</b>
            </div>
        </div>

        @foreach($animalNames as $animalName)
            @php
                $animal = App\Models\Animal::where('animal_name', $animalName)->first();
                $employees = App\Models\Employee::where('animal_id', $animal->id)->get();
            @endphp
            @include('components.animalsRow', ['animalName' => $animalName])

        @endforeach
    </div>
@endsection
