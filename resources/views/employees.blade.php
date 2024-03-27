@extends('template')

@section('title', 'Worker')

@section('content')
    <div class="container text-center">
        <div class="row mt-3 mb-3">
            <div class="col">
                <b>Worker</b>
            </div>
            <div class="col">
                <b>Link to animals food</b>
            </div>
        </div>
    @foreach($employees as $employee)
            @include('components.employeeRow', ['employee' => $employee])
        @endforeach
    </div>
@endsection
