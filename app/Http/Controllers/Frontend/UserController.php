<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\CarAuction;
use App\Models\UserDocument;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Models\Booking;
use App\Models\User;
use App\Models\Car;
//For Mail
use Illuminate\Support\Str;
use DB; 
use Carbon\Carbon; 
use Mail; 
use App\Mail\SendMail; 
use App\Models\CarView;

class UserController extends Controller
{
    //Signup
    public function Signup(){

        return view('frontend.signup');   
    }
    
    //login
    public function Login(){
        
       return view('frontend.login');   
    }
    
    //Store signup
    public function Store_signup(Request $request){
      
        $country_code = $request->country_code;
        
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users',
            'mobile_no' => 'required|numeric',
            'password' => 'required|confirmed',
        ]);
        $type = 0;
        $user = new User();
        $user->email = $validatedData['email'];
        $user->country_code = $country_code;
        $user->mobile_no = $validatedData['mobile_no'];
        $user->password = Hash::make($validatedData['password']);
        $user->type = $type; 
        
        //generate random otp
        $otp = mt_rand(1000, 9999);
        $user->otp = $otp;
        $user->save();

        return redirect()->route('user.getotp', ['userId' => $user->id])->with('success', 'Sign up successful! You can now log in.');
    }

    //Otp
    public function Otp($userId){
        
        $user = User::find($userId);
        $otp = $user->otp;
  
        return view('frontend.userhub.otp', ['userId' => $userId,'otp'=>$otp ]);
    }

    //StoreOtp
    public function StoreOtp(Request $request){

        $userId = $request->input('user_id');
        $user = User::find($userId);
    
        if (!$user) {
            return back()->withErrors(['user_id' => 'User not found.']);
        }
        $enteredOtp = implode('', $request->otp);
        $storedOtp = $user->otp;

        if ($enteredOtp == $storedOtp) {
                Auth::login($user);
                return redirect()->route('user.home');
        } else { 
            
            return back()
            ->withInput($request->only('user_id'))
            ->withErrors(['otp' => 'Invalid OTP. Please try again.']);
        }
    }
 
    //ForgotPassword
    public function ForgotPassword(){
        
        return view('frontend.forgotpassword');
    }
    
    //StoreForgotPassword
    public function StoreForgotPassword(Request $request){
         
         
    //       $request->validate([
    //         'email' => 'required|email|exists:users',
    //     ]);
    //   $token = Str::random(6);
      
    //     DB::table('password_resets')->insert([
    //         'email' => $request->email, 
    //         'token' => $token, 
    //         'created_at' => Carbon::now()
    //       ]);

    // $email = $request->email;
    //     // Mail::send('frontend.mail.forgotpasswordmail', ['token' => $token], function($message) use($request){
    //     //     $message->to($request->email);
    //     //     $message->subject('Reset Password');
    //     // });

    //  Mail::to($request->email)->send(new SendMail($token));
    //     return back()->with('message', 'We have e-mailed your password reset link!');
    }
    

    //Dashboard
    public function Dashboard(){


        $userId = auth()->id();
  
        $totalWatchlistCount = CarView::where('user_id', $userId)->count();
        // dd($totalWatchlistCount);
        return view('frontend.dashboard',compact('totalWatchlistCount'));
    }
    
    //MyVehicle
    public function MyVehicle(){

        return view('frontend.userhub.myvehicle');
    }

    //Wonvehicles
    public function Wonvehicles(){

        return view('frontend.userhub.wonvehicles');
    }
    
    //Lostbid
    public function Lostbid(){

        return view('frontend.userhub.lostbid');
    }

    //Profile
    public function Profile(){

        return view('frontend.userhub.profile');
    }
    
    //Pricingplan
    public function Pricingplan(){

        return view('frontend.userhub.pricingplan');
    }
    
    //UpdateProfile
    public function UpdateProfile(Request $request)
    {
        // dd($request->all());
        $user_id = $request->id;
        $update_user = User::find($user_id);
    
        if (!$update_user) {
            return redirect()->back()->withErrors(['error' => 'User not found.']);
        }

        if($request->name){

            $update_user->name = $request->input('name');
        }
        if ($request->filled('new_password')) {

            $update_user->password = Hash::make['new_password'];
        }
        $update_user->save();       
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }    
    

    public function UpdateProfileDocument(Request $request){

        $user_id = $request->id;
        
        $date_of_birth = implode('-',array_reverse($request->date_of_birth));
        $expiration_date = implode('-',array_reverse($request->expiration_date));

            $userDocuments = UserDocument::updateOrCreate([
                    'user_id' => $user_id,
                    'id_type' => $request->input('id_type'),
                    'country' => $request->input('country'),
                    'identification_no' => $request->input('identification_no'),
                    'date_of_birth' => $date_of_birth,
                    'expiration_date' => $expiration_date,
            ]);

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

     public function GetCartInfo(Request $request){
           
        $car_id = $request->input('car_id');
        $user_id = $request->input('user_id');

        $cartpageinfo = Booking::with('car.carAuction')
        ->where('car_id', $car_id)
        ->where('user_id', $user_id)
        ->firstOrFail();
        
        return response()->json($cartpageinfo);
    }
}
