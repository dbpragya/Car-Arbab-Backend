<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','car_id','type','car_price','estimated_repair_cost','service_cost','vehicle_insurance_price','delivery_price','buy_back_guarantee_cost'];
   
    // public function car()
    // {
    //     return $this->belongsTo(Car::class);
    // }

    public function user()
    {
        return $this->belongsTo(Car::class,'user_id');
    }

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }

    public function carAuction()
    {
        return $this->belongsTo(CarAuction::class, 'car_id');
    }
}
