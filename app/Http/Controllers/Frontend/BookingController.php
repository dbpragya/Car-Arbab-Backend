<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\CarAuction;
use App\Models\CarMedia;
use App\Models\Booking;
use App\Models\Car;

class BookingController extends Controller
{

    public function Cart(Request $request){

        $car_id = $request->car_id;
        $user_id = $request->user_id;
        
        $cartinfo = Car::with('carMedia', 'carAuction','bookings')
                ->where('id', $car_id)
                ->firstOrFail();
                // dd($cartinfo);

        return view('frontend.userhub.cart',compact('cartinfo','user_id','car_id'));
    }

    public function Checkout(Request $request){

        $car_id = $request->query('car_id');
        $user_id = $request->user_id;
        $total_amount = $request->total_amount;
        return view('frontend.userhub.checkout',compact('total_amount','car_id','user_id'));
    }

    public function CheckoutStatus(Request $request){

        $car_id = $request->input('car_id');
        $user_id = $request->input('user_id');
        $total_amount = $request->input('total_amount');

        $bookings = Booking ::where('user_id', $user_id)
        ->where('car_id', $car_id)
        ->first();

        if($bookings){
            $status = 'paid';
            $bookings->payment_status = $status;
            $bookings->payment_by =  $user_id;
        
            $saved = $bookings->save();

            if ($saved) {
                return response()->json(['message' => 'Payment status updated successfully.'], 200);
            } else {
                return response()->json(['message' => 'Failed to update payment status.'], 500);
            }
        } else {
            return response()->json(['message' => 'Booking not found.'], 404);
        }
    }


    public function BuyNowCar(Request $request){

        $car_id = $request->input('car_id');
        $user_id = $request->input('user_id');
       
        $buy_now_price = $request->input('buy_now_price');
        $type = "buy now";
      
        // dd($car_id,$user_id,$buy_now_price);
        $bookings = Booking::updateOrCreate([
            'user_id' => $user_id,
            'car_id' => $car_id,
            'type' => $type,
            'car_price' => $buy_now_price
        ]);
        return response()->json([
            'message' => 'Booking submitted successfully!.',
            'car_id' => $car_id,
            'user_id' => $user_id,
            'buy_now_price' => $buy_now_price
        ]);     
    }

    public function StoreCarService(Request $request){
        
        $car_id = $request->input('car_id');
        $user_id = $request->input('user_id');
        $checkedServicesNames = $request->input('CheckedServicesNames');
    
        if (!is_array($checkedServicesNames)) {
            $checkedServicesNames = explode(',', $checkedServicesNames); 
        }
        $booking = Booking::where('car_id', $car_id)
            ->where('user_id', $user_id)
            ->firstOrFail();

        foreach ($checkedServicesNames as $columnName) {
            $booking->$columnName = '1';
        }
        $booking->save();
    
        return response()->json(['message' => 'Car service details saved successfully.'], 200);
    }

    public function RemoveCarService(Request $request){
       
        $car_id = $request->input('car_id');
        $user_id = $request->input('user_id');
        $removedServicesNames = $request->input('RemovedServicesNames');

        if (!is_array($removedServicesNames)) {
            $removedServicesNames = explode(',', $removedServicesNames); 
        }

        $booking = Booking::where('car_id', $car_id)
            ->where('user_id', $user_id)
            ->firstOrFail();

        foreach ($removedServicesNames as $columnName) {
            $booking->$columnName = null;
        }
        $booking->save();

        return response()->json(['message' => 'Car service details removed successfully.'], 200);
    }  
}
