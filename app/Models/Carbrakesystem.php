<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carbrakesystem extends Model
{
    use HasFactory;
    protected $fillable = ['car_id','front_left_manufac','front_left_date','front_left_rim_id','front_left_height_id','front_left_width_id','front_left_condition','front_right_manufac','front_right_date','front_right_rim_id','front_right_height_id','front_right_width_id','front_right_condition','rear_left_manufac','rear_left_date','rear_left_rim_id','rear_left_height_id','rear_left_width_id','rear_left_condition','rear_right_manufac','rear_right_date','rear_right_width_id', 'rear_right_height_id','rear_right_rim_id','rear_right_condition','spare_manufac','spare_date','spare_rim_id','spare_height_id','spare_width_id','spare_condition','front_left_brand','front_left_rim_condition','front_right_brand','front_right_rim_condition','rear_left_brand','rear_left_rim_condition','rear_right_brand','rear_right_rim_condition','spare_brand','spare_rim_condition'];
}
