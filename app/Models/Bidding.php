<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidding extends Model
{
 
    use HasFactory;
    protected $fillable = ['user_id','car_id','bid_price','type'];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
    
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id','id');
    }
    
    public function vehiclemake()
    {
        return $this->belongsTo(Vehiclemake::class, 'veh_car_make_id');
    }
    
}
