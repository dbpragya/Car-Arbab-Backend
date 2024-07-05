<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timezone extends Model
{
    use HasFactory;
    
   
  
     public function carAuctions()
    {
        return $this->hasMany(CarAuction::class, 'time_zone_id');
    }
    
    
}
