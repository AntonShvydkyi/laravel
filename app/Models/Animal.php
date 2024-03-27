<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = "animals";

    // Опишіть зв'язок між Animal та Employee
    public function employees()
    {
        return $this->hasMany(Employee::class, 'animal_id');
    }
}

