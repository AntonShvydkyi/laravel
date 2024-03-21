@extends('template')

@section('title', 'Animals name')

@section('content')
    <div class="container text-center">
        <div class="row mt-3 mb-3">
            <div class="col">
                <b>Animal name</b>
            </div>
        </div>
        @foreach($animalNames as $animalName)
            @include('components.animalsRow', ['animalName' => $animalName])
        @endforeach
    </div>
@endsection
