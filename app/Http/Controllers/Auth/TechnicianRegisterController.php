<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Technician;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TechnicianRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    /*protected $redirectTo = RouteServiceProvider::HOME;*/
    protected $redirectTo = 'admin/technician';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:technician');
    }

    public function showRegisterForm() {
    	return view('auth.technician-register');
    }
    public function register(Request $request) {
    	//validiate form data

    	$this->validate($request,
    		[
    			'email' => 'required|string|email',
    			'password' => 'required|string|min:8',

    		]
    	);
// create admin user
    	try{
    		$admin = Technician::create([
    			'full_name' => $request->name,
    			'email' => $request->email,
    			'password' => Hash::make($request->password),
    			'mobile' => $request->mobile,
    		
    		]);

    		//login technician
    		Auth::guard('technician')->loginUsingId($admin->id);
    		return redirect()->route('technician.dashboard');

    	}catch(\Exception $exception){
    		return redirect()->back()->withInput($request->only('name','email'));

    	}

    } 
}
