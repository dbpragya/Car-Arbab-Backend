<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarAuction extends Model
{
    use HasFactory;

    protected $fillable = ['auction_type_id','bid_start_price','estimated_repair_cost','estimated_market_value','buy_now_price','reserve_price','auction_lane','lot_number','auction_lane','auction_date','auction_time','chassis_perfect','gcc_specs','warranty_available','bank_loan_available','low_mileage','accident_free','brand_new_car','high_end_vehicle','no_air_bag','eligible_car_arbab_repair','limited_edition','car_play_android_auto','climate_control','sports_exhaust','keyless_entry','panoramic_sunroof','clean_title','ending_soon','rear_wheel_drive','front_wheel_drive','pick_up_by','service_cost','vehicle_insurance_price','delivery_price','buy_back_guarantee_cost'];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }   
    
}
