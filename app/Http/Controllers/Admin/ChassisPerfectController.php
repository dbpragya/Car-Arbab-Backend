<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarChassisPerfect;

class ChassisPerfectController extends Controller{
    
    public function uploadImage(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'images/canvas/' . $filename; 
            
            // Move the file to the designated folder
            $file->move(public_path('images/canvas'), $filename);
            
            // Store the file path in the database
            $store = CarChassisPerfect::create([
                'car_id' => $request->input('car_id'),
                'xcord' => $request->input('xcord'),
                'ycord' => $request->input('ycord'),
                'image' => $filePath,
            ]);
    
            return response()->json(['success' => true, 'filename' => $filePath]);
        }
        return response()->json(['success' => false, 'message' => 'No image uploaded']);
    }

    public function getImages(Request $request)
    {
        $carId = $request->input('car_id');
        $images = CarChassisPerfect::where('car_id', $carId)->get();
        
        return response()->json($images);
    }

}
