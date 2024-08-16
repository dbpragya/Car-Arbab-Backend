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
use DB;

class ListController extends Controller
{
    //
    public function List(Request $request){

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

        // $cars = Car::with('carMedia','carAuction')->take(6)->get();

        $cars = Car::with('carMedia','carAuction')->get();
          
        //get unique carmodels dropdown
        $carmodels = $cars->pluck('veh_car_model')->unique();

        //get unique car trimdata
        $cartrim = $cars->pluck('trimdata')->unique();

        //get unique car endine size
        $carenginesize = $cars->pluck('vehicle_engine_size')->unique();

        return view('frontend.list',compact('carenginesize','carmodels','cartrim','vehiclebodytype','vehiclecondition','vehicletypes','vehicleregionalspec','auctiontype','cars','vehiclemake' ,'vehfueltype','vehicleNoOfCylinder','vehicletransmission','drivetype'));
    }

    //List sidebar select Filter
    public function filterMake(Request $request)
    {
        $selectedId = $request->input('selected_id'); 
        $selectedValue = $request->input('selected_value');
        $selectedTextValue = $request->input('selected_text');  
        $carsQuery = Car::query();

        if ($selectedValue && Car::where($selectedId, $selectedTextValue)->exists()) {

            $carsQuery->where($selectedId, $selectedTextValue);
        } else {
            $carsQuery->where($selectedId, $selectedValue);
        }
        $filteredCars = $carsQuery->with('carmedia', 'carauction', 'vehicletype', 'vehiclecondition', 'vehiclemake', 'vehiclefueltype', 'drivetype', 'auctiontype', 'vehicletransmission', 'vehiclenoofcylinder', 'vehicleregionalspec')->get();
        return response()->json(['filteredCars' => $filteredCars]);
    }


    // FilterMakeAuctionType
    public function FilterMakeAuctionType(Request $request)
    {
        $selectedId = $request->input('selected_id'); 
        $selectedValue = $request->input('selected_value');
        $selectedTextValue = $request->input('selected_text');  
        // $carsQuery = Car::query();
        $query = CarAuction::query()->with('car.carMedia','car','car.vehicleregionalspec','car.vehicletransmission','car.vehiclenoofcylinder','car.vehiclemake');
        $query->where( $selectedId , $selectedValue)->get();
      
        $filteredauction = $query->get();      
        return response()->json(['filteredauction' => $filteredauction]);
    }

    //List sticker filtered 
    public function StickerFilter(Request $request){

        $checkedNames = $request->input('checked_names');
        $query = CarAuction::query()->with('car.carMedia','car','car.vehicleregionalspec','car.vehicletransmission','car.vehiclenoofcylinder','car.vehiclemake');
        foreach ($checkedNames as $name) {
            
            $query->where($name, 1);
        }
        $filteredSticker = $query->get();

        return response()->json(['filteredSticker' => $filteredSticker]);
    }
    
    //List range filtered
    public function Rangefilter(Request $request){

        $min = $request->input('min_value');
        $max = $request->input('max_value');
        $name = $request->input('Name');
        $query = Car::query()->with('carmedia','vehicleregionalspec','vehicletransmission','vehiclenoofcylinder','vehiclemake');
        $query->whereBetween($name,[$min, $max]);

        $filteredMileagerange = $query->get();
        return response()->json(['filteredMileagerange' => $filteredMileagerange]);
    }
}
