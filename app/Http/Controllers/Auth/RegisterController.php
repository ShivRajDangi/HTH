<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
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
    protected $redirectTo = 'customer-home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
*/
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    /*protected function create(array $data)
    {dd('testing');
        return User::create([
            'full_name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }*/
    public function showRegisterForm() {
        return view('frontend.pages.startup-customer');
    }
    public function register(Request $request) {
        //validiate form data

        $this->validate($request,
            [
                'customer_email' => 'required|email',
                'customer_password' => 'required|min:8',

            ]
        );

// create user
        
        try{
            $customer = User::create([
                'full_name' => $request->customer_name,
                'email' => $request->customer_email,
                'password' => Hash::make($request->customer_password),
            
            ]);

            //login technician
           /* Auth::guard('web')->loginUsingId($customer->id);*/
            return redirect()->route('customer.dashboard');

        }catch(\Exception $exception){
            return redirect()->back()->withInput($request->only('name','email'));

        }

    }

}
