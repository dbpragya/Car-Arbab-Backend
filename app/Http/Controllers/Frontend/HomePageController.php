<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarMedia;
use App\Models\DriveType;
use App\Models\Vehiclemake;
use App\Models\AuctionType;
use App\Models\VehicleType;
use App\Models\Vehicle_FuelType;
use App\Models\VehicleCondition;
use App\Models\VehicleNoOfCylinder;
use App\Models\VehicleTransmission;
use App\Models\VehicleRegionalSpecs;
use App\Models\VehicleBodyType;
use App\Models\CarAuction;
use App\Models\Bidding;
use Carbon\Carbon;
use DB;

class HomePageController extends Controller
{
    //----------------------------------------
    //Home page
    //----------------------------------------
    public function Homepage(){
    
        // $cars = Car::with('carMedia','carAuction')
        // ->get();
        $cars = Car::with('carMedia', 'carAuction')
        ->whereHas('carAuction', function ($query) {
            $query->where('status', 'active');
        })->get();
     
        $carmakes = Vehiclemake::all();

        //get unique carmodels dropdown
        $carmodels = $cars->pluck('veh_car_model')->unique();

        //get unique carmodels dropdown
        $caryears = $cars->pluck('veh_year')->unique();


        $vehiclebodytype = VehicleBodyType::all();
        return view('frontend.index',compact('cars','caryears','carmakes','vehiclebodytype','carmodels'));
    }

    public function Aboutus(){
        
        return view('frontend.aboutus');
    }

   
    public function calender(){
        
        return view('frontend.calender');
    }

    //Home : slider filter
    public function Filterslider(Request $request){

        $checkedNames = $request->input('checked_names');
    
        $query = CarAuction::query()->with('car.carMedia','car','car.vehicleregionalspec','car.vehicletransmission','car.vehiclenoofcylinder','car.vehiclemake');
        if ($checkedNames !== null) {
            foreach ($checkedNames as $name) {
                $query->where($name, 1);
            }
        }
        $filteredSlider = $query->get();
        return response()->json(['filteredSlider' => $filteredSlider]);
    }

    //Home: Select filtered
    public function Filterselect(Request $request){

        $selectedId = $request->input('selected_id'); 
        $selectedValue = $request->input('selected_value');  
        $selectedField = $request->input('selected_field'); 

        $carsQuery = Car::query();

        if ($selectedValue && Car::where($selectedField, $selectedValue)->exists()) {

            $carsQuery->where($selectedField, $selectedValue);
        } else {
            $carsQuery->where($selectedField, $selectedId);
        }

        $filtereddropdown = $carsQuery->with('carmedia', 'carauction', 'vehicletype', 'vehiclecondition', 'vehiclemake', 'vehiclefueltype', 'drivetype', 'auctiontype', 'vehicletransmission', 'vehiclenoofcylinder', 'vehicleregionalspec')->get();
  
        return response()->json(['filtereddropdown' => $filtereddropdown]);
    }    
    //-----------------------------------------------
    //List page
    //-----------------------------------------------


    //details page
    public function Details($id){
        
        $cardetails = Car::with('carMedia','carAuction')->findOrFail($id);
        $cardetails->increment('views_count');

        // counts for Engine
        if($cardetails){
            $array = ['engine_upper_cover', 'engine_shield_cover', 'engine_mounts', 'bonnet_hinge_holder', 'turbo_preference', 'fender_liners', 'drive_belt_pulleys', 'engine_idle', 'engine_oil_filler_cap', 'radiator', 'engine_oil_leaks', 'engine_oil_condition', 'coolant_condition', 'coolant_cap', 'hoses_pipes', 'exhaust_system', 'visible_rust'];
            $countsengine = [
                'Pass' => 0,
                'Imperfection' => 0,
            ];
            $imperfectionImagesEngine = [];
            $imperfectionColumnsEngine = [];
        
            foreach ($array as $column) {
                $value = $cardetails->{$column};
                if ($value === 'Pass') {
                    $countsengine['Pass']++;
                } else {
                    $countsengine['Imperfection']++;
                    $imperfectionColumnsEngine[] = $column; 
                }
            }
            foreach($imperfectionColumnsEngine as $column) {
                $images = $cardetails->carMedia()->where('type', $column)->pluck('images')->toArray();
                if (!empty($images)) {
                    $imperfectionImagesEngine[$column] = array_map('asset', $images); 
                        
                }
            }
        }
    

        // Counts for Transmissions
        if($cardetails){
            $array = ['fluid_level_condition','transmission_fluid_leaks','gear_selector'];
            $countstransmission = [
                'Pass' => 0,
                'Imperfection' => 0,
            ];
            $imperfectionImagesTransmission = [];
            $imperfectionColumnTransmission = [];
            foreach ($array as $column) {
                $value = $cardetails->{$column};
                if ($value === 'Pass') {
                    $countstransmission['Pass']++;
                } else {
                    $countstransmission['Imperfection']++;
                    $imperfectionColumnTransmission[] = $column; 
                }
            }
            foreach($imperfectionColumnTransmission as $column) {
                $images = $cardetails->carMedia()->where('type', $column)->pluck('images')->toArray();
                if (!empty($images)) {
                    $imperfectionImagesTransmission[$column] = array_map('asset', $images); 
                        
                }
            }
        }

        // counts for Transmissions
        if($cardetails){
            $array = ['front_suspension','rear_suspension'];
                $countsbrakesystem = [
                'Pass' => 0,
                'Imperfection' => 0,
                ];
                $imperfectionImagesBrakesystem = [];
                $imperfectionColumnBrakesystem = [];
            
                foreach ($array as $column) {
                    $value = $cardetails->{$column};
                    if ($value === 'Pass') {
                    $countsbrakesystem['Pass']++;
                    } else {
                    $countsbrakesystem['Imperfection']++;
                    $imperfectionColumnBrakesystem[] = $column; 
                    }
                }

                foreach($imperfectionColumnBrakesystem as $column) {
                $images = $cardetails->carMedia()->where('type', $column)->pluck('images')->toArray();
                if (!empty($images)) 
                {
                    $imperfectionImagesBrakesystem[$column] = array_map('asset', $images);     
                }
            }
        }
        // counts for electrical system
        if($cardetails){
            $array = ['key_remote','entertainment_system','windows_operation','seats_adjustment','door_lock_unlock','ac_control_cooling','center_console_buttons','cameras','gauges','rear_view_side_mirror_elec','ac_grilles','starting_ignition_system','brake_lights','headlights','fog_lights','reverse_lights','high_beams','no_plates_lights','indicators_hazards','wipers','soft_closing_doors','sunroof_moonroof','interior_lights','cruise_control','horn','parking_sensors'];

            $countsElectricalsystem = [
                'Pass' => 0,
                'Imperfection' => 0,
                ];
            $imperfectionImagesElectricalsystem = [];
            $imperfectionColumnElectricalsystem = [];
            
            foreach ($array as $column) {
                $value = $cardetails->{$column};
                if ($value === 'Pass') {
                    $countsElectricalsystem['Pass']++;
                } else {
                    $countsElectricalsystem['Imperfection']++;
                    $imperfectionColumnElectricalsystem[] = $column; 
                }
            }

            foreach($imperfectionColumnElectricalsystem as $column) {
                $images = $cardetails->carMedia()->where('type', $column)->pluck('images')->toArray();
                if (!empty($images)) {
                    $imperfectionImagesElectricalsystem[$column] = array_map('asset', $images);     
                }
            }
        }
        // counts for interior score
        if($cardetails){

            $array = ['roof_lining','rear_view_mirror','steering_wheel_upholstery','seats_upholstery','gear_lever','trunk_lining','amrest_side_pockets','dashboard','floor_mates','doors','front_windscreen','rear_windscreen'];
           
            $countsInterior = [
                'Pass' => 0,
                'Imperfection' => 0,
                ];
            $imperfectionImagesInterior= [];
            $imperfectionColumnInterior = [];
            
            foreach ($array as $column) {
                $value = $cardetails->{$column};
                if ($value === 'Pass') {
                    $countsInterior['Pass']++;
                } else {
                    $countsInterior['Imperfection']++;
                    $imperfectionColumnInterior[] = $column; 
                }
            }

            foreach($imperfectionColumnInterior as $column) {
                $images = $cardetails->carMedia()->where('type', $column)->pluck('images')->toArray();
                if (!empty($images)) {
                    $imperfectionImagesInterior[$column] = array_map('asset', $images);     
                }
            }
        }

        //related listing section
        $carModel = $cardetails->veh_car_model;
        $relatedListings = Car::where('veh_car_model', $carModel)->get();

        return view('frontend.details', compact('imperfectionImagesInterior','imperfectionColumnInterior','countsInterior','countsElectricalsystem','imperfectionColumnElectricalsystem','imperfectionImagesElectricalsystem','countsbrakesystem','imperfectionColumnBrakesystem','imperfectionImagesBrakesystem','countsengine','imperfectionImagesEngine','imperfectionColumnsEngine','imperfectionColumnTransmission','countstransmission','imperfectionImagesTransmission','cardetails','relatedListings'));
    }
    
    //store car id
    public function StoreBid(Request $request){
        
        $hidden_bid_price = $request->input('hidden_bid_price');
        $car_id = $request->input('car_id');
        $user_id = $request->input('user_id');
        $type='normal bid';
        
        CarAuction::where('car_id', $car_id)->update([

            'current_bid_price' => $hidden_bid_price,
            'no_of_bids' => DB::raw('no_of_bids + 1'),
        ]);

        $biddings = Bidding::updateOrCreate([
            'user_id' => $user_id,
            'car_id'=>$car_id,
            'bid_price'=>$hidden_bid_price,
            'type'=>$type,
        ]);

       
        return response()->json(['message' => 'Bid saved successfully.'], 200);
    }

    public function GetCarData(Request $request){
        
        $car_id = $request->input('car_id');
        $carData = CarAuction::where('car_id', $car_id)->first();
    
        return response()->json($carData);
    }

  

    public function Livebidding($id){

        $carlivebidding = Car::with('carMedia','carAuction')->findOrFail($id);
        // dd($carlivebidding);
        return view('frontend.livebidding',compact('carlivebidding'));

    }
    public function updateCarStatus(Request $request){

        $car_id = $request->input('car_id');

        // dd($car_id);
        Car::where('id', $car_id)->update([

            'status' => 'inactive',
        ]);
        return response()->json(['message' => 'status updated successfully.'], 200);
    }

    
    // public function LiveauctionStickerFilter(Request $request){
    
    //     $checkedNames = $request->input('checked_names');
    //     $query = CarAuction::query()->with('car.carMedia','car','car.vehicleregionalspec','car.vehicletransmission','car.vehiclenoofcylinder','car.vehiclemake');
    //     foreach ($checkedNames as $name) {
            
    //         $query->where($name, 1);
    //     }
    //     $filteredSticker = $query->get();

    //     return response()->json(['filteredSticker' => $filteredSticker]);
    // }

   
}

