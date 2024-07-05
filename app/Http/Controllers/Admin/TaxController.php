<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tax;

class TaxController extends Controller{
    
    //Show tax form
     public function Tax(){
         
         $tax = Tax::where('id',1)->first();
         return view('admin.tax',compact('tax'));
     }
     
     //store tax 
    public function StoreTax(Request $request){
        
        $request->validate([
            'tax_added' => 'required|numeric',
        ]);
       $tax = Tax:: where('id',1)->first();
        if ($tax) {
            
            // Update existing tax record
            $tax->tax_added = $request->input('tax_added');
        } else {
            
            // Create new tax record
            $tax = new Tax;
            $tax->tax_added = $request->input('tax_added');
        }
        $tax->save();
        return redirect()->back()->with('success','Tax updated successfully');
    }
}