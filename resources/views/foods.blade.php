@extends('template')

@section('title', 'Food')

@section('content')
    <div class="container text-center">
        <div class="row mt-3 mb-3">
            <div class="col">
                <b>Food</b>
            </div>
        </div>
        @foreach($foods as $food)
            @include('components.foodsRow', ['food' => $food])
        @endforeach
    </div>
@endsection
