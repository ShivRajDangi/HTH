<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Technician;
use App\Models\User;
use App\Models\Query;
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
        $all_queries = Query::all();
        $all_technicians = Technician::all();
        return view('admin.admin',['all_customers'=> $all_customers,'all_technicians'=> $all_technicians ,'all_queries'=> $all_queries ,]);
    }

    public function technicianUpdate(Request $request,$status) {
        
       if($status == '0') {

            if (Technician::where('id',$request->id)->update(['status'=>'1'])) {
                /*return Redirect::back()->withInput()->withError(['msg'=> 'technician has been activated']);*/
                return redirect()->back()->with('message', 'Expert has been Activated');
            }
        }
        if($status == '1') {

            if (Technician::where('id',$request->id)->update(['status'=>'0'])) {
                /*return Redirect::back()->withInput()->withError(['msg'=> 'technician has been Deactivated']);*/
                return redirect()->back()->with('message', 'Expert has been Deactivated');
            }
        }
        
    }
    public function queryDeleteById(Request $request) {
        
    }
}
