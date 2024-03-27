<div class="row">
    <div class="col">
        {{$animalName}}
    </div>
    <div class="col">
        @foreach($employees as $employee)
            <a href="{{ route('employees_data', ['animal_id' => $employee->animal_id]) }}">Посилання</a>
        @endforeach
    </div>
</div>
