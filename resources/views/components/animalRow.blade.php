<div class="row">
    <div class="col">
        {{$animal->animal_name}}
    </div>
    <div class="col">
        {{$animal->type_of_food}}
    </div>
    <div class="col">
        <a href="{{ route('animal.data', ['animalId' => $animal->id]) }}">Посилання</a>

    </div>
</div>
