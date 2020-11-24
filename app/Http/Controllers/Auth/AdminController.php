<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Technician;
use App\Models\User;
class AdminController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $all_customers = User::all();
        $all_technicians = Technician::all();
        return view('admin.admin',['all_customers'=> $all_customers,'all_technicians'=> $all_technicians ,]);
    }
}
