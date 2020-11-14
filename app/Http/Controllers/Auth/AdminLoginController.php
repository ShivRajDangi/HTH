<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    public function showLoginForm() {
    	return view('auth.admin-login');
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
    	if (Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password],$request->remember)) {

    	    //if successful
    	    return redirect()->intended(route('admin.dashboard'));

			}
			 //if unsuccessful
	return redirect()->back()->with($request->only('email','remember'));

    }
    public function logout(Request $request) {
    	
    	Auth::guard('admin')->logout();
    	return redirect('/');
    }
}
