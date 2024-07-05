<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactusController extends Controller
{
    //show contact form
    public function Contactus(){
        
        return view('frontend.contactus');
    }

    //store contact form
    public function ContactusStore(Request $request){

        // dd($request->all());
        $validatedData = $request->validate([
            'Name' => 'required|string|max:255',
            'Email' => 'required|email|max:255',
            'Phone' => 'required|string|max:20',
            'Subject' => 'required|string|max:255',
            'Message' => 'required|string',
        ]);
    
        $contact = Contact::create($validatedData);
    
      return redirect()->back()->with('success','Contact Form Submitted Successfully');
    }
}
