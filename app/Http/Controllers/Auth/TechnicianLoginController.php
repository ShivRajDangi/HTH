<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TechnicianLoginController extends Controller
{
     public function __construct()
    {
        $this->middleware('guest:technician')->except('logout');
    }
    public function showLoginForm() {
    	return redirect('startup-technician');
    }
    public function login(Request $request) {
    	//validiate form data

    	$this->validate($request,
    		[
    			'email' => 'required|string|email',
    			'password' => 'required|string|min:8',

    		]
    	);

    	// attemp to login as a admin
    	if (Auth::guard('technician')->attempt(['email' => $request->email,'password' => $request->password,'status'=>'1'],$request->remember)) {

    	    //if successful
    	    return redirect()->intended(route('technician.dashboard'));

			}else{
                
               //if unsuccessful
                return redirect()->back()->with($request->only('email','remember'));
  
            }
        
			
    }
    public function logout(Request $request) {
    	
    	Auth::guard('technician')->logout();
    	return redirect('/');
    }
}
