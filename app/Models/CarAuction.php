<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarAuction extends Model
{
    use HasFactory;

    protected $fillable = ['auction_type_id','bid_start_price','estimated_repair_cost','bid_strt_curr','time_zone_id','esti_market_curr','esti_rep_cost_curr','estimated_market_value','buy_now_price','buy_now_curr','reserve_price','no_of_bids','reserve_curr','lot_number','auction_date','auction_time','chassis_perfect','gcc_specs','warranty_available','bank_loan_available','low_mileage','accident_free','brand_new_car','high_end_vehicle','no_air_bag','eligible_car_arbab_repair','limited_edition','car_play_android_auto','climate_control','sports_exhaust','keyless_entry','panoramic_sunroof','clean_title','ending_soon','rear_wheel_drive','front_wheel_drive','pick_up_by','service_cost','service_cost_curr','vehicle_insurance_price','veh_insurance_curr','delivery_price','delivery_curr','buy_back_guarantee_cost','buy_back_guarantee_curr','warranty_period','auction_end_date','auction_end_time','buy_back_guarantee_month','per_of_depreciation'];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }   
    
     public function timezone()
    {
        return $this->belongsTo(Timezone::class,'time_zone_id');
    }   
    
    // for getting crrencies
    public function bidstartcurrency()
    {
        return $this->belongsTo(Currency::class, 'bid_strt_curr');
    }

    public function buyCurrency()
    {
        return $this->belongsTo(Currency::class, 'buy_now_curr');
    }
    
    public function RepairCostCurrency()
    {
        return $this->belongsTo(Currency::class, 'esti_rep_cost_curr');
    }
    
    public function ServiceCostCurrency()
    {
        return $this->belongsTo(Currency::class, 'service_cost_curr');
    }
    
    public function InsuranceCurrency()
    {
        return $this->belongsTo(Currency::class, 'veh_insurance_curr');
    }
    
    public function DeliverCurrency()
    {
        return $this->belongsTo(Currency::class, 'delivery_curr');
    }
    
    public function BuyBackCurrency()
    {
        return $this->belongsTo(Currency::class, 'buy_back_guarantee_curr');
    }
}
