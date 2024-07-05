<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class TransactionHistoryController extends Controller{
    
    //Show tax form
     public function TransactionHistory(){
    
         $transactionhistory = Booking::all();
         return view('admin.transactionhistory',compact('transactionhistory'));
     }
}