<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\SellerType;
use App\Models\Vehiclemake;
use App\Models\VehicleNoOfCylinder;
use App\Models\VehicleRegionalSpecs;
use App\Models\VehicleTransmission;
use App\Models\Vehicle_FuelType;
use App\Models\VehicleInterior;
use App\Models\VehicleNoofKeys; 
use App\Models\VehicleSpireTire;
use App\Models\Carbrakesystem;
use App\Models\AuctionType;
use App\Models\CarTitle;
use App\Models\CarArbabRepair;
use App\Models\CarArbabExtendedWarranty;
use App\Models\CarColor;
use App\Models\CarMedia;
use App\Models\VehicleType;
use App\Models\VehicleCondition;
use App\Models\DriveType;
use App\Models\TyreHeight;
use App\Models\TyreRim;
use App\Models\TyreWeight;
use App\Models\VehicleBodyType;
use App\Models\CarAuction;
use Illuminate\Support\Str;
use App\Models\Car;
use App\Models\User;
use App\Models\Currency;
use App\Models\Timezone;
use App\Models\Booking;
use App\Models\CarChassisPerfect;
use App\Models\Year;
use Carbon\Carbon;

class CarController extends Controller
{
    //Addcar
    public function Addcar(Request $request , $action = null){

        if ($action === 'new') {
            // If the action is to add a new car, clear any existing session 
            session()->forget('car_id');
        }
        if($request->has('car_id')) {
            $carId = $request->input('car_id');
            session(['car_id' => $carId]); 
        }

        $carId = session('car_id');

        $sellertype = SellerType::all();
        $vehiclemake = Vehiclemake::all();
        $vehiclenoofcylinder = VehicleNoOfCylinder::all();
        $vehicleregionalspec = VehicleRegionalSpecs::all();
        $vehicletransmission = VehicleTransmission::all();
        $fueltype = Vehicle_FuelType::all();
        $vehicleInterior = VehicleInterior::all();
        $vehiclenoofkeys =  VehicleNoofKeys::all();
        $vehicleSpireTire =VehicleSpireTire::all();
        $auctiontype = AuctionType::all();
        $cartitles = CarTitle::all();
        $cararbabrepairs = CarArbabRepair::all();
        $caextendedwaraanty = CarArbabExtendedWarranty::all();
        $carcolors = CarColor::all();
        $vehicletypes = VehicleType::all();
        $drivetypes = DriveType::all();
        $tyreheight = TyreHeight::all();
        $tyrerim = TyreRim::all();
        $tyreweight = TyreWeight::all();
        $vehiclecondition = VehicleCondition::all();
        $vehiclebodytype = VehicleBodyType::all();
        $years = Year::all();
    
        $car = null;
        if($carId){
            $car= Car::Where('id',$carId)->first();
        }
        $carmedia = null;
        if($carId){
            $carmedia = CarMedia::where('car_id',$carId)->get();
        }
        $carbrakesystem = null;
        if($carId){
            $carbrakesystem = Carbrakesystem::where('car_id',$carId)->first();
        }
      
        return view('admin.1car_add',compact('years','vehiclebodytype','vehiclecondition','tyreheight','tyrerim','tyreweight','vehicletypes','drivetypes','carcolors','caextendedwaraanty','cartitles','cararbabrepairs','auctiontype','carbrakesystem','carmedia','car','sellertype','vehiclemake','vehiclenoofcylinder','vehicleregionalspec','vehicletransmission','fueltype','vehicleInterior','vehiclenoofkeys','vehicleSpireTire'));
    }

    //Storecar
    public function Storecar(Request $request){

         $request->validate([
             
          'seller_phone_no' => 'nullable|regex:/^\d{8,10}$/',
            'cus_first_name' => 'nullable|string|regex:/^[^\d]+$/|max:255',
            'cus_last_name' => 'nullable|string|regex:/^[^\d]+$/|max:255',
            'cus_date' => 'nullable|date',
            'veh_car_model' => 'nullable|regex:/^[A-Za-z0-9\s]+$/',
            'veh_year' => 'nullable|date_format:Y',
            'veh_mileage' => 'nullable|numeric',
            'vehicle_engine_size'=>'nullable|numeric',
            'veh_vin_number' => 'nullable|alpha_num|size:17',
            'signatureData' => 'nullable',
        ],
        [ 
            'seller_phone_no.regex' => 'The seller phone number must be 8 to 12 digits long.',
            'cus_first_name.string' => 'The field must be a string.', 
            'cus_first_name.regex' => 'The field must not contain numeric characters.',
            'cus_last_name.string' => 'The field must be a string.',
            'cus_last_name.regex' => 'The field must not contain numeric characters.',
            'cus_date.date' => 'The date must be in the format DD-MM-YYYY.',        
            'veh_car_model.regex' => 'The model must be alphanumeric.',
            'veh_year.date_format'=>'The date must be in the format YYYY',
            'veh_mileage.numeric'=>'The mileage must be a numeric value.',
            'veh_vin_number.alpha_num' => 'The VIN number must be alphanumeric.',
            'veh_vin_number.size' => 'The VIN number must be exactly 17 characters long.',
            'vehicle_engine_size.numeric'=>'The engine size must be a numeric value.',
                       
        ]);
          
        $userId = Auth::id();
        // $data['user_id'] = $userId;
        
        //get current car_id in session
        $carId = session('car_id');

        $signatureData = $request->input('signatureData');

        if (!empty($signatureData)) {
            $base64Image = $request->signatureData;
            $base64Image = str_replace('data:image/png;base64,', '', $base64Image); 
            $imageData = base64_decode($base64Image);
        
            $filename = 'signature_' . uniqid() . '.png';
        
            $path = public_path('images/signature/' . $filename);
            file_put_contents($path, $imageData);
        }
     
        // if (!empty($request->signatureData)) {
        //     dd('Signature data is not empty');
        // } else {
        //     dd('Signature data is empty');
        // }
        
        if($carId){
            $existingCar = Car::find($carId);
            if ($existingCar) {

                if(!empty($filename)){
                   
                    $existingCar->signatureData = 'images/signature/' . $filename;
                }

                $primary_damage = $request->input('primary_damage');
                if (!empty($primary_damage)) {
                    $existingCar->primary_damage = json_encode($primary_damage);
                }
                
                $existingCar->update([
                    
                    // 'country_code' => $request->input('country_code'),
                    'seller_phone_no' => $request->input('seller_phone_no'),
                    'seller_type_id' => $request->input('seller_type_id'),
                    'cus_first_name' => $request->input('cus_first_name'),
                    'cus_last_name' => $request->input('cus_last_name'),
                    'cus_date' => $request->input('cus_date'),
                    'cus_time' => $request->input('cus_time'),
                    'veh_car_make_id' => $request->input('veh_car_make_id'),
                    'veh_car_model' => $request->input('veh_car_model'),
                    'veh_year' => $request->input('veh_year'),
                    'veh_mileage' => $request->input('veh_mileage'),
                    'veh_fueltype_id' => $request->input('veh_fueltype_id'),
                    'vehicle_regional_spec' => $request->input('vehicle_regional_spec'),
                    'vehicle_transmission_id' => $request->input('vehicle_transmission_id'),
                    'no_of_cylinder' => $request->input('no_of_cylinder'),
                    'vehicle_engine_size' => $request->input('vehicle_engine_size'),
                    'vehicle_engine_size_unit' => $request->input('vehicle_engine_size_unit'),
                    'car_title' => $request->input('car_title'),
                    'car_arbab_repairs' => $request->input('car_arbab_repairs'),
                    'car_arbab_extended_warranty' => $request->input('car_arbab_extended_warranty'),
                    'car_color' => $request->input('car_color'),
                    'vehicle_type' => $request->input('vehicle_type'),
                    'drive_type' => $request->input('drive_type'),
                    'veh_no_of_keys' => $request->input('veh_no_of_keys'),
                    'vehicle_apretire' => $request->input('vehicle_apretire'),
                    'vehicle_interior' => $request->input('vehicle_interior'),
                    'veh_vin_number' => $request->input('veh_vin_number'),
                    'trimdata' => $request->input('trimdata'),
                    'vehicle_highlights' => $request->input('vehicle_highlights'),
                
                    'title' => $request->input('title'),
                    'vehicle_condition_id' => $request->input('vehicle_condition_id'),
                    'passenger' => $request->input('passenger'),
                    'body_type' => $request->input('body_type'),
                ]);
            }   
        } else {
            $car = new Car();
            $car->user_id = $userId;
            $car->phone_code = $request->input('phone_code');
            $car->seller_phone_no = $request->input('seller_phone_no');
            $car->seller_type_id = $request->input('seller_type_id');
            $car->cus_first_name = $request->input('cus_first_name');
            $car->cus_last_name = $request->input('cus_last_name');
            $car->cus_date = $request->input('cus_date');
            $car->cus_time = $request->input('cus_time');
            $car->veh_car_make_id = $request->input('veh_car_make_id');
            $car->veh_car_model = $request->input('veh_car_model');
            $car->veh_year = $request->input('veh_year');
            $car->veh_mileage = $request->input('veh_mileage');
            $car->veh_fueltype_id = $request->input('veh_fueltype_id');
            $car->vehicle_regional_spec = $request->input('vehicle_regional_spec');
            $car->vehicle_transmission_id = $request->input('vehicle_transmission_id');
            $car->no_of_cylinder = $request->input('no_of_cylinder');
            $car->vehicle_engine_size = $request->input('vehicle_engine_size');
            $car->vehicle_engine_size_unit = $request->input('vehicle_engine_size_unit');
            $car->car_title = $request->input('car_title');
            $car->car_arbab_repairs = $request->input('car_arbab_repairs');
            $car->car_arbab_extended_warranty = $request->input('car_arbab_extended_warranty');
            $car->car_color = $request->input('car_color');
            $car->vehicle_type = $request->input('vehicle_type');
            $car->drive_type = $request->input('drive_type');
            $car->veh_no_of_keys = $request->input('veh_no_of_keys');
            $car->vehicle_apretire = $request->input('vehicle_apretire');
            $car->vehicle_interior = $request->input('vehicle_interior');
            $car->veh_vin_number = $request->input('veh_vin_number');
            $car->trimdata = $request->input('trimdata');
            $car->vehicle_highlights = $request->input('vehicle_highlights');
            $car->title = $request->input('title');
            $car->vehicle_condition_id = $request->input('vehicle_condition_id');
            $car->passenger = $request->input('passenger');
            $car->body_type = $request->input('body_type');
          
            $primary_damage = $request->input('primary_damage');
            
            if (!empty($primary_damage)) {
                $car->primary_damage = json_encode($primary_damage);
            }

            if(!empty($filename)){
            $car->signatureData = 'images/signature/' . $filename;
            }
            
            $car->save();
            $carId = $car->id;
            session(['car_id' => $carId]);
        }

        // for img uploading in carmedia tbl
        $imageTypes = [
            'section_title_image_form1' => 'image',
            'section_title_thmnail' => 'thmnail_image'
        ];  

        foreach ($imageTypes as $sectionTitle => $imageField) {
                
            if ($request->hasFile($imageField)) {
                $type = str_replace('section_title_', '', $sectionTitle);
                $existingCarMedia = CarMedia::where('car_id', $carId)->where('type', $type)->first();

                $imagePaths = [];
                foreach ($request->file($imageField) as $image) {
                    $newImageName = "{$type}_image_" . uniqid() . '.' . $image->getClientOriginalExtension(); 
                    $image->move(public_path("images/{$type}_images"), $newImageName);
                    $imagePaths[] = "images/{$type}_images/{$newImageName}";
                }
        
                // if ($existingCarMedia) {
                //     $existingImages = explode(',', $existingCarMedia->images);
                //     $updatedImages = array_merge($existingImages, $imagePaths);
                //     $existingCarMedia->update(['images' => implode(',', $updatedImages)]);
                // } else {
                     if ($existingCarMedia) {
                        $existingImages = explode(',', $existingCarMedia->images);
                        if (!empty($existingImages[0])) {
                            // Add a comma if there are existing images
                            $updatedImages = array_merge($existingImages, $imagePaths);
                            $existingCarMedia->update(['images' => implode(',', $updatedImages)]);
                        } else {
                            // No comma needed if there are no existing images
                            $existingCarMedia->update(['images' => implode(',', $imagePaths)]);
                        }
                    } else {
                    
                    CarMedia::create([
                        'car_id' => $carId,
                        'type' => $type,
                        'images' => implode(',', $imagePaths),
                    ]);
                }
             }
        }
        // return redirect()->route('admin.addcar')->with('success1', "Car added successfully");
        if(auth()->check()) {
            if(auth()->user()->type == 'admin') {
                return redirect()->route('admin.addcar')->with('success1', "Car form 1 added successfully");
            } elseif(auth()->user()->type == 'inspector') {
                return redirect()->route('inspector.addcar')->with('success1', "Car form 1 added successfully");
            }
        } 
    }
    
    //storecar2
    public function Storecar2(Request $request){

        $carId = session('car_id');
        Car::where('id', $carId)->update([

            'engine_upper_cover' => $request->engine_upper_cover ,
            'engine_upper_cover_other'=>$request->engine_upper_cover_other,

            'engine_shield_cover'=>$request->engine_shield_cover,
            'engine_shield_cover_other'=>$request->engine_shield_cover_other,

            'engine_mounts'=>$request->engine_mounts,
            'engine_mounts_other'=>$request->engine_mounts_other,

            'bonnet_hinge_holder'=>$request->bonnet_hinge_holder,
            'bonnet_hinge_holder_other'=>$request->bonnet_hinge_holder_other,

            'turbo_preference'=>$request->turbo_preference,
            'turbo_preference_other'=>$request->turbo_preference_other,

            'fender_liners'=>$request->fender_liners,
            'fender_liners_other'=>$request->fender_liners_other,

            'drive_belt_pulleys'=>$request->drive_belt_pulleys,
            'drive_belt_pulleys_other'=>$request->drive_belt_pulleys_other, 

            'engine_idle'=>$request->engine_idle,
            'engine_idle_other'=>$request->engine_idle_other, 
         
            'engine_oil_filler_cap'=>$request->engine_oil_filler_cap,
            'engine_oil_filler_cap_other'=>$request->engine_oil_filler_cap_other, 

            'radiator'=>$request->radiator,
            'radiator_other'=>$request->radiator_other, 

            'engine_oil_leaks'=>$request->engine_oil_leaks,
            'engine_oil_leaks_other'=>$request->engine_oil_leaks_other, 

            'engine_oil_condition'=>$request->engine_oil_condition,
            'engine_oil_condition_other'=>$request->engine_oil_condition_other, 
        
            'coolant_condition'=>$request->coolant_condition,
            'coolant_condition_other'=>$request->coolant_condition_other, 
         
            'coolant_cap'=>$request->coolant_cap,
            'coolant_cap_other'=>$request->coolant_cap_other, 

            'hoses_pipes'=>$request->hoses_pipes,
            'hoses_pipes_other'=>$request->hoses_pipes_other, 
            
            'exhaust_system'=>$request->exhaust_system,
            'exhaust_system_other'=>$request->exhaust_system_other, 

            'visible_rust'=>$request->visible_rust,
            'visible_rust_other'=>$request->visible_rust_other, 
        ]);
        $imageTypes = [
            'section_title_engine_upper_cover' => 'engine_upper_cover_images',
            'section_title_engine_shield_cover' => 'engine_shield_cover_images',
            'section_title_engine_mounts' => 'engine_mounts_images',
            'section_title_bonnet_hinge_holder' => 'bonnet_hinge_holder_images',
            'section_title_turbo_preference' => 'turbo_preference_images',
            'section_title_fender_liners' => 'fender_liners_images',
            'section_title_drive_belt_pulleys' => 'drive_belt_pulleys_images',
            'section_title_engine_oil_filler_cap' => 'engine_oil_filler_cap_images',
            'section_title_radiator' => 'radiator_images',
            'section_title_engine_oil_leaks' => 'engine_oil_leaks_images',
            'section_title_engine_oil_condition' => 'engine_oil_condition_images',
            'section_title_coolant_condition' => 'coolant_condition_images',         
            'section_title_coolant_cap' => 'coolant_cap_images',
            'section_title_hoses_pipes' => 'hoses_pipes_images',
            'section_title_exhaust_system' => 'exhaust_system_images',
            'section_title_visible_rust' => 'visible_rust_images',
        ];
        foreach ($imageTypes as $sectionTitle => $imageField) {
            if ($request->hasFile($imageField)) {
               
                $type = str_replace('section_title_', '', $sectionTitle);
                $existingCarMedia = CarMedia::where('car_id', $carId)->where('type', $type)->first();
                $imagePaths = [];
                foreach ($request->file($imageField) as $image) {
                    $newImageName = "{$type}_image_" . uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path("images/{$type}_images"), $newImageName);
                    $imagePaths[] = "images/{$type}_images/{$newImageName}";
                }
                if ($existingCarMedia) {
                   
                    $existingImages = explode(',', $existingCarMedia->images);
                    $updatedImages = array_merge($existingImages, $imagePaths);
                    $existingCarMedia->update(['images' => implode(',', $updatedImages)]);
                } else {
                    CarMedia::create([
                        'car_id' => $carId,
                        'type' => $type,
                        'images' => implode(',', $imagePaths),
                    ]);
                }
            }
        }   
        
        if(auth()->check()) {
            if(auth()->user()->type == 'admin') {
                return redirect()->route('admin.addcar')->with('success2', "Car form 2 added successfully");
            } elseif(auth()->user()->type == 'inspector') {
                return redirect()->route('inspector.addcar')->with('success2', "Car form 2 added successfully");
            }
        }
    }

    //Storecar3
    public function Storecar3(Request $request){

        $carId = session('car_id');
            //update record in cars tbl
        Car::where('id', $carId)->update([

        'fluid_level_condition' => $request->fluid_level_condition ,
        'fluid_level_condition_other'=>$request->fluid_level_condition_other,

        'transmission_fluid_leaks'=>$request->transmission_fluid_leaks,
        'transmission_fluid_leaks_other'=>$request->transmission_fluid_leaks_other,

        'gear_selector'=>$request->gear_selector,
        'gear_selector_other'=>$request->gear_selector_other,

        'noise'=>$request->noise,
        'noise_other'=>$request->noise_other,

        'gear_shifting'=>$request->gear_shifting,
        'gear_shifting_other'=>$request->gear_shifting_other,
        ]);

        //    $validator = Validator::make($request->all(), [
        //     'fluid_level_condition_images' => 'required',
        //     'transmission_fluid_leaks_images'=>'required',
        //     'gear_selector_images'=>'required',
        //     ]);
        
        //     if ($validator->fails()) {
                
        //         return redirect()->route('admin.addcar', ['step' => $request->step])->withErrors($validator)->withInput();
        //     }

        $imageTypes = [
            'section_title_fluid_level_condition' => 'fluid_level_condition_images',
            'section_title_transmission_fluid_leaks' => 'transmission_fluid_leaks_images',
            'section_title_gear_selector' => 'gear_selector_images',
        ];
    
        foreach ($imageTypes as $sectionTitle => $imageField) {
            
            if ($request->hasFile($imageField)) {
                
                $type = str_replace('section_title_', '', $sectionTitle);
    
                $existingCarMedia = CarMedia::where('car_id', $carId)->where('type', $type)->first();
    
                // Handle image upload and update/create CarMedia record
                $imagePaths = [];
                foreach ($request->file($imageField) as $image) {
                    $newImageName = "{$type}_image_" . uniqid() . '.' . $image->getClientOriginalExtension(); 
                    $image->move(public_path("images/{$type}_images"), $newImageName);
                    $imagePaths[] = "images/{$type}_images/{$newImageName}";
                }
    
                if ($existingCarMedia) {
                    
                    $existingImages = explode(',', $existingCarMedia->images);
                    $updatedImages = array_merge($existingImages, $imagePaths);
                    $existingCarMedia->update(['images' => implode(',', $updatedImages)]);
                } else {
                   
                    CarMedia::create([
                        'car_id' => $carId,
                        'type' => $type,
                        'images' => implode(',', $imagePaths),
                    ]);
                }
            }
        }
        //redirection
        if(auth()->check()) {
            if(auth()->user()->type == 'admin') {
                return redirect()->route('admin.addcar')->with('success3', "Car Form 3 added successfully");
            } elseif(auth()->user()->type == 'inspector') {
                return redirect()->route('inspector.addcar')->with('success3', "Car Form 3 added successfully");
            }
        }
    }
    
    //storecar4
    public function Storecar4(Request $request){

        $carId = session('car_id');
       
        Car::where('id', $carId)->update([
            'brake_pads_front' => $request->brake_pads_front,
            'brake_pads_front_other' => $request->brake_pads_front_other,
            'brake_pads_rear' => $request->brake_pads_rear,
            'brake_pads_rear_other' => $request->brake_pads_rear_other,
            'brake_disc_front' => $request->brake_disc_front,
            'brake_disc_front_other' => $request->brake_disc_front_other,
            'brake_disc_rear' => $request->brake_disc_rear,
            'brake_disc_rear_other' => $request->brake_disc_rear_other,
            'abs_sensors' => $request->abs_sensors,
            'abs_sensors_other' => $request->abs_sensors_other,
            'handbrake' => $request->handbrake,
            'handbrake_other' => $request->handbrake_other,
            'front_suspension' => $request->front_suspension,
            'front_suspension_other' => $request->front_suspension_other,
            'rear_suspension' => $request->rear_suspension,
            'rear_suspension_other' => $request->rear_suspension_other,
        ]);
    
        $imageTypes = [
            'section_title_front_suspension' => 'front_suspension_images',
            'section_title_rear_suspension' => 'rear_suspension_images',
            'section_title_front_left_tyre' => 'front_left_tyre_images',
            'section_title_rear_left_tyre' => 'rear_left_tyre_images',
            'section_title_rear_right_tyre' => 'rear_right_tyre_images',
            'section_title_front_right_tyre' => 'front_right_tyre_images',
        ];
    
        foreach ($imageTypes as $sectionTitle => $imageField) {
            
            if ($request->hasFile($imageField)) {
                $type = str_replace('section_title_', '', $sectionTitle);
                $existingCarMedia = CarMedia::where('car_id', $carId)->where('type', $type)->first();
             
                $imagePaths = [];
                foreach ($request->file($imageField) as $image) {
                    $newImageName = "{$type}_image_" . uniqid() . '.' . $image->getClientOriginalExtension(); // Generate a unique image name
                    $image->move(public_path("images/{$type}_images"), $newImageName);
                    $imagePaths[] = "images/{$type}_images/{$newImageName}";
                }
                if ($existingCarMedia) {
                
                    $existingImages = explode(',', $existingCarMedia->images);
                    $updatedImages = array_merge($existingImages, $imagePaths);
                    $existingCarMedia->update(['images' => implode(',', $updatedImages)]);
                } else {
                    CarMedia::create([
                        'car_id' => $carId,
                        'type' => $type,
                        'images' => implode(',', $imagePaths),
                    ]);
                }
            }
        }
        $existingCarBrakeSystem = Carbrakesystem::where('car_id', $carId)->first();

        if ($existingCarBrakeSystem) {
        $existingCarBrakeSystem->update([
            
            'front_left_manufac' => $request->front_left_manufac,
            'front_left_date' => $request->front_left_date,
            'front_left_rim_id' => $request->front_left_rim_id,
            'front_left_condition' => $request->front_left_condition,

            'front_right_manufac' => $request->front_right_manufac,
            'front_right_date' => $request->front_right_date,
            'front_right_rim_id' => $request->front_right_rim_id,
            'front_right_condition' => $request->front_right_condition,

            'rear_left_manufac' => $request->rear_left_manufac,
            'rear_left_date' => $request->rear_left_date,
            'rear_left_rim_id' => $request->rear_left_rim_id,
            'rear_left_condition' => $request->rear_left_condition,

            'rear_right_manufac' => $request->rear_right_manufac,
            'rear_right_date' => $request->rear_right_date,
            'rear_right_rim_id' => $request->rear_right_rim_id,
            'rear_right_condition' => $request->rear_right_condition,
            
            // 'spare_manufac' => $request->spare_manufac,
            // 'spare_date' => $request->spare_date,
            // 'spare_rim_id' => $request->spare_rim_id,
            // 'spare_height_id' => $request->spare_height_id,
            // 'spare_width_id' => $request->spare_width_id,
            // 'spare_condition' => $request->spare_condition,

            'front_left_brand' => $request->front_left_brand,
            'front_left_rim_condition' => $request->front_left_rim_condition,
            'front_right_brand' => $request->front_right_brand,
            'front_right_rim_condition' => $request->front_right_rim_condition,
            
            'rear_left_brand' => $request->rear_left_brand,
            'rear_left_rim_condition' => $request->rear_left_rim_condition,
            'rear_right_brand' => $request->rear_right_brand,
            'rear_right_rim_condition' => $request->rear_right_rim_condition,
            
            'spare_brand' => $request->spare_brand,
            'spare_rim_condition' => $request->spare_rim_condition,
        ]);
        } else {
           
        $carbrakesystem = Carbrakesystem::create([
            'car_id' => $carId,
            'front_left_manufac' => $request->front_left_manufac,
            'front_left_date' => $request->front_left_date,
            'front_left_rim_id' => $request->front_left_rim_id,
            'front_left_condition' => $request->front_left_condition,
            
            'front_right_manufac' => $request->front_right_manufac,
            'front_right_date' => $request->front_right_date,
            'front_right_rim_id' => $request->front_right_rim_id,
            'front_right_condition' => $request->front_right_condition,

            'rear_left_manufac' => $request->rear_left_manufac,
            'rear_left_date' => $request->rear_left_date,
            'rear_left_rim_id' => $request->rear_left_rim_id,
            'rear_left_condition' => $request->rear_left_condition,

            'rear_right_manufac' => $request->rear_right_manufac,
            'rear_right_date' => $request->rear_right_date,
            'rear_right_rim_id' => $request->rear_right_rim_id,
            'rear_right_condition' => $request->rear_right_condition,

            // 'spare_manufac' => $request->spare_manufac,
            // 'spare_date' => $request->spare_date,
            // 'spare_rim' => $request->spare_rim,
            // 'spare_height' => $request->spare_height,
            // 'spare_width' => $request->spare_width,
            // 'spare_condition' => $request->spare_condition,

            'front_left_brand' => $request->front_left_brand,
            'front_left_rim_condition' => $request->front_left_rim_condition,
            'front_right_brand' => $request->front_right_brand,
            'front_right_rim_condition' => $request->front_right_rim_condition,
            
            'rear_left_brand' => $request->rear_left_brand,
            'rear_left_rim_condition' => $request->rear_left_rim_condition,
            'rear_right_brand' => $request->rear_right_brand,
            'rear_right_rim_condition' => $request->rear_right_rim_condition,
            'spare_brand' => $request->spare_brand,
            'spare_rim_condition' => $request->spare_rim_condition,
            ]);
        }
 
        if(auth()->check()) {
            if(auth()->user()->type == 'admin') {
                return redirect()->route('admin.addcar')->with('success4', "Car Form 4 added successfully");
            } elseif(auth()->user()->type == 'inspector') {
                return redirect()->route('inspector.addcar')->with('success4', "Car Form 4 added successfully");
            }
        }
    }
    
    //storecar5
    public function Storecar5(Request $request){

        $carId = session('car_id');
            // Update record in cars tbl
         Car::where('id', $carId)->update([

            'key_remote' => $request->key_remote ,
            'key_remote_other'=>$request->key_remote_other,

            'entertainment_system' => $request->entertainment_system,
            'entertainment_system_other'=>$request->entertainment_system_other,
               
            'windows_operation' => $request->windows_operation,
            'windows_operation_other'=>$request->windows_operation_other,

            'seats_adjustment' => $request->seats_adjustment,
            'seats_adjustment_other'=>$request->seats_adjustment_other,
               
            'door_lock_unlock' => $request->door_lock_unlock ,
            'door_lock_unlock_other'=>$request->door_lock_unlock_other,

            'ac_control_cooling' => $request->ac_control_cooling,
            'ac_control_cooling_other'=>$request->ac_control_cooling_other,

            'center_console_buttons' => $request->center_console_buttons,
            'center_console_buttons_other'=>$request->center_console_buttons_other,

            'cameras' => $request->cameras ,
            'cameras_other'=>$request->cameras_other,

            'gauges' => $request->gauges ,
            'gauges_other'=>$request->gauges_other,

            'rear_view_side_mirror_elec' => $request->rear_view_side_mirror_elec ,
            'rear_view_side_mirror_elec_other'=>$request->rear_view_side_mirror_elec_other,

            'ac_grilles' => $request->ac_grilles ,
            'ac_grilles_other'=>$request->ac_grilles_other,

            'starting_ignition_system' => $request->starting_ignition_system ,
            'starting_ignition_system_other'=>$request->starting_ignition_system_other,

            'brake_lights' => $request->brake_lights ,
            'brake_lights_other'=>$request->brake_lights_other,
               
            'headlights' => $request->headlights ,
            'headlights_other'=>$request->headlights_other,
               
            'fog_lights' => $request->fog_lights ,
            'fog_lights_other'=>$request->fog_lights_other,

            'reverse_lights' => $request->reverse_lights ,
            'reverse_lights_other'=>$request->reverse_lights_other,

            'high_beams' => $request->high_beams ,
            'high_beams_other'=>$request->high_beams_other,

            'no_plates_lights' => $request->no_plates_lights ,
            'no_plates_lights_other'=>$request->no_plates_lights_other,

            'indicators_hazards' => $request->indicators_hazards ,
            'indicators_hazards_other'=>$request->indicators_hazards_other,

            'wipers' => $request->wipers ,
            'wipers_other'=>$request->wipers_other,

            'soft_closing_doors' => $request->soft_closing_doors ,
            'soft_closing_doors_other'=>$request->soft_closing_doors_other,
               
            'sunroof_moonroof' => $request->sunroof_moonroof ,
            'sunroof_moonroof_other'=>$request->sunroof_moonroof_other,
               
            'interior_lights' => $request->interior_lights ,
            'interior_lights_other'=>$request->interior_lights_other,
               
            'cruise_control' => $request->cruise_control ,
            'cruise_control_other'=>$request->cruise_control_other,
               
            'horn' => $request->horn ,
            'horn_other'=>$request->horn_other,
               
            'parking_sensors' => $request->parking_sensors ,
            'parking_sensors_other'=>$request->parking_sensors_other,
            ]);
        
            // Image types and corresponding fields
            $imageTypes = [
                'section_title_key_remote' => 'key_remote_images',
                'section_title_entertainment_system' => 'entertainment_system_images',
                'section_title_windows_operation' => 'windows_operation_images',
                'section_title_seats_adjustment' => 'seats_adjustment_images',
                'section_title_door_lock_unlock' => 'door_lock_unlock_images',
                'section_title_ac_control_cooling' => 'ac_control_cooling_images',
                'section_title_center_console_buttons' => 'center_console_buttons_images',
                'section_title_camera' => 'cameras_images',
                'section_title_guages' => 'gauges_images',
                'section_title_rear_view_side_mirror_elec' => 'rear_view_side_mirror_elec_images',
                'section_title_ac_grilles' => 'ac_grilles_images',
                'section_title_starting_ignition_system' => 'starting_ignition_system_images',
                'section_title_brake_lights' => 'brake_lights_images',
                'section_title_headlights' => 'headlights_images',
                'section_title_fog_lights' => 'fog_lights_images',
                'section_title_reverse_lights' => 'reverse_lights_images',
                'section_title_high_beams' => 'high_beams_images',
                'section_title_no_plates_lights' => 'no_plates_lights_images',
                'section_title_indicators_hazards' => 'indicators_hazards_images',
                'section_title_wipers' => 'wipers_images',
                'section_title_sunroof_moonroof' => 'sunroof_moonroof_images',
                'section_title_interior_lights' => 'interior_lights_images',

            ];
        
            // Loop through image types
            foreach ($imageTypes as $sectionTitle => $imageField) {
                
                if ($request->hasFile($imageField)) {
                    $type = str_replace('section_title_', '', $sectionTitle);
                    $existingCarMedia = CarMedia::where('car_id', $carId)->where('type', $type)->first();
                    $imagePaths = [];
                    foreach ($request->file($imageField) as $image) {
                        $newImageName = "{$type}_image_" . uniqid() . '.' . $image->getClientOriginalExtension(); 
                        $image->move(public_path("images/{$type}_images"), $newImageName);
                        $imagePaths[] = "images/{$type}_images/{$newImageName}";
                    }
                    if ($existingCarMedia) {
                        $existingImages = explode(',', $existingCarMedia->images);
                        $updatedImages = array_merge($existingImages, $imagePaths);
                        $existingCarMedia->update(['images' => implode(',', $updatedImages)]);
                    } else {
                        CarMedia::create([
                            'car_id' => $carId,
                            'type' => $type,
                            'images' => implode(',', $imagePaths),
                        ]);
                    }
                }
            }
    
        if(auth()->check()) {
            if(auth()->user()->type == 'admin') {
                return redirect()->route('admin.addcar')->with('success5', "Car form 5 added successfully");
            } elseif(auth()->user()->type == 'inspector') {
                return redirect()->route('inspector.addcar')->with('success5', "Car form 5 added successfully");
            }
        }
    }
    
    //storecar6
    public function Storecar6(Request $request){


        $carId = session('car_id');
        
        Car::where('id', $carId)->update([

            'roof_lining' => $request->roof_lining ,
            'roof_lining_other'=>$request->roof_lining_other,

            'rear_view_mirror' => $request->rear_view_mirror ,
            'rear_view_mirror_other'=>$request->rear_view_mirror_other,

            'steering_wheel_upholstery' => $request->steering_wheel_upholstery ,
            'steering_wheel_upholstery_other'=>$request->steering_wheel_upholstery_other,

            'seats_upholstery' => $request->seats_upholstery ,
            'seats_upholstery_other'=>$request->seats_upholstery_other,

            'gear_lever' => $request->gear_lever ,
            'gear_lever_other'=>$request->gear_lever_other,

            'trunk_lining' => $request->trunk_lining ,
            'trunk_lining_other'=>$request->trunk_lining_other,

            'amrest_side_pockets' => $request->amrest_side_pockets ,
            'amrest_side_pockets_other'=>$request->amrest_side_pockets_other,

            'dashboard' => $request->dashboard,
            'dashboard_other'=>$request->dashboard_other,

            'floor_mates' => $request->floor_mates ,
            'floor_mates_other'=>$request->floor_mates_other,
               
            'doors' => $request->doors ,
            'doors_other'=>$request->doors_other,

            'front_windscreen' => $request->front_windscreen ,
            'front_windscreen_other'=>$request->front_windscreen_other,

            'rear_windscreen' => $request->rear_windscreen ,
            'rear_windscreen_other'=>$request->rear_windscreen_other,
             ]);
        
            $imageTypes = [
                'section_title_roof_lining' => 'roof_lining_images',
                'section_title_rear_view_mirror_form' => 'rear_view_mirror_form_images',
                'section_title_steering_wheel_upholstery' => 'steering_wheel_upholstery_images',
                'section_title_seats_upholstery' => 'seats_upholstery_images',
                'section_title_gear_lever' => 'gear_lever_images',
                'section_title_trunk_lining' => 'trunk_lining_images',
                'section_title_amrest_side_pockets' => 'amrest_side_pockets_images',
                'section_title_dashboard' => 'dashboard_images',
                'section_title_floor_mates' => 'floor_mates_images',
                'section_title_doors' => 'doors_images',
                'section_title_front_windscreen' => 'front_windscreen_images',
                'section_title_rear_windscreen' => 'rear_windscreen_images',
            ];
    
            // Loop through image types
            foreach ($imageTypes as $sectionTitle => $imageField) {
                
                if ($request->hasFile($imageField)) {
                    
                    $type = str_replace('section_title_', '', $sectionTitle);
        
                    $existingCarMedia = CarMedia::where('car_id', $carId)->where('type', $type)->first();
        
                    // Handle image upload and update/create CarMedia record
                    $imagePaths = [];
                    foreach ($request->file($imageField) as $image) {
                        $newImageName = "{$type}_image_" . uniqid() . '.' . $image->getClientOriginalExtension(); // Generate a unique image name
                        $image->move(public_path("images/{$type}_images"), $newImageName);
                        $imagePaths[] = "images/{$type}_images/{$newImageName}";
                    }
        
                    if ($existingCarMedia) {
                        $existingImages = explode(',', $existingCarMedia->images);
                        $updatedImages = array_merge($existingImages, $imagePaths);
                        $existingCarMedia->update(['images' => implode(',', $updatedImages)]);
                    } else {
                        CarMedia::create([
                            'car_id' => $carId,
                            'type' => $type,
                            'images' => implode(',', $imagePaths),
                        ]);
                    }
                }
            }
            
        if(auth()->check()) {
            if(auth()->user()->type == 'admin') {
                return redirect()->route('admin.addcar')->with('success6', "Car form 6 added successfully");
            } elseif(auth()->user()->type == 'inspector') {
                return redirect()->route('inspector.addcar')->with('success6', "Car form 6 added successfully");
            }
        }
    }
        
    //Storecar8
    public function Storecar8(Request $request) {

        $carId = session('car_id');
            // $validator = Validator::make($request->all(), [
            //     'exterior_images'=>'required',
 
            // ]);
            // if ($validator->fails()) {
                
            //     return redirect()->route('admin.addcar', ['step' => $request->step])->withErrors($validator)->withInput();
            // }
           
            // exterior image
        $imageTypes = [
            'section_title_exterior_photos' => 'exterior_images',
        ];
        
            // Loop through image types
        foreach ($imageTypes as $sectionTitle => $imageField) {
                
            if ($request->hasFile($imageField)) {
                    
                $type = str_replace('section_title_', '', $sectionTitle);
        
                $existingCarMedia = CarMedia::where('car_id', $carId)->where('type', $type)->first();

                $imagePaths = [];
                foreach ($request->file($imageField) as $image) {
                    $newImageName = "{$type}_image_" . uniqid() . '.' . $image->getClientOriginalExtension(); 
                    $image->move(public_path("images/{$type}_images"), $newImageName);
                    $imagePaths[] = "images/{$type}_images/{$newImageName}";
                }
        
                if ($existingCarMedia) {
                    $existingImages = explode(',', $existingCarMedia->images);
                    $updatedImages = array_merge($existingImages, $imagePaths);
                    $existingCarMedia->update(['images' => implode(',', $updatedImages)]);
                } else {
                    CarMedia::create([
                        'car_id' => $carId,
                        'type' => $type,
                        'images' => implode(',', $imagePaths),
                    ]);
                }
             }
        }

         if(auth()->check()) {
            if(auth()->user()->type == 'admin') {
                return redirect()->route('admin.addcar')->with('success8', "Car form 8 added successfully");
            } elseif(auth()->user()->type == 'inspector') {
                return redirect()->route('inspector.addcar')->with('success8', "Car form 8 added successfully");
            }
        }
    }
    
    //Storecar9
    public function Storecar9(Request $request){

        $carId = session('car_id');
        // $validator = Validator::make($request->all(), [
        //     'interior_images_form9'=>'required',
        // ]);
          
        // if ($validator->fails()) {
        //     return redirect()->route('admin.addcar', ['step' => $request->step])->withErrors($validator)->withInput();
        // }

        // interior image
        $imageTypes = [
                
            'section_title_interior_photos' => 'interior_images_form9',
        ];
        
        // Loop through image types
        foreach ($imageTypes as $sectionTitle => $imageField) {
                
            if ($request->hasFile($imageField)) {
                    
                $type = str_replace('section_title_', '', $sectionTitle);
        
                $existingCarMedia = CarMedia::where('car_id', $carId)->where('type', $type)->first();
    
                $imagePaths = [];
                foreach ($request->file($imageField) as $image) {
                    $newImageName = "{$type}_image_" . uniqid() . '.' . $image->getClientOriginalExtension(); // Generate a unique image name
                    $image->move(public_path("images/{$type}_images"), $newImageName);
                    $imagePaths[] = "images/{$type}_images/{$newImageName}";
                }
        
                if ($existingCarMedia) {
                    $existingImages = explode(',', $existingCarMedia->images);
                    $updatedImages = array_merge($existingImages, $imagePaths);
                    $existingCarMedia->update(['images' => implode(',', $updatedImages)]);
                } else {
                    CarMedia::create([
                        'car_id' => $carId,
                        'type' => $type,
                        'images' => implode(',', $imagePaths),
                    ]);
                }
            }
        }
        
         if(auth()->check()) {
            if(auth()->user()->type == 'admin') {
                    return redirect()->route('admin.addcar')->with('success9', "Car form 9 added successfully");
            }elseif(auth()->user()->type == 'inspector') {
                    return redirect()->route('inspector.addcar')->with('success9', "Car form 9 added successfully");
            }
        }
    }
    
    //storecar10
    public function Storecar10(Request $request){

        $carId = session('car_id');
          
            // $validator = Validator::make($request->all(), [
            //     'engine_bay_undercarriage_images'=>'required',
            // ]);

            // if ($validator->fails()) {
            //     return redirect()->route('admin.addcar', ['step' => $request->step])->withErrors($validator)->withInput();
            // }
            
            // engine bay undercarriage image
        $imageTypes = [
            'section_title_engine_bay_undercarriage' => 'engine_bay_undercarriage_images',
        ];
        
        // Loop through image types
        foreach ($imageTypes as $sectionTitle => $imageField) {
                
            if ($request->hasFile($imageField)) {
                    
                $type = str_replace('section_title_', '', $sectionTitle);
                $existingCarMedia = CarMedia::where('car_id', $carId)->where('type', $type)->first();

                $imagePaths = [];
                foreach ($request->file($imageField) as $image) {
                    $newImageName = "{$type}_image_" . uniqid() . '.' . $image->getClientOriginalExtension(); //Generate a image name
                    $image->move(public_path("images/{$type}_images"), $newImageName);
                    $imagePaths[] = "images/{$type}_images/{$newImageName}";
                }
        
                if ($existingCarMedia) {
                    $existingImages = explode(',', $existingCarMedia->images);
                    $updatedImages = array_merge($existingImages, $imagePaths);
                    $existingCarMedia->update(['images' => implode(',', $updatedImages)]);
                } else {
                    CarMedia::create([
                        'car_id' => $carId,
                        'type' => $type,
                        'images' => implode(',', $imagePaths),
                    ]);
                }
            }
        }
      
        if(auth()->check()) {
            if(auth()->user()->type == 'admin') {
                return redirect()->route('admin.addcar')->with('success10', "Car form 10 added successfully");
            } elseif(auth()->user()->type == 'inspector') {
                return redirect()->route('inspector.addcar')->with('success10', "Car form 10 added successfully");
            }
        }
    }
    
    //storecarform10electric
    public function Storecarform10electric(Request $request){

        $carId = session('car_id');
        $imageTypes = [
            'section_title_undercarriage' => 'undercarriage_images',
        ];
        
        // Loop through image types
        foreach ($imageTypes as $sectionTitle => $imageField) {
                
            if ($request->hasFile($imageField)) {
                    
                $type = str_replace('section_title_', '', $sectionTitle);
        
                $existingCarMedia = CarMedia::where('car_id', $carId)->where('type', $type)->first();
        
                // Handle image upload and update/create CarMedia record
                $imagePaths = [];
                foreach ($request->file($imageField) as $image) {
                    $newImageName = "{$type}_image_" . uniqid() . '.' . $image->getClientOriginalExtension(); // Generate a unique image name
                    $image->move(public_path("images/{$type}_images"), $newImageName);
                    $imagePaths[] = "images/{$type}_images/{$newImageName}";
                }
        
                if ($existingCarMedia) {
                    $existingImages = explode(',', $existingCarMedia->images);
                    $updatedImages = array_merge($existingImages, $imagePaths);
                    $existingCarMedia->update(['images' => implode(',', $updatedImages)]);
                } else {
                    CarMedia::create([
                        'car_id' => $carId,
                        'type' => $type,
                        'images' => implode(',', $imagePaths),
                    ]);
                }
            }
        }
        if(auth()->check()) {
            if(auth()->user()->type == 'admin') {
                return redirect()->route('admin.addcar')->with('success10electricform', "Car form 10 added successfully");
            } elseif(auth()->user()->type == 'inspector') {
                return redirect()->route('inspector.addcar')->with('success10electricform', "Car form 10 added successfully");
            }
        }
    }
    
    // storecar11
    public function Storecar11(Request $request){
            
        $carId = session('car_id');
            
            // $validator = Validator::make($request->all(), [
            //     'vehicle_diagnostic_report_images'=>'required',
            // ]);
            // if ($validator->fails()) {
                
            //     return redirect()->route('admin.addcar', ['step' => $request->step])->withErrors($validator)->withInput();
            // }
        $imageTypes = [
            'section_title_vehicle_diagnostic_report' => 'vehicle_diagnostic_report_images',
        ];
        
        // Loop through image types
        foreach ($imageTypes as $sectionTitle => $imageField) {
                
            if ($request->hasFile($imageField)) {
                    
                $type = str_replace('section_title_', '', $sectionTitle);
        
                $existingCarMedia = CarMedia::where('car_id', $carId)->where('type', $type)->first();
    
                $imagePaths = [];
                foreach ($request->file($imageField) as $image) {
                    $newImageName = "{$type}_image_" . uniqid() . '.' . $image->getClientOriginalExtension(); //Generate a unique name
                    $image->move(public_path("images/{$type}_images"), $newImageName);
                    $imagePaths[] = "images/{$type}_images/{$newImageName}";
                }
        
                if ($existingCarMedia) {
                    $existingImages = explode(',', $existingCarMedia->images);
                    $updatedImages = array_merge($existingImages, $imagePaths);
                    $existingCarMedia->update(['images' => implode(',', $updatedImages)]);
                } else {
                    CarMedia::create([
                        'car_id' => $carId,
                        'type' => $type,
                        'images' => implode(',', $imagePaths),
                    ]);
                }
            }
        }  
        if(auth()->check()) {
            if(auth()->user()->type == 'admin') {
                return redirect()->route('admin.addcar')->with('success11', "Car form 11 added successfully");
            } elseif(auth()->user()->type == 'inspector') {
                return redirect()->route('inspector.addcar')->with('success11', "Car form 11 added successfully");
            }
        }
    }
    
    //storecar13
    public function Storecar13(Request $request){

         $carId = session('car_id');

        Car::where('id', $carId)->update([

            'frunk_condition' => $request->frunk_condition ,
            'frunk_condition_other'=>$request->frunk_condition_other,

            'undercarriage_shield_cover' => $request->undercarriage_shield_cover ,
            'undercarriage_shield_cover_other'=>$request->undercarriage_shield_cover_other,

            'bonnet_hinge' => $request->bonnet_hinge ,
            'bonnet_hinge_other'=>$request->bonnet_hinge_other,

            'fenders' => $request->fenders ,
            'fenders_other'=>$request->fenders_other,

            'radiator_cover' => $request->radiator_cover ,
            'radiator_cover_other'=>$request->radiator_cover_other,

            'coolant_condition_cover'=>$request->coolant_condition_cover,
            'coolant_condition_cover_other' => $request->coolant_condition_cover_other ,

            'coolant_cap_cover'=>$request->coolant_cap_cover,
            'coolant_cap_cover_other' => $request->coolant_cap_cover_other ,
                  
            'hoses_cover'=>$request->hoses_cover,
            'hoses_cover_other' => $request->hoses_cover_other ,

            'visible_cover'=>$request->visible_cover,
            'visible_cover_other' => $request->visible_cover_other ,
              
        ]);
        //    $validator = Validator::make($request->all(), [
            //     'frunk_condition_images'=>'required',
            //     'undercarriage_shield_cover_images'=>'required',
            //     'bonnet_hinge_images'=>'required',
            //     'fenders_images'=>'required',
            //     'radiator_cover_images'=>'required',
            //     'coolant_condition_cover_images'=>'required',
            //     'coolant_cap_cover_images'=>'required',
            //     'hoses_cover_images'=>'required',
            //     'visible_cover_images'=>'required',

            // ]);
        
            // if ($validator->fails()) {
                
            //     return redirect()->route('admin.addcar', ['step' => $request->step])->withErrors($validator)->withInput();
            // }   
            $imageTypes = [
                'section_title_frunk_condition' => 'frunk_condition_images',
                'section_title_undercarriage_shield_cover' => 'undercarriage_shield_cover_images',
                'section_title_bonnet_hinge' => 'bonnet_hinge_images',
                'section_title_fenders' => 'fenders_images',
                'section_title_radiator_cover' => 'radiator_cover_images',
                'section_title_frunk_condition' => 'frunk_condition_images',
                'section_title_coolant_condition_cover' => 'coolant_condition_cover_images',
                'section_title_coolant_cap_cover' => 'coolant_cap_cover_images',
                'section_title_hoses_cover' => 'hoses_cover_images',
                'section_title_visible_cover' => 'visible_cover_images',
            ];
        
            // Loop through image types
        foreach ($imageTypes as $sectionTitle => $imageField) {
                
            if ($request->hasFile($imageField)) {
                    
                $type = str_replace('section_title_', '', $sectionTitle);
        
                $existingCarMedia = CarMedia::where('car_id', $carId)->where('type', $type)->first();
        
                // Handle image upload and update/create CarMedia record
                $imagePaths = [];
                foreach ($request->file($imageField) as $image) {
                    $newImageName = "{$type}_image_" . uniqid() . '.' . $image->getClientOriginalExtension(); // Generate a unique image name
                    $image->move(public_path("images/{$type}_images"), $newImageName);
                    $imagePaths[] = "images/{$type}_images/{$newImageName}";
                }
        
                if ($existingCarMedia) {
                    $existingImages = explode(',', $existingCarMedia->images);
                    $updatedImages = array_merge($existingImages, $imagePaths);
                    $existingCarMedia->update(['images' => implode(',', $updatedImages)]);
                } else {
                    CarMedia::create([
                        'car_id' => $carId,
                        'type' => $type,
                        'images' => implode(',', $imagePaths),
                    ]);
                }
            }
        }
        
        if(auth()->check()) {
            if(auth()->user()->type == 'admin') {
                return redirect()->route('admin.addcar')->with('success12', "Car form 12 added successfully");
            } elseif(auth()->user()->type == 'inspector') {
                return redirect()->route('inspector.addcar')->with('success12', "Car form 12 added successfully");
            }
        }
    }
        
    //Storecar14
    public function Storecar14(Request $request){
     
        $carId = session('car_id');
        Car::where('id', $carId)->update([

            'charging' => $request->charging ,
            'charging_other'=>$request->charging_other,

            'charging_feature' => $request->charging_feature ,
            'charging_feature_other'=>$request->charging_feature_other,

            'electric_motor' => $request->electric_motor ,
            'electric_motor_other'=>$request->electric_motor_other,

            'batterypoints' => $request->batterypoints ,    
        ]);

            // $validator = Validator::make($request->all(), [
            //     'batterypoints'=>'required',
            //     'charging_images'=>'required',
            //     'charging_feature_images'=>'required',
            //     'electric_motor_images'=>'required',
            //     'batterypoints'=>'required',
            // ]);
            // if ($validator->fails()) {  
            //     return redirect()->route('admin.addcar', ['step' => $request->step])->withErrors($validator)->withInput();
            // }
        $imageTypes = [
            'section_title_charging' => 'charging_images',
            'section_title_charging_feature' => 'charging_feature_images',
            'section_title_electric_motor' => 'electric_motor_images',
        ];
        
        // Loop through image types
        foreach ($imageTypes as $sectionTitle => $imageField) {
                
            if ($request->hasFile($imageField)) {
                    
                $type = str_replace('section_title_', '', $sectionTitle);
                $existingCarMedia = CarMedia::where('car_id', $carId)->where('type', $type)->first();
    
                    $imagePaths = [];
                    foreach ($request->file($imageField) as $image) {
                        $newImageName = "{$type}_image_" . uniqid() . '.' . $image->getClientOriginalExtension(); 
                        $image->move(public_path("images/{$type}_images"), $newImageName);
                        $imagePaths[] = "images/{$type}_images/{$newImageName}";
                    }
        
                    if ($existingCarMedia) {
                        $existingImages = explode(',', $existingCarMedia->images);
                        $updatedImages = array_merge($existingImages, $imagePaths);
                        $existingCarMedia->update(['images' => implode(',', $updatedImages)]);
                    } else {
                        CarMedia::create([
                            'car_id' => $carId,
                            'type' => $type,
                            'images' => implode(',', $imagePaths),
                    ]);
                }
            }
        }

        if(auth()->check()) {
            if(auth()->user()->type == 'admin') {
                return redirect()->route('admin.addcar')->with('success13', "Car form 13 added successfully");
            } elseif(auth()->user()->type == 'inspector') {
                return redirect()->route('inspector.addcar')->with('success13', "Car form 13 added successfully");
            }
        }
    }
     
    //storecar 15  
    public function Storecar15(Request $request){
        
        $carId = session('car_id');

            // $validator = Validator::make($request->all(), [
            //     'frunk_trunk_images'=>'required',
            // ]);
            // if ($validator->fails()) {  
            //     return redirect()->route('admin.addcar', ['step' => $request->step])->withErrors($validator)->withInput();
            // }
            //frunktrnk img
            
        $imageTypes = [
            'section_title_frunk_trunk' => 'frunk_trunk_images',
        ];
            // Loop through image types
        foreach ($imageTypes as $sectionTitle => $imageField) {
                
            if ($request->hasFile($imageField)) {
                    
                $type = str_replace('section_title_', '', $sectionTitle);
        
                $existingCarMedia = CarMedia::where('car_id', $carId)->where('type', $type)->first();
        
                    // Handle image upload and update/create CarMedia record
                $imagePaths = [];
                foreach ($request->file($imageField) as $image) {
                    $newImageName = "{$type}_image_" . uniqid() . '.' . $image->getClientOriginalExtension(); // Generate a unique image name
                    $image->move(public_path("images/{$type}_images"), $newImageName);
                    $imagePaths[] = "images/{$type}_images/{$newImageName}";
                }
        
                if ($existingCarMedia) {
                        $existingImages = explode(',', $existingCarMedia->images);
                        $updatedImages = array_merge($existingImages, $imagePaths);
                        $existingCarMedia->update(['images' => implode(',', $updatedImages)]);
                    } else {
                        CarMedia::create([
                        'car_id' => $carId,
                        'type' => $type,
                        'images' => implode(',', $imagePaths),
                    ]);
                }
            }
        }
     
        if(auth()->check()) {
            if(auth()->user()->type == 'admin') {
                return redirect()->route('admin.addcar')->with('success14', "Car form 14 added successfully");
            } elseif(auth()->user()->type == 'inspector') {
                return redirect()->route('inspector.addcar')->with('success14', "Car form 14 added successfully");
            }
        }
    }
    
    //storecarend
    public function StorecarEnd(Request $request) {
        $carId = session('car_id');
            
            // $validator = Validator::make($request->all(), [
            //     'summary' => 'required',
            //     'signatureData' => 'required',
            // ]);
            // if ($validator->fails()) {
            //     return redirect()->route('admin.addcar', ['step' => $request->step])->withErrors($validator)->withInput();
            // }

          Car::where('id', $carId)->update([

              'summary' => $request->summary,
            //   'repair_cost' => $request->repair_cost,
            //   'buy_now' => $request->buy_now,
            //   'estimated_market_value' => $request->estimated_market_value,
            //   'reserve_price' => $request->reserve_price,
          

              'air_conditioner' => $request->air_conditioner,
              'digital_odometer' => $request->digital_odometer,
              'heater' => $request->heater,
              'leather_seats_interior' => $request->leather_seats_interior,
              'tachometer' => $request->tachometer,      
              'panoramic_moonroof' => $request->panoramic_moonroof,
              'touchscreen_display' => $request->touchscreen_display,

              'anti_lock_bracking' => $request->anti_lock_bracking,
              'brake_assist' => $request->brake_assist,
              'child_safety_locks' => $request->child_safety_locks,
              'driver_air_bag' => $request->driver_air_bag,
              'power_door_locks' => $request->power_door_locks,      
              'stability_control' => $request->stability_control,
              'traction_control' => $request->traction_control,

              'fog_lights_front' => $request->fog_lights_front,
              'rain_sesing_wiper' => $request->rain_sesing_wiper,
              'rear_spoiler' => $request->rear_spoiler,      
              'windows_electric' => $request->windows_electric,
           
              'android_auto' => $request->android_auto,
              'digital_odometer_cc' => $request->digital_odometer_cc,
              'heater_cc' => $request->heater_cc,      
              'leather_seats_cc' => $request->leather_seats_cc,

          ]);
    
        if(auth()->check()) { 
            if(auth()->user()->type == 'admin') {
                return redirect()->route('admin.addcar')->with('success16', "All Car Forms submitted successfully");
            } elseif(auth()->user()->type == 'inspector') {
                return redirect()->route('inspector.addcar')->with('success16', "All Car Forms submitted successfully");
            }
        }
    }
        
    //batterystore
    public function BatteryStore(Request $request){
     
        $carId = session('car_id');
        $powerValue = $request->input('powerValue');
        
        Car::where('id', $carId)->update([
            'battery_condition' => $powerValue,
        ]);
    }

    //deleteimage
    public function deleteImage(Request $request)
    {
        // Retrieve the section title, image URL, and image ID from the request
        $sectionTitle = $request->input('section_title');
        $imageUrl = $request->input('image_url');
        $imageId = $request->input('image_id');

        // Find the image entry
        $carMedia = CarMedia::where('id', $imageId)
            ->where('type', $sectionTitle)
            ->first();

        if (!$carMedia) {
            return "Image not found";
        }

        // Remove the image URL from the images list
        $images = explode(',', $carMedia->images);
        $images = array_diff($images, [$imageUrl]);
        $imagesString = implode(',', $images);

        // Ensure the first image doesn't have a leading comma
        $imagesString = ltrim($imagesString, ',');

        // Update the images list in the database
        $deleted = CarMedia::where('id', $imageId)
            ->where('type', $sectionTitle)
            ->update([
                'images' => $imagesString,
            ]);

        if ($deleted) {
            // Delete the image file from the folder
            if (file_exists(public_path($imageUrl))) {
                unlink(public_path($imageUrl));
                return "Image deleted successfully";
            } else {
                return "Image file not found";
            }
        } else {
            return "Failed to delete image";
        }
    }

    public function DeleteCar($car_id){

        $car = Car::find($car_id);
        if (!$car) {
            return "Car not found";
        }
        
        // delete image from car media tbl
        $carMedia = CarMedia::where('car_id', $car_id)->get();
        foreach ($carMedia as $media) {
            // Get the image path
            $imagePaths = explode(',', $media->images);
            foreach ($imagePaths as $imagePath) {
                // Unlink the image file from the folder
                if ($imagePath && file_exists(public_path($imagePath))) {
                    unlink(public_path($imagePath));
                }
            }
        }
        
        //delete and unlink image from chassis perfect tbl
        
           $chassisPerfectRecords = CarChassisPerfect::where('car_id', $car_id)->get();
             foreach ($chassisPerfectRecords as $record) {
            
                $imagePath = $record->image;
                if ($imagePath && file_exists(public_path($imagePath))) {
                    unlink(public_path($imagePath));
                }
            }
    
        //delete record from carmedia 
        CarMedia::where('car_id', $car_id)->delete();

        //delete record from carbrakesystem
        CarBrakeSystem::where('car_id', $car_id)->delete();
        
        CarChassisPerfect::where('car_id',$car_id)->delete();
        
         Booking::where('car_id',$car_id)->delete();
          
        $deleted = $car->delete();
        
        if(auth()->check()) {
            if(auth()->user()->type == 'admin') {
                if ($deleted) {
                    return redirect()->back()->with('success', 'Cars deleted successfully');
                } else {
                    return redirect()->back()->with('error', 'Cars not found');
                }
            } elseif(auth()->user()->type == 'inspector') {
                if ($deleted) {
                    return redirect()->back()->with('success', 'Cars deleted successfully');
                } else {
                    return redirect()->back()->with('error', 'Cars not found');
                }
            }
        }
    }
    
    //dashboard
    public function Dashboard(){
        
        return view('admin.admin_dashboard');
    }

    //viewcar
    public function ViewCar(){
  
        if (auth()->user()->type == 'admin') {
            //if user is admin
             $cars = Car::orderBy('created_at', 'desc')->get();
             
            //  dd($cars);
            //  $cars = Car::all();
            
        } else {
    
            // If user is an inspector,fetch only the cars added by inspector
            $cars = Car::where('user_id', auth()->user()->id)->latest('created_at')->get();
        }
        return view('admin.view_car',compact('cars'));
    }
    
    //inspectordasboard
    public function InspectorDashboard(){
        
        return view('admin.inspector_dashboard');
    }
    
    //addinspector
    public function AddInspector(){

        return view('admin.add_inspector');
    }
    
    //storeinspector
    public function StoreInspector(Request $request){

        $request->validate([
            'name' => 'required|string|regex:/^[^\d]+$/|max:255',
            'email' => 'required|email|unique:users,email', 
            'mobile_no' => 'required|string|regex:/^[0-9]{10}$/',
            'password' => 'required|string|min:6', 
        ],
        [
            'name.regex' => 'The name field should not contain numbers.',
            'mobile_no.regex'=>'The mobile no should be of 10 digit',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->mobile_no = $request->input('mobile_no');
        $user->password = bcrypt($request->input('password'));
        $user->Type = 2; 
        $user->save();
        
        return redirect()->route('admin.view_inspector')->with('success','Inspector added successfully');
    }
    
    //viewinspector
    public function ViewInspector(){

        $inspectors = User::where('Type',2)->latest('created_at')->get();
        return view('admin.view_inspector',compact('inspectors'));
    }

    //deleteinspector
    public function DeleteInspector($inspector_id){

        $user = User::find($inspector_id);
        $user->delete();
        return redirect()->route('admin.view_inspector')->with('success','Inspector Deleted successfully');
    }
    
    //inspectorlogout
    public function InspectorLogout(){
    
        Auth::logout();
        return redirect()->route('login');
    }

    //admin logout
    public function AdminLogout(){
    
        Auth::logout();
        return redirect()->route('login');
    }

    //Action form
    public function Auction(Request $request){
    
        $auctiontype = AuctionType::all();
        $currencies = Currency::where('code','AED')->get();
        $timezones =Timezone::all();
    
        $car_id = $request->car_id;
        $carauction = null;
        if($car_id){
            $carauction= CarAuction::Where('car_id',$car_id)->first(); 
        }
        
         if(auth()->check()) { 
            if(auth()->user()->type == 'admin') {
              
                  return view('admin.auction_form',compact('auctiontype','car_id','carauction','currencies','timezones'));
                  
            } elseif(auth()->user()->type == 'inspector') {
          
                  return view('admin.auction_form',compact('auctiontype','car_id','carauction','currencies','timezones'));
            }
        }
    }
    
    public function StoreAuction(Request $request){

        $car_id = $request->car_id;
        $request->validate([

            'bid_start_price'=>'nullable|numeric',
            'estimated_repair_cost' => 'nullable|numeric',
            'estimated_market_value' => 'nullable|numeric',
            'buy_now_price' => 'nullable|numeric',
            'reserve_price' => 'nullable|numeric',
            'auction_date' => 'nullable|date',
             'auction_end_date' => 'nullable|date',
            'service_cost'=> 'nullable|numeric',
            'vehicle_insurance_price'=>'nullable|numeric',
            'delivery_price'=>'nullable|numeric',
            'buy_back_guarantee_cost'=>'nullable|numeric'

        ]);
        $existingcarauction = CarAuction::Where('car_id',$car_id)->first();

        if ($existingcarauction) {

            $existingcarauction->update([

                'auction_type_id' => $request->input('auction_type_id'),
                'bid_start_price' => $request->input('bid_start_price'),
                'bid_strt_curr' => $request->input('bid_strt_curr'),
                'estimated_repair_cost' => $request->input('estimated_repair_cost'),
                'esti_rep_cost_curr' => $request->input('esti_rep_cost_curr'),
                'estimated_market_value' => $request->input('estimated_market_value'),
                'esti_market_curr' => $request->input('esti_market_curr'),
                'buy_now_price' => $request->input('buy_now_price'),
                'buy_now_curr' => $request->input('buy_now_curr'),
                'reserve_price' => $request->input('reserve_price'),
                'reserve_curr' => $request->input('reserve_curr'),
                'auction_lane' => $request->input('auction_lane'),
                'auction_date' => $request->input('auction_date'),
                'auction_end_date' => $request->input('auction_end_date'),
                'auction_time' => $request->input('auction_time'),
                'time_zone_id' => $request->input('time_zone_id'),
                'auction_end_time' => $request->input('auction_end_time'),
                'auction_end_time_zone_id' => $request->input('auction_end_time_zone_id'),
                
                'chassis_perfect' => $request->input('chassis_perfect'),
                'gcc_specs' => $request->input('gcc_specs'),
                'warranty_available' => $request->input('warranty_available'),
                'bank_loan_available' => $request->input('bank_loan_available'),
                'low_mileage' => $request->input('low_mileage'),
                'accident_free' => $request->input('accident_free'),
                'brand_new_car' => $request->input('brand_new_car'),
                'high_end_vehicle' => $request->input('high_end_vehicle'),
                'no_air_bag' => $request->input('no_air_bag'),
                'eligible_car_arbab_repair' => $request->input('eligible_car_arbab_repair'),
                'limited_edition' => $request->input('limited_edition'),
                'car_play_android_auto' => $request->input('car_play_android_auto'),
                'climate_control' => $request->input('climate_control'),
                'sports_exhaust' => $request->input('sports_exhaust'),
                'keyless_entry' => $request->input('keyless_entry'),
                'panoramic_sunroof' => $request->input('panoramic_sunroof'),
                'clean_title' => $request->input('clean_title'),
                'ending_soon' => $request->input('ending_soon'),
                'rear_wheel_drive' => $request->input('rear_wheel_drive'),
                'front_wheel_drive' => $request->input('front_wheel_drive'),
                'pick_up_by' => $request->input('pick_up_by'),
                'service_cost' => $request->input('service_cost'),
                'service_cost_curr' => $request->input('service_cost_curr'),
                
                'vehicle_insurance_price' => $request->input('vehicle_insurance_price'),
                'veh_insurance_curr' => $request->input('veh_insurance_curr'),
                
                'delivery_price' => $request->input('delivery_price'),
                'delivery_curr' => $request->input('delivery_curr'),
                
                'buy_back_guarantee_curr' => $request->input('buy_back_guarantee_curr'),
                'buy_back_guarantee_cost' => $request->input('buy_back_guarantee_cost'),
                
                'buy_back_guarantee_month' => $request->input('buy_back_guarantee_month'),
                'per_of_depreciation' => $request->input('per_of_depreciation'),
                
                'warranty_period' => $request->input('warranty_period'),
            ]);
            
        }else{
            
            //Lot no be of 5 character with added prefix as CA
            $prefix = 'CA';
            $uniquePart = Str::random(5);
            $lot_number = $prefix . $uniquePart;
            

            //For generating Auction Lane
            // $firstChar = chr(rand(65, 90));  
            // $secondChar = chr(rand(65, 90)); 
            // $numbers = rand(100, 999);      

            // $get = $firstChar . $secondChar;
            // $auction_lane = $get . $numbers ;

            $car_id = $request->car_id;

            $carauction = new CarAuction();
            $carauction->car_id = $car_id;
            $carauction->auction_type_id = $request->input('auction_type_id');
            $carauction->bid_start_price = $request->input('bid_start_price');
            $carauction->bid_strt_curr = $request->input('bid_strt_curr');
            $carauction->estimated_repair_cost = $request->input('estimated_repair_cost');
            $carauction->esti_rep_cost_curr = $request->input('esti_rep_cost_curr');
            $carauction->estimated_market_value = $request->input('estimated_market_value');
            $carauction->esti_market_curr = $request->input('esti_market_curr');
            $carauction->buy_now_price = $request->input('buy_now_price');
            $carauction->buy_now_curr = $request->input('buy_now_curr');
            $carauction->reserve_price = $request->input('reserve_price');
            $carauction->reserve_curr = $request->input('reserve_curr');
            // $carauction->auction_lane = $auction_lane;
            $carauction->lot_number =  $lot_number;
            $carauction->auction_date = $request->input('auction_date');
            $carauction->auction_end_date = $request->input('auction_end_date');
            $carauction->time_zone_id = $request->input('time_zone_id');
            $carauction->auction_time = $request->input('auction_time');
            $carauction->auction_end_time = $request->input('auction_end_time');
         
            $carauction->chassis_perfect = $request->input('chassis_perfect');
            $carauction->gcc_specs = $request->input('gcc_specs');
            $carauction->warranty_available = $request->input('warranty_available');
            $carauction->bank_loan_available = $request->input('bank_loan_available');
            $carauction->low_mileage = $request->input('low_mileage');
            $carauction->accident_free = $request->input('accident_free');
            $carauction->brand_new_car = $request->input('brand_new_car');
            $carauction->high_end_vehicle = $request->input('high_end_vehicle');
            $carauction->no_air_bag = $request->input('no_air_bag');
            $carauction->eligible_car_arbab_repair = $request->input('eligible_car_arbab_repair');
            $carauction->limited_edition = $request->input('limited_edition');
            $carauction->car_play_android_auto = $request->input('car_play_android_auto');
            $carauction->climate_control = $request->input('climate_control');
            $carauction->sports_exhaust = $request->input('sports_exhaust');
            $carauction->keyless_entry = $request->input('keyless_entry');
            $carauction->panoramic_sunroof = $request->input('panoramic_sunroof');
            $carauction->clean_title = $request->input('clean_title');
            $carauction->ending_soon = $request->input('ending_soon');
            $carauction->rear_wheel_drive = $request->input('rear_wheel_drive');
            $carauction->front_wheel_drive = $request->input('front_wheel_drive');
            $carauction->pick_up_by = $request->input('pick_up_by');
     
            $carauction->service_cost = $request->input('service_cost');
            $carauction->service_cost_curr = $request->input('service_cost_curr');
            
            $carauction->vehicle_insurance_price = $request->input('vehicle_insurance_price');
            $carauction->veh_insurance_curr = $request->input('veh_insurance_curr');
            
            $carauction->delivery_price = $request->input('delivery_price');
            $carauction->delivery_curr = $request->input('delivery_curr');
            
            $carauction->buy_back_guarantee_curr = $request->input('buy_back_guarantee_curr');
            $carauction->buy_back_guarantee_cost = $request->input('buy_back_guarantee_cost');
            
            $carauction->buy_back_guarantee_month = $request->input('buy_back_guarantee_month');
            $carauction->per_of_depreciation = $request->input('per_of_depreciation');
    
            $carauction->warranty_period = $request->input('warranty_period');
            
            
            // $carAuctionCount = CarAuction::count();
            // $auctionLaneValue = intdiv($carAuctionCount, 50) + 1;
    
            // $carauction->auction_lane_value = $auctionLaneValue;

            $carauction->save();            
        }

      if(auth()->check()) { 
            if(auth()->user()->type == 'admin') {
              
                  return redirect()->back()->with('success','Auction Form Added Successfully');
                  
            } elseif(auth()->user()->type == 'inspector') {
          
                  return redirect()->back()->with('success','Auction Form Added Successfully');
            }
        }
    }

    // status change
    public function Statuschange(Request $request){
        
        $car = Car::find($request->car_id);
        if($car){
            $car->status = $request->status;
            $car->save();
        }
        return response()->json(['success'=>'Status Change Successfully.']);
    }
    
    //updateStartTime
    
     public function updateStartTime(Request $request){
         
       $car = Car::findOrFail($request->car_id);
        //   $car->quick_auction_start_time = $request->quick_auction_start_time;
        
        
        $datetime = Carbon::parse($request->quick_auction_start_time);
        $date = $datetime->toDateString(); // YYYY-MM-DD format
        $time = $datetime->toTimeString(); // HH:MM:SS format

        // Update the car's quick auction start date and time separately
        $car->quick_auction_start_date = $date;
        $car->quick_auction_start_time = $time;
    
       $car->save();    

        // Return a JSON response indicating success
        return response()->json(['success' => 'quick auction start_time updated successfully.']);
    }
    
    public function updateTax(Request $request){
        
        $car_id = $request->car_id; 
        $tax = $request->tax_added;
        $car = Car::find($request->car_id);
        if($car){
            $car->tax_added = $request->tax_added;
            $car->save();
        }
        return response()->json(['success'=>'Tax Added Successfully.']);
    } 
     
    public function Chassisperfect(Request $request){

        $car_id = $request->car_id;
        return view('admin.chassis_perfect')->with('car_id', $car_id);
    }

    public function getImages()
    {
        $images = HoverImage::all();
        return response()->json($images);
    }
}
