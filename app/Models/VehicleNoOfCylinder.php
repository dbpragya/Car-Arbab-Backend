<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleNoOfCylinder extends Model
{
    use HasFactory;

    public function cars()
    {
        return $this->hasMany(Car::class, 'no_of_cylinder');
    }
}
