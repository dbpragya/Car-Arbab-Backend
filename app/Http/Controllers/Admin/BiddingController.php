<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarMedia;
use App\Models\Bidding;
use App\Models\CarAuction;
use App\Models\Car;
use Carbon\Carbon;

class BiddingController extends Controller{
    
    //Show tax form
    // public function Viewbidding()
    // {
        
    //     // Retrieve auction details from request or any other source (e.g., database)
    //     $cardetails = Car::with(['carMedia', 'carAuction'])
    //                      ->where('status', '1')
    //                      ->where('id', '103')
    //                      ->first();
    
    //     if (!$cardetails || !$cardetails->carAuction) {
    //         return response()->json([
    //             'message' => 'Car details or auction details not found.',
    //         ], 404);
    //     }
    
    //     $auctionDate = $cardetails->carAuction->auction_date;
    //     $auctionEndTime = $cardetails->carAuction->auction_time; // Assuming this is the end time
    
    //     // Calculate auction start and end times
    //     $auctionEndDateTime = Carbon::parse($auctionDate . ' ' . $auctionEndTime);
    
    //     // Calculate auction start time (for example, start time is 1 hour before end time)
    //     $auctionStartDateTime = $auctionEndDateTime->copy()->subHour(); // Adjust as per your actual logic
    
    //     // Retrieve the highest bid within the auction time window
    //     $highestBid = Bidding::where('car_id', $cardetails->id)
    //                          ->where('created_at', '>=', $auctionStartDateTime)
    //                          ->where('created_at', '<=', $auctionEndDateTime)
    //                          ->orderBy('bid_price', 'desc')
    //                          ->first();
    
    //     if ($highestBid) {
    //         // $highestBid now contains the highest bid placed during the auction period
    //         $highestBidderId = $highestBid->user_id;
    //         $highestBidAmount = $highestBid->bid_price;
    
    //         // You can return or further process $highestBidderId and $highestBidAmount here
    //         return response()->json([
    //             'highest_bidder_id' => $highestBidderId,
    //             'highest_bid_amount' => $highestBidAmount,
    //         ]);
    //     } else {
    //         // No bids found within the auction period
    //         return response()->json([
    //             'message' => 'No bids found within the auction period.',
    //         ], 404);
    //     }
    // }


// public function Viewbidding() {
//     // Retrieve all cars with auction details
//     $cars = Car::with(['carMedia', 'carAuction'])
//                 ->where('status', '1')
//                 ->get();

//     // Array to store formatted auction details
//     $auctionDetails = [];

//     // Loop through each car
//     foreach ($cars as $car) {
//         if (!$car->carAuction) {
//             continue; 
//         }

//         $auctionDate = $car->carAuction->auction_date;
//         $auctionEndTime = $car->carAuction->auction_time; // Assuming this is the end time

//         // Calculate auction start and end times
//         $auctionEndDateTime = Carbon::parse($auctionDate . ' ' . $auctionEndTime);

//         // Calculate auction start time (for example, start time is 1 hour before end time)
//         $auctionStartDateTime = $auctionEndDateTime->copy()->subHour(); // Adjust as per your actual logic

//         // Retrieve the highest bid within the auction time window for this car
//         $highestBid = Bidding::where('car_id', $car->id)
//                             ->where('created_at', '>=', $auctionStartDateTime)
//                             ->where('created_at', '<=', $auctionEndDateTime)
//                             ->orderBy('bid_price', 'desc')
//                             ->first();

//         // Prepare auction details to be displayed
//         $auctionDetails[] = [
//             'id' => $car->id,
//             'lot_number' => $car->carAuction->lot_number, 
//             'highest_bidder' => $highestBid && $highestBid->user ? $highestBid->user->name : 'No bids', // Assuming 'user' is the relationship to the user who placed the bid
//             'car_make' => $car->veh_car_make_id,
//             'car_model' => $car->veh_car_model,
//             'reserve_price' => $car->carAuction->reserve_price,
//             'bid_price' => $highestBid ? $highestBid->bid_price : 'No bids',
//             'buy_now_price' => $car->carAuction->buy_now_price,
          
//         ];
//     }

//     // Return the auction details to the view
//     return view('admin.viewbidding', compact('auctionDetails'));
// }

public function Viewbidding() {
    // Retrieve all cars with auction details
    $cars = Car::with(['carMedia', 'carAuction'])
                ->where('status', '1')
                ->get();

    // Array to store formatted auction details
    $auctionDetails = [];

    // extended action
    foreach ($cars as $car) {
        if (!$car->carAuction) {
            continue; 
        }

        $auctionDate = $car->carAuction->auction_date;
        $auctionEndTime = $car->carAuction->auction_time; 

        $auctionEndDateTime = Carbon::parse($auctionDate . ' ' . $auctionEndTime);
        $auctionStartDateTime = $auctionEndDateTime->copy()->subHour(); 

        $highestBid = Bidding::where('car_id', $car->id)
                            ->where('created_at', '>=', $auctionStartDateTime)
                            ->where('created_at', '<=', $auctionEndDateTime)
                            ->orderBy('bid_price', 'desc')
                            ->first();

        // Check if there is a highest bid for this car
        if ($highestBid) {
            
            $auctionDetails[] = [
                'id' => $car->id,
                'lot_number' => $car->carAuction->lot_number, 
                'highest_bidder' => $highestBid->user ? $highestBid->user->name : 'No bids', 
                'car_make' => $car->vehiclemake->name,
                'car_model' => $car->veh_car_model,
                'reserve_price' => $car->carAuction->reserve_price,
                'bid_price' => $highestBid->bid_price,
                'buy_now_price' => $car->carAuction->buy_now_price,
            ];
        }
    }
    
    //loop car for qick action
       foreach ($cars as $car) {
        if (!$car->carAuction) {
            continue; 
        }

        $auctionDate = $car->quick_auction_start_date;
        $auctionEndTime = $car->quick_auction_start_time; 

        $auctionEndDateTime = Carbon::parse($auctionDate . ' ' . $auctionEndTime);
        $auctionStartDateTime = $auctionEndDateTime->copy()->subHour(); 

        $highestBid = Bidding::where('car_id', $car->id)
                            ->where('created_at', '>=', $auctionStartDateTime)
                            ->where('created_at', '<=', $auctionEndDateTime)
                            ->orderBy('bid_price', 'desc')
                            ->first();

        // Check if there is a highest bid for this car
        if ($highestBid) {
            // Prepare auction details to be displayed
            $auctionDetails[] = [
                'id' => $car->id,
                'lot_number' => $car->carAuction->lot_number,
                'highest_bidder' => $highestBid->user ? $highestBid->user->name : 'No bids', 
                'car_make' => $car->vehiclemake->name,
                'car_model' => $car->veh_car_model,
                'reserve_price' => $car->carAuction->reserve_price,
                'bid_price' => $highestBid->bid_price,
                'buy_now_price' => $car->carAuction->buy_now_price,
            ];
        }
    }
    

    // Return the auction details to the view
    return view('admin.viewbidding', compact('auctionDetails'));
}



   
}