<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarChassisPerfect extends Model
{
    use HasFactory;
    
    
    protected $fillable = ['car_id', 'xcord', 'ycord', 'image'];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
