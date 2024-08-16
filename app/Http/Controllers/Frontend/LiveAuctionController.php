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

class LiveAuctionController extends Controller
{

    ///liveaction page
    public function Liveauction(){
            
        // $cars = Car::with('carMedia','carAuction')->get();
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
            ->get();

        //get unique car model
        $carmodels = $cars->pluck('veh_car_model')->unique();

        //get unique car trimdata
        $cartrim = $cars->pluck('trimdata')->unique();

        //get unique car endine size
        $carenginesize = $cars->pluck('vehicle_engine_size')->unique();
        // dd($cars);

        return view('frontend.liveauction',compact('cars','vehiclemake','vehfueltype','drivetype','auctiontype','vehiclecondition','vehicletransmission','vehicleNoOfCylinder','vehicleregionalspec','vehicletypes','vehiclebodytype','carmodels','cartrim','carenginesize'));
    }

    //liveaction sticker filter
    public function LiveauctionStickerFilter(Request $request){

        $checkedNames = $request->input('checked_names');
        
        // Get current date and time
        $currentDateTime = Carbon::now();
        $endOfDay = $currentDateTime->copy()->endOfDay();
        $twentyFourHoursLater = $currentDateTime->copy()->addHours(24);

        // Start query
        $query = CarAuction::query()
            ->with('car.carMedia', 'car', 'car.vehicleregionalspec', 'car.vehicletransmission', 'car.vehiclenoofcylinder', 'car.vehiclemake')
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

    //liveaction sidebar filter
    public function LiveauctionSidebarFilter(Request $request){

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

        return response()->json(['sidebarfilteredCars' => $sidebarfilteredCars]);
    }
    
    //liveaction range filters
    public function LiveauctionRangefilterFilter(Request $request){
        
        //time variable declaration
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
        
        return response()->json(['filterederange' => $filterederange]);
    }

    // extended auction
    public function ShowextendedAuctionCar(){
      
        $currentDateTime = Carbon::now();
        $endOfDay = $currentDateTime->copy()->endOfDay(); 
        
        $twentyFourHoursLater = $currentDateTime->copy()->addHours(24);

        $extendedcars = Car::with(['carMedia', 'carAuction'])
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

    //quick acion
    public function ShowQuickAuctionCar(){

        $currentDateTime = Carbon::now();
        $endOfDay = $currentDateTime->copy()->endOfDay(); 
        
        $twentyFourHoursLater = $currentDateTime->copy()->addHours(24);

        $quickcars = Car::with(['carMedia', 'carAuction'])
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

   
        return response()->json(['quickcars' => $quickcars]);
    }

}
