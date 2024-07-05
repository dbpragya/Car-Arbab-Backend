<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    
    public function bidding()
    {
        return $this->hasMany(Bidding::class, 'car_id','id');
    }

    public function vehiclemake()
    {
        return $this->belongsTo(Vehiclemake::class, 'veh_car_make_id');
    }

    public function vehicleTransmission()
    {
        return $this->belongsTo(VehicleTransmission::class, 'vehicle_transmission_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function CarTitle()
    {
        return $this->belongsTo(CarTitle::class, 'car_title');
    }

    public function VehicleNoofKeys()
    {
        return $this->belongsTo(VehicleNoofKeys::class, 'veh_no_of_keys');
    }

    public function CarColor()
    {
        return $this->belongsTo(CarColor::class, 'car_color');
    }

    public function carMedia()
    {
        return $this->hasMany(CarMedia::class, 'car_id');
    }
    
     public function carAuction()
    {
        return $this->hasOne(CarAuction::class);
    }
    
    public function driveType()
    {
        return $this->belongsTo(DriveType::class, 'drive_type');
    }

    public function AuctionType()
    {
        return $this->belongsTo(AuctionType::class, 'auction_type');
    }

    public function vehicleregionalspec()
    {
        return $this->belongsTo(VehicleRegionalSpecs::class, 'vehicle_regional_spec');
    }

    public function VehicleCondition()
    {
        return $this->belongsTo(VehicleCondition::class, 'vehicle_condition_id');
    }
    
    public function VehicleType()
    {
        return $this->belongsTo(VehicleType::class, 'vehicle_type');
    }

    public function vehicleFuelType()
    {
        return $this->belongsTo(Vehicle_FuelType::class, 'veh_fueltype_id');
    }

    public function vehicleNoOfCylinder()
    {
        return $this->belongsTo(VehicleNoOfCylinder::class, 'no_of_cylinder');
    }
    
    public function carArbabExtendedWarranty()
    {
        return $this->belongsTo(CarArbabExtendedWarranty::class, 'car_arbab_extended_warranty');
    }

    public function carArbabRepair()
    {
        return $this->belongsTo(CarArbabRepair::class, 'car_arbab_repairs');
    }

    public function vehicleInterior()
    {
        return $this->belongsTo(VehicleInterior::class, 'vehicle_interior');
    }

    public function vehicleBodyType()
    {
        return $this->belongsTo(VehicleBodyType::class, 'body_type');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    
    public function chassisPerfect()
    {
        return $this->hasMany(CarChassisPerfect::class);
    }
    
    protected $fillable= [

        'phone_code',
        'seller_phone_no',
        'seller_type_id',
        'user_id',
        'image',
        'cus_first_name',
        'cus_last_name',
        'cus_date',
        'cus_time',
        'veh_car_make_id',
        'veh_car_model',
        'veh_year',
        'no_of_cylinder',
        'vehicle_engine_size',
        'vehicle_engine_size_unit',
        'car_title',
        'car_arbab_repairs',
        'car_arbab_extended_warranty',
        'car_color',
        'vehicle_type',
        'vehicle_highlights',
        'primary_damage',
        'unique_stickers',
        'drive_type',
        'vehicle_regional_spec',
        'car_arbab_extended_warranty',
        'car_color',
        'veh_mileage',
        'vehicle_transmission_id',
        'veh_fueltype_id',
        'vehicle_interior', 
        'veh_vin_number',
        'veh_no_of_keys',
        'trimdata',
        'vehicle_apretire',
        'title',
        'signatureData',
        'repair_cost',
        'buy_now',
        'vehicle_condition_id',
        'passenger',
        'body_type',
    ];

}
