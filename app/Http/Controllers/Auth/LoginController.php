<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request): RedirectResponse
    {   
        $input = $request->all();
     
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
     
        // if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))){
        //     if (auth()->user()->type == 'admin') {
        //         return redirect()->route('admin.dashboard');

        //     }elseif(auth()->user()->type =='inspector'){

        //         return redirect()->route('inspector.dashboard');
                
        //     } elseif (auth()->user()->type == 'user') {

        //         return redirect()->route('user.home');
        //     }
        //     else{
        //         return redirect()->route('home');
        //     }
        //  }else 
        //  {
        //     if ($input['email'] && $input['password']) {
        //         return redirect()->route('user.login') 
        //             ->withInput($request->only('email'))
        //             ->withErrors([
        //                 'email' => 'Email address or password is incorrect!.'
        //             ]);
        //         } else {
         
        //         return redirect()->route('login') 
        //             ->withInput($request->only('email'))
        //             ->withErrors([
        //                 'email' => 'Please provide both email address and password!.'
        //             ]);
        //     }
        // }

        if (auth()->attempt(['email' => $input['email'], 'password' => $input['password']])) {
            if (auth()->user()->type == 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif (auth()->user()->type == 'inspector') {
                return redirect()->route('inspector.dashboard');
            } elseif (auth()->user()->type == 'user') {
                return redirect()->route('user.home');
            } else {
                return redirect()->route('home');
            }
        } else {
            $user = \App\Models\User::where('email', $input['email'])->first();
        
            if ($user && $user->type == 'admin') {
                return redirect()->route('login')
                    ->withInput($request->only('email'))
                    ->withErrors([
                        'email' => 'Email address or password is incorrect!.'
                    ]);
            }
        
            if ($input['email'] && $input['password']) {
                return redirect()->route('user.login')
                    ->withInput($request->only('email'))
                    ->withErrors([
                        'email' => 'Email address or password is incorrect!.'
                    ]);
            } else {
                return redirect()->route('login')
                    ->withInput($request->only('email'))
                    ->withErrors([
                        'email' => 'Please provide both email address and password!.'
                    ]);
            }
        }
        
          
    }
}
