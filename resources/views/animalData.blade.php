@extends('template')

@section('title', 'List of animals data')

@section('content')
    <div class="container text-center">
        <div class="row mt-3 mb-3">
            <div class="col">
                <b>Animal name</b>
            </div>
            <div class="col">
                <b>Name of worker</b>
            </div>
        </div>
        @foreach($animalData as $data)

          @include('components.animalDataRow', ['data' => $data, 'animal' => $animal])
        @endforeach
    </div>
@endsection
