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
use App\Models\CarChassisPerfect;
use App\Models\VehicleBodyType;
use App\Models\CarAuction;
use App\Models\Bidding;
use Carbon\Carbon;
use DB;
use App\Events\BidPlaced;
use App\Models\CarView;



class HomePageController extends Controller
{
    //Home page
    public function Homepage(){
    
        // $cars = Car::with('carMedia','carAuction')
        // ->get();
        // $cars = Car::with('carMedia', 'carAuction')->where('status', '1')->get();
            $cars = Car::with('carMedia','carAuction')->where('status','1')->latest('created_at')->get();
        // dd($cars);

        $carmakes = Vehiclemake::all();

        //get unique carmodels dropdown
        $carmodels = $cars->pluck('veh_car_model')->unique();

        //get unique carmodels dropdown
        $caryears = $cars->pluck('veh_year')->unique();


        $vehiclebodytype = VehicleBodyType::all();
        return view('frontend.index',compact('cars','caryears','carmakes','vehiclebodytype','carmodels'));
    }
    
    // Aboutus
    public function Aboutus(){
        
        return view('frontend.aboutus');
    }

   //calender
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

    //Home: select filtered
    public function Filterselect(Request $request){

        $selectedId = $request->input('selected_id'); //2 dropdown id 
        $selectedValue = $request->input('selected_value');  //2 //name
        $selectedField = $request->input('selected_field'); //veh_car_make

        $carsQuery = Car::query();

        if ($selectedValue && Car::where($selectedField, $selectedValue)->exists()) {

            $carsQuery->where($selectedField, $selectedValue);
        } else {
            $carsQuery->where($selectedField, $selectedId);
        }

        $filtereddropdown = $carsQuery->with('carmedia', 'carauction', 'vehicletype', 'vehiclecondition', 'vehiclemake', 'vehiclefueltype', 'drivetype', 'auctiontype', 'vehicletransmission', 'vehiclenoofcylinder', 'vehicleregionalspec')->get();
  
        return response()->json(['filtereddropdown' => $filtereddropdown]);
    }    

    //details page
    public function Details($id){
        
        $cardetails = Car::with('carMedia','carAuction','carAuction.timezone')->where('status','1')->findOrFail($id);
        $cardetails->increment('views_count');
    
         
         $userId = auth()->id();

        $existingView = CarView::where('user_id', $userId)->where('car_id', $cardetails->id)->first();
    
         if (!$existingView) {
                CarView::create([
                    'user_id' => $userId,
                    'car_id' => $cardetails->id,
                ]);
            }
        

        // dd($cardetails)->get();

        $images = CarChassisPerfect::where('car_id', $id)->get();
    
        // Decode the JSON data
        $imagesArray = $images->toArray();
    
        // counts for Engine
        if($cardetails){
            $array = ['engine_upper_cover', 'engine_shield_cover', 'engine_mounts', 'bonnet_hinge_holder', 'turbo_preference', 'fender_liners', 'drive_belt_pulleys', 'engine_idle', 'engine_oil_filler_cap', 'radiator', 'engine_oil_leaks', 'engine_oil_condition', 'coolant_condition', 'coolant_cap', 'hoses_pipes', 'exhaust_system', 'visible_rust'];
            $countsengine = [
                'Pass' => 0,
                'Imperfection' => 0,
            ];
          
          $imperfectionDetailsEngine = []; 

            foreach ($array as $column) {
                $value = $cardetails->{$column};
                if ($value === 'Pass') {
                    $countsengine['Pass']++;
                } else {
                    $countsengine['Imperfection']++;
                    $imperfectionDetailsEngine[$column] = [
                        'value' => $value,
                        'images' => []
                    ]; // Initialize the imperfection details
                }
            }
        
            foreach ($imperfectionDetailsEngine as $column => $details) {
                $images = $cardetails->carMedia()->where('type', $column)->pluck('images')->toArray();
                if (!empty($images)) {
                    $imagesString = implode(',', $images);
                    $imagesArray = array_map('trim', explode(',', $imagesString));
                    $imagesArray = array_map(function($image) {
                        return asset('public/' . $image);
                    }, $imagesArray);
                    $imperfectionDetailsEngine[$column]['images'] = $imagesArray;
                }
             }
        }
   

        // counts for Transmissions
       if ($cardetails) {
            $array = ['fluid_level_condition', 'transmission_fluid_leaks', 'gear_selector'];
        
            $countstransmission = [
                'Pass' => 0,
                'Imperfection' => 0,
            ];
        
            $imperfectionDetailsTransmission = []; // Array to hold the imperfection details
        
            foreach ($array as $column) {
                $value = $cardetails->{$column};
                if ($value === 'Pass') {
                    $countstransmission['Pass']++;
                } else {
                    $countstransmission['Imperfection']++;
                    $imperfectionDetailsTransmission[$column] = [
                        'value' => $value,
                        'images' => []
                    ]; // Initialize the imperfection details
                }
            }
        
            foreach ($imperfectionDetailsTransmission as $column => $details) {
                $images = $cardetails->carMedia()->where('type', $column)->pluck('images')->toArray();
                if (!empty($images)) {
                    $imagesString = implode(',', $images);
                    $imagesArray = array_map('trim', explode(',', $imagesString));
                    $imagesArray = array_map(function($image) {
                        return asset('public/' . $image);
                    }, $imagesArray);
                    $imperfectionDetailsTransmission[$column]['images'] = $imagesArray;
                }
            }
        }
       

        // counts for brake systwm
         if ($cardetails) {
            $array = ['front_suspension', 'rear_suspension'];
        
            $countsbrakesystem = [
                'Pass' => 0,
                'Imperfection' => 0,
            ];
        
            $imperfectionDetailsBrakesystem = []; // Array to hold the imperfection details
        
            foreach ($array as $column) {
                $value = $cardetails->{$column};
                if ($value === 'Pass') {
                    $countsbrakesystem['Pass']++;
                } else {
                    $countsbrakesystem['Imperfection']++;
                    $imperfectionDetailsBrakesystem[$column] = [
                        'value' => $value,
                        'images' => []
                    ]; // Initialize the imperfection details
                }
            }
        
            foreach ($imperfectionDetailsBrakesystem as $column => $details) {
                $images = $cardetails->carMedia()->where('type', $column)->pluck('images')->toArray();
                if (!empty($images)) {
                    $imagesString = implode(',', $images);
                    $imagesArray = array_map('trim', explode(',', $imagesString));
                    $imagesArray = array_map(function($image) {
                        return asset('public/' . $image);
                    }, $imagesArray);
                    $imperfectionDetailsBrakesystem[$column]['images'] = $imagesArray;
                }
            }
        }
        
      
        
        // counts for electrical system
       if ($cardetails) {
            $array = ['key_remote', 'entertainment_system', 'windows_operation', 'seats_adjustment', 'door_lock_unlock', 'ac_control_cooling', 'center_console_buttons', 'cameras', 'gauges', 'rear_view_side_mirror_elec', 'ac_grilles', 'starting_ignition_system', 'brake_lights', 'headlights', 'fog_lights', 'reverse_lights', 'high_beams', 'no_plates_lights', 'indicators_hazards', 'wipers', 'soft_closing_doors', 'sunroof_moonroof', 'interior_lights', 'cruise_control', 'horn', 'parking_sensors'];
        
            $countsElectricalsystem = [
                'Pass' => 0,
                'Imperfection' => 0,
            ];
            
            $imperfectionDetailsElectricalsystem = []; // Array to hold the imperfection details
        
            foreach ($array as $column) {
                $value = $cardetails->{$column};
                if ($value === 'Pass') {
                    $countsElectricalsystem['Pass']++;
                } else {
                    $countsElectricalsystem['Imperfection']++;
                    $imperfectionDetailsElectricalsystem[$column] = [
                        'value' => $value,
                        'images' => []
                    ]; // Initialize the imperfection details
                }
            }
        
            foreach ($imperfectionDetailsElectricalsystem as $column => $details) {
                $images = $cardetails->carMedia()->where('type', $column)->pluck('images')->toArray();
                if (!empty($images)) {
                    $imagesString = implode(',', $images);
                    $imagesArray = array_map('trim', explode(',', $imagesString));
                    $imagesArray = array_filter($imagesArray); // Remove empty values
                    $imagesArray = array_map(function($image) {
                        return asset('public/' . $image);
                    }, $imagesArray);
                    $imperfectionDetailsElectricalsystem[$column]['images'] = $imagesArray;
                }
            }
        }

        
        
        // counts for interior score
       if ($cardetails) {
            $array = ['roof_lining', 'rear_view_mirror', 'steering_wheel_upholstery', 'seats_upholstery', 'gear_lever', 'trunk_lining', 'amrest_side_pockets', 'dashboard', 'floor_mates', 'doors', 'front_windscreen', 'rear_windscreen'];
           
            $countsInterior = [
                'Pass' => 0,
                'Imperfection' => 0,
            ];
            $imperfectionDetailsInterior = []; // Array to hold the imperfection details
        
            foreach ($array as $column) {
                $value = $cardetails->{$column};
                if ($value === 'Pass') {
                    $countsInterior['Pass']++;
                } else {
                    $countsInterior['Imperfection']++;
                    $imperfectionDetailsInterior[$column] = [
                        'value' => $value,
                        'images' => []
                    ]; // Initialize the imperfection details
                }
            }
        
            foreach ($imperfectionDetailsInterior as $column => $details) {
                $images = $cardetails->carMedia()->where('type', $column)->pluck('images')->toArray();
                
                
                if (!empty($images)) {
                    $imagesString = implode(',', $images);
                    $imagesArray = array_map('trim', explode(',', $imagesString));
                    $imagesArray = array_filter($imagesArray); // Remove empty values
                    $imagesArray = array_map(function($image) {
                        return asset('public/' . $image);
                    }, $imagesArray);
                    $imperfectionDetailsInterior[$column]['images'] = $imagesArray;
                }
            }
        }


        // conts for vehicle diagnostic report
       if ($cardetails) {
            $array = ['vehicle_diagnostic_report'];
            $imperfectionVehiclediagnostic = []; // Array to hold the imperfection details
        
            foreach ($array as $column) {
                // Fetch images where type is 'vehicle_diagnostic_report'
                $images = $cardetails->carMedia()->where('type', $column)->pluck('images')->toArray();
                
                if (!empty($images)) {
                    $imagesString = implode(',', $images);
                    $imagesArray = array_map('trim', explode(',', $imagesString));
                    $imagesArray = array_filter($imagesArray); // Remove empty values
                    $imagesArray = array_map(function($image) {
                        return asset('public/' . $image);
                    }, $imagesArray);
                    $imperfectionVehiclediagnostic[$column]['images'] = $imagesArray;
                }
            }
        }
      
        $carModel = $cardetails->veh_car_model;

        $relatedListings = Car::where('status', '1')
                                ->where('id', '!=', $id)
                                ->latest('created_at')
                                ->get();
        


        return view('frontend.details', compact('imagesArray','imperfectionVehiclediagnostic','imperfectionDetailsInterior','imperfectionDetailsElectricalsystem','imperfectionDetailsBrakesystem','countsbrakesystem','imperfectionDetailsTransmission','imperfectionDetailsEngine','countsInterior','countsElectricalsystem','countsbrakesystem','countstransmission','countsengine','cardetails','relatedListings'));
    }
    
    //store car id

    // Controller method to handle bid placement and return next bid price
    public function StoreBid(Request $request){
        $hiddenBidPrice = $request->input('hidden_bid_price');
        $carId = $request->input('car_id');
        $userId = $request->input('user_id');
        $type = 'normal bid';
        $now = Carbon::now()->setTimezone('Asia/Kolkata');
            
        
        // Calculate next bid price based on current hidden bid price
        $nextBidPrice = $this->calculateNextBidPrice($hiddenBidPrice);
    
        
        //  $carAuction = CarAuction::where('car_id', $carId)->first();
        //     $carAuction->update([
        //         'current_bid_price' => $hiddenBidPrice,
        //         'no_of_bids' => DB::raw('no_of_bids + 1'),
        //     ]);
    
        // // Update CarAuction table with new bid details
         $carAuction = CarAuction::where('car_id', $carId)->first();
        if ($carAuction) {
            $carAuction->current_bid_price = $hiddenBidPrice;
            $carAuction->no_of_bids += 1;
            $carAuction->save();
            
        } 

        // Get updated no_of_bids
        $noOfBids = $carAuction->no_of_bids;
      
        // Store the bid in Bidding table
        $biddings = Bidding::updateOrCreate([
            'user_id' => $userId,
            'car_id' => $carId,
            'bid_price' => $hiddenBidPrice,
            'type' => $type,
            'created_at' => $now,
            'updated_at' => $now,
          
    ]);
        
    
 
 
    
        // Trigger event for Pusher with bid details
        $message = 'A new bid has been placed.';
        event(new BidPlaced($message, $hiddenBidPrice, $carId, $userId, $nextBidPrice,$noOfBids));
    
        // Return JSON response with next bid price and success message
        return response()->json([
            'message' => 'Bid saved successfully.',
            'next_bid_price' => $nextBidPrice,
            'no_of_bids' => $noOfBids,

        ], 200);
    }

    // Function to calculate next bid price based on current bid price
    private function calculateNextBidPrice($currentBidPrice) {
        $updatedBidPrice = (float) $currentBidPrice;

        if ($updatedBidPrice < 50000) {
            $updatedBidPrice += 250;
        } else if ($updatedBidPrice >= 50000 && $updatedBidPrice < 200000) {
            $updatedBidPrice += 500;
        } else if ($updatedBidPrice >= 200000 && $updatedBidPrice < 1000000) {
            $updatedBidPrice += 1000;
        } else {
            $updatedBidPrice += 2000;
        }

        return $updatedBidPrice;
    }

    // public function updateTimer(Request $request){

 

  


    //     try {
                  
    //     $newEndTime = $request->input('new_end_time');
    //     $auction_type_id = $request->input('auction_type_id');
        
    //     $car_id = $request->input('car_id');
        
    //         // Parse the incoming time string into a Carbon instance
    //         $endTimeFormatted = Carbon::createFromFormat('H:i:s', $newEndTime)->format('H:i:s');

    //         dd($endTimeFormatted);
            
         
    //         if ($auction_type_id == '1') {
               
    //           Car:: where('id',$id)->update([
    //               'quick_auction_start_time' => $endTimeFormatted
    //               ]);
  
    //       } 
    //       if($auction_type_id == '2') {
    //           // Update the extended auction end time in the Car table
    //           CarAuction::
    //           where('car_id',$car_id)->update([
    //               'auction_time' => $newEndTime
    //           ]);
  
    //       }

    //         dd($endTimeFormatted, $auction_type_id);
    //     } catch (\Exception $e) {
    //         // Handle any parsing errors
    //         dd("Error parsing time:", $e->getMessage());
    //     }


   
    //     return response()->json(['message' => 'Timer updated successfully']);
    // }

    public function updateTimer(Request $request)
    {
        try {
            $timestamp = $request->input('new_end_time');
            $auction_type_id = $request->input('auction_type_id');
            $car_id = $request->input('car_id');
        
            if ($auction_type_id == '1') {
                // Update quick auction start time in Car table
                Car::where('id', $car_id)
                    ->update(['quick_auction_start_time' => $timestamp]);
            } elseif ($auction_type_id == '2') {
                // Update extended auction end time in CarAuction table
                CarAuction::where('car_id', $car_id)
                    ->update(
                        ['auction_time' => $timestamp]
                    );
            }
    
            return response()->json(['message' => 'Timer updated successfully']);
            
        } catch (\Exception $e) {
            // Handle any errors
            dd("Error updating timer:", $e->getMessage());
        }
    }

    // public function StoreBid(Request $request){
        
    //     $hiddenBidPrice = $request->input('hidden_bid_price');
    //     $carId = $request->input('car_id');
    //     $userId = $request->input('user_id');
    //     $type='normal bid';
        
    //     $message = 'A new bid has been placed.';

    //     CarAuction::where('car_id', $carId)->update([

    //         'current_bid_price' => $hiddenBidPrice,
    //         'no_of_bids' => DB::raw('no_of_bids + 1'),
    //     ]);

    //     $biddings = Bidding::updateOrCreate([
    //         'user_id' => $userId,
    //         'car_id'=>$carId,
    //         'bid_price'=>$hiddenBidPrice,
    //         'type'=>$type,
    //     ]);
    //     // event(new BidPlaced('hello world','my-channel','my-event'));
    //     event(new BidPlaced($message, $hiddenBidPrice, $carId, $userId));
    //     return response()->json(['message' => 'Event sent to Pusher']);
    //     // return response()->json(['message' => 'Bid saved successfully.'], 200);
    // }

    //callatee
    
    // get car data
    public function GetCarData(Request $request){
        
        $car_id = $request->input('car_id');
        $carData = CarAuction::where('car_id', $car_id)->first();
     
         if($carData){
            $bidcrr = $carData->buyCurrency->code;
         }
        
        return response()->json($carData);
    }

    public function Liveauction(){
            
        $vehiclemake = Vehiclemake::all();
        $vehfueltype = Vehicle_FuelType::all();
        $drivetype = DriveType::all();
        $auctiontype = AuctionType::all();
        $vehiclecondition = VehicleCondition::all();
        $vehicletransmission = VehicleTransmission::all();
        $vehicleNoOfCylinder = VehicleNoOfCylinder::all();
        $vehicleregionalspec = VehicleRegionalSpecs::all();
        $vehicletypes = VehicleType::all();
        $vehiclebodytype = VehicleBodyType::all();

        $currentDateTime = Carbon::now();
        $endOfDay = $currentDateTime->copy()->endOfDay(); 
        
        $twentyFourHoursLater = $currentDateTime->copy()->addHours(24);
        
      $cars = Car::with(['carMedia', 'carAuction'])
        ->where('status', '1') // Add the where clause for status
        ->whereHas('carAuction', function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
        $query->where(function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
            $query->whereDate('auction_date', '=', $currentDateTime->toDateString())
                ->where(function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
                    $query->whereTime('auction_time', '>', $currentDateTime->toTimeString())
                        ->whereTime('auction_time', '<=', $endOfDay->toTimeString());
                });
            })->orWhere(function($query) use ($currentDateTime, $twentyFourHoursLater) {
                $query->whereDate('auction_date', '=', $currentDateTime->addDay()->toDateString())
                    ->whereTime('auction_time', '<=', $twentyFourHoursLater->toTimeString());
            });
        })
        ->latest('created_at')->get();


        //get unique car model
        $carmodels = $cars->pluck('veh_car_model')->unique();

        //get unique car trimdata
        $cartrim = $cars->pluck('trimdata')->unique();

        //get unique car endine size
        $carenginesize = $cars->pluck('vehicle_engine_size')->unique();
        // dd($cars);

        return view('frontend.liveauction',compact('cars','vehiclemake','vehfueltype','drivetype','auctiontype','vehiclecondition','vehicletransmission','vehicleNoOfCylinder','vehicleregionalspec','vehicletypes','vehiclebodytype','carmodels','cartrim','carenginesize'));
    }
    
    //LoadMoreAuctionCar
    // public function LoadMoreAuctionCar(Request $request){
        
    //     $lastcarId = $request->lastCarId;
        
    //      $currentDateTime = Carbon::now();
    //     $endOfDay = $currentDateTime->copy()->endOfDay(); 
        
    //     $twentyFourHoursLater = $currentDateTime->copy()->addHours(24);
        
    //   $cars = Car::with(['carMedia', 'carAuction','carmedia','vehicleregionalspec','vehicletransmission','vehiclenoofcylinder','vehiclemake'])
    //     ->where('status', 1) 
    //     ->where('id',$lastcarId)
    //     // Add the where clause for status
    //     ->whereHas('carAuction', function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
    //     $query->where(function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
    //         $query->whereDate('auction_date', '=', $currentDateTime->toDateString())
    //             ->where(function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
    //                 $query->whereTime('auction_time', '>', $currentDateTime->toTimeString())
    //                     ->whereTime('auction_time', '<=', $endOfDay->toTimeString());
    //             });
    //         })->orWhere(function($query) use ($currentDateTime, $twentyFourHoursLater) {
    //             $query->whereDate('auction_date', '=', $currentDateTime->addDay()->toDateString())
    //                 ->whereTime('auction_time', '<=', $twentyFourHoursLater->toTimeString());
    //         });
    //     })
    //     ->latest('created_at')->take(6)->get();
        
    //       return response()->json(['loadmore' => $cars]);
       
    // }
    
    //loadmoreactioncar
     public function LoadMoreAuctionCar(Request $request){
        
        $lastcarId = $request->lastCarId;
        
         $currentDateTime = Carbon::now();
        $endOfDay = $currentDateTime->copy()->endOfDay(); 
        
        $twentyFourHoursLater = $currentDateTime->copy()->addHours(24);
        
      $cars = Car::with(['carMedia', 'carAuction','vehicleregionalspec','vehicletransmission','vehiclenoofcylinder','vehiclemake'])
        ->where('status', 1) 
        
        // Add the where clause for status
        ->whereHas('carAuction', function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
        $query->where(function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
            $query->whereDate('auction_date', '=', $currentDateTime->toDateString())
                ->where(function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
                    $query->whereTime('auction_time', '>', $currentDateTime->toTimeString())
                        ->whereTime('auction_time', '<=', $endOfDay->toTimeString());
                });
            })->orWhere(function($query) use ($currentDateTime, $twentyFourHoursLater) {
                $query->whereDate('auction_date', '=', $currentDateTime->addDay()->toDateString())
                    ->whereTime('auction_time', '<=', $twentyFourHoursLater->toTimeString());
            });
        })
        ->latest('created_at')->get();
        
          return response()->json(['loadmore' => $cars]);
       
    }
    
    //livebidding
    public function Livebidding($id){

        $carlivebidding = Car::with('carMedia','carAuction')->findOrFail($id);
        // dd($carlivebidding);
        return view('frontend.livebidding',compact('carlivebidding'));

    }
    
    //updatecarstatus
    public function updateCarStatus(Request $request){

        $car_id = $request->input('car_id');
        Car::where('id', $car_id)->update([

            'status' => '0',
        ]);
        return response()->json(['message' => 'status updated successfully.'], 200);
    }

    //  ShowextendedAuctionCar
    public function ShowextendedAuctionCar(){
      
        $currentDateTime = Carbon::now();
        $endOfDay = $currentDateTime->copy()->endOfDay(); 
        
        $twentyFourHoursLater = $currentDateTime->copy()->addHours(24);

        $extendedcars = Car::with(['carMedia', 'carAuction','vehicleregionalspec','vehicletransmission','vehiclenoofcylinder','vehiclemake'])
        ->whereHas('carAuction', function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
            $query->where(function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
                $query->whereDate('auction_date', '=', $currentDateTime->toDateString())
                    ->where(function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
                        $query->whereTime('auction_time', '>', $currentDateTime->toTimeString())
                              ->whereTime('auction_time', '<=', $endOfDay->toTimeString());
                    });
            })->orWhere(function($query) use ($currentDateTime, $twentyFourHoursLater) {
                $query->whereDate('auction_date', '=', $currentDateTime->addDay()->toDateString())
                      ->whereTime('auction_time', '<=', $twentyFourHoursLater->toTimeString());
            });
        })
        ->whereHas('carAuction', function($query) {
            $query->where('auction_type_id', 2);
        })
        ->get();
        return response()->json(['extendedcars' => $extendedcars]);
    }

    //qick acion
    public function ShowQuickAuctionCar(){

        $currentDateTime = Carbon::now();
        $endOfDay = $currentDateTime->copy()->endOfDay(); 
        
        $twentyFourHoursLater = $currentDateTime->copy()->addHours(24);

        $quickcars = Car::with(['carMedia', 'carAuction','vehicleregionalspec','vehicletransmission','vehiclenoofcylinder','vehiclemake'])
        ->whereHas('carAuction', function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
            $query->where(function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
                $query->whereDate('auction_date', '=', $currentDateTime->toDateString())
                    ->where(function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
                        $query->whereTime('auction_time', '>', $currentDateTime->toTimeString())
                              ->whereTime('auction_time', '<=', $endOfDay->toTimeString());
                    });
            })->orWhere(function($query) use ($currentDateTime, $twentyFourHoursLater) {
                $query->whereDate('auction_date', '=', $currentDateTime->addDay()->toDateString())
                      ->whereTime('auction_time', '<=', $twentyFourHoursLater->toTimeString());
            });
        })
        ->whereHas('carAuction', function($query) {
            $query->where('auction_type_id', 1);
        })
        ->get();

    // dd($quickcars);
        return response()->json(['quickcars' => $quickcars]);
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

    public function LiveauctionStickerFilter(Request $request){

        $checkedNames = $request->input('checked_names');
        
        // Get current date and time
        $currentDateTime = Carbon::now();
        $endOfDay = $currentDateTime->copy()->endOfDay();
        $twentyFourHoursLater = $currentDateTime->copy()->addHours(24);

        // Start query
        $query = CarAuction::query()->with('car.carMedia', 'car', 'car.vehicleregionalspec', 'car.vehicletransmission', 'car.vehiclenoofcylinder', 'car.vehiclemake')
            ->whereHas('car', function($carQuery) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
                $carQuery->whereHas('carAuction', function($auctionQuery) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
                    $auctionQuery->where(function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
                        $query->whereDate('auction_date', '=', $currentDateTime->toDateString())
                            ->where(function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
                                $query->whereTime('auction_time', '>', $currentDateTime->toTimeString())
                                    ->whereTime('auction_time', '<=', $endOfDay->toTimeString());
                            });
                    })->orWhere(function($query) use ($currentDateTime, $twentyFourHoursLater) {
                        $query->whereDate('auction_date', '=', $currentDateTime->addDay()->toDateString())
                            ->whereTime('auction_time', '<=', $twentyFourHoursLater->toTimeString());
                    });
                });
            });

        foreach ($checkedNames as $name) {
            $query->where($name, 1);
        }
        $filteredSticker = $query->get();

        return response()->json(['filteredSticker' => $filteredSticker]);
    }

        public function SidebarFilter(Request $request){

            $selectedId = $request->input('selected_id'); 
            $selectedValue = $request->input('selected_value');
            $selectedTextValue = $request->input('selected_text');  

            //time variable
            $currentDateTime = Carbon::now();
            $endOfDay = $currentDateTime->copy()->endOfDay();
            $twentyFourHoursLater = $currentDateTime->copy()->addHours(24);

            $carsQuery = Car::query()
            ->whereHas('carAuction', function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
                $query->where(function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
                    $query->whereDate('auction_date', '=', $currentDateTime->toDateString())
                        ->where(function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
                            $query->whereTime('auction_time', '>', $currentDateTime->toTimeString())
                                  ->whereTime('auction_time', '<=', $endOfDay->toTimeString());
                        });
                })->orWhere(function($query) use ($currentDateTime, $twentyFourHoursLater) {
                    $query->whereDate('auction_date', '=', $currentDateTime->addDay()->toDateString())
                          ->whereTime('auction_time', '<=', $twentyFourHoursLater->toTimeString());
                });
            });
            
            if ($selectedValue && Car::where($selectedId, $selectedTextValue)->exists()) {

                $carsQuery->where($selectedId, $selectedTextValue);
            } else {
                $carsQuery->where($selectedId, $selectedValue);
            }

        $sidebarfilteredCars = $carsQuery->with('carmedia', 'carauction', 'vehicletype', 'vehiclecondition', 'vehiclemake', 'vehiclefueltype', 'drivetype', 'auctiontype', 'vehicletransmission', 'vehiclenoofcylinder', 'vehicleregionalspec')->get();
        //    dd($sidebarfilteredCars);

        return response()->json(['sidebarfilteredCars' => $sidebarfilteredCars]);
    }
    
    public function RangefilterFilter(Request $request){
        
        //time variable
        $currentDateTime = Carbon::now();
        $endOfDay = $currentDateTime->copy()->endOfDay();
        $twentyFourHoursLater = $currentDateTime->copy()->addHours(24);

        $min = $request->input('min_value');
        $max = $request->input('max_value');
        $name = $request->input('Name');
        
        $query = Car::query()->with('carmedia','vehicleregionalspec','vehicletransmission','vehiclenoofcylinder','vehiclemake')
        ->whereHas('carAuction', function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
            $query->where(function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
                $query->whereDate('auction_date', '=', $currentDateTime->toDateString())
                    ->where(function($query) use ($currentDateTime, $endOfDay, $twentyFourHoursLater) {
                        $query->whereTime('auction_time', '>', $currentDateTime->toTimeString())
                              ->whereTime('auction_time', '<=', $endOfDay->toTimeString());
                    });
            })->orWhere(function($query) use ($currentDateTime, $twentyFourHoursLater) {
                $query->whereDate('auction_date', '=', $currentDateTime->addDay()->toDateString())
                      ->whereTime('auction_time', '<=', $twentyFourHoursLater->toTimeString());
            });
        });

        $query->whereBetween($name,[$min, $max]);

        $filterederange = $query->get();
        // dd($filterederange);

        return response()->json(['filterederange' => $filterederange]);
    }
    
    // chassis perfect
     public function chassisperfectimages(Request $request){

        $carId = $request->input('car_id');
        $images = CarChassisPerfect::where('car_id', $carId)->get();
        return response()->json($images);
        
     }
    

   
}

