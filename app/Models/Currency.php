<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;
    
    public function carAuctions()
    {
        return $this->hasMany(CarAuction::class,'buy_now_curr','esti_rep_cost_curr','bid_strt_curr','service_cost_curr','veh_insurance_curr','delivery_curr','buy_back_guarantee_curr');
    }
    
    
     public function cars()
    {
        return $this->hasMany(Car::class);
    }
    
    
    
}
