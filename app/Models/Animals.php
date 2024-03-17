<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    protected $table = "animals";

   public function data()
    {
      return $this->hasMany(AnimalData::class, 'animal_name');
    }

}
