@extends('template')

@section('title', 'Zoo')

@section('content')
    <div class="container text-center">
        <div class="row mt-3 mb-3">
            <div class="col">
                <b>Animal name</b>
            </div>
            <div class="col">
                <b>Type of food</b>
            </div>
            <div class="col">
                <b>Link to data</b>
            </div>
        </div>
        @foreach($animalList as $animal)
            @include('components.animalRow', ['animal' => $animal])
        @endforeach
    </div>
@endsection
