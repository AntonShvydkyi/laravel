@extends('template')

@section('title', 'Food')

@section('content')
    <div class="container text-center">
        <div class="row mt-3 mb-3">
            <div class="col">
                <b>Employees</b>
            </div>
        </div>
        @foreach($employees as $employee)
            @include('components.employeeRow', ['employee' => $employee])
        @endforeach
    </div>
@endsection
