<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleNoofKeys extends Model
{
    use HasFactory;

    public function cars()
    {
        return $this->hasMany(Car::class, 'veh_no_of_keys');
    }
    
}
