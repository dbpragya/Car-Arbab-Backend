<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarMedia extends Model
{
    use HasFactory;
    protected $fillable = ['car_id','type','options','images'];

    
    public function cars()
    {
        return $this->belongsTo(Car::class,'car_id');
    }

}
