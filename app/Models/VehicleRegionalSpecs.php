<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleRegionalSpecs extends Model
{
    use HasFactory;

    public function cars()
    {
        return $this->hasMany(Car::class, 'vehicle_regional_spec');
    }
}
