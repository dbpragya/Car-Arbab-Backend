<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarArbabRepair extends Model
{
    use HasFactory;
    
     public function cars()
    {
        return $this->hasMany(Car::class, 'car_arbab_repairs');
    }
}
