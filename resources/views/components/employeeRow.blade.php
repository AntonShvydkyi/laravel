<div class="row">
    <div class="col">
        {{ $employee->name_of_worker }}
    </div>
    <div class="col">
        <a href="{{ route('foods_data', ['animal_id' => $employee->animal_id]) }}">Посилання</a>

    </div>
</div>
