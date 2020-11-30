<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Query;
use App\Models\Technician;
use App\Models\InterestedTechnician;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
/*use Auth;*/

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $all_query = Query::where('user_id',Auth::user()->id)->orderby('id','desc')->get();
        /*dd($all_query);*/
        $customer_details = User::where('id',Auth::user()->id)->first();
       /* dd($customer_details->email);*/
        return view('Customer.customer',['all_query'=>$all_query,'customer_details'=>$customer_details]);
    }

    public function submitQuery(Request $request)
    {
        $imageName = '';
        if ($request->file('image')) {

            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
        }

        /*$imageName = $request->file('image')->store('Images');*/


        /*$image->name = $imageName;
        $image->path = '/storage/'.$path;*/

        $query = new Query();
        $query->user_id = Auth::user()->id;
        $query->query = $request->myquery;
        $query->query_background = $request->field;
        $query->image = $imageName;

       if($query->save()){
        return redirect()->back();
       } 
    }

    public function showAllQuery(){
        
    }

    public function singleQueryPage($id){

        $single_query_details = Query::findOrFail($id);
        $all_technicians = InterestedTechnician::where('query_id',$id)->get();
        /*dd($all_technicians);*/
        return view('Customer.single-query',['single_query_details'=>$single_query_details,'all_technicians'=>$all_technicians]);
    }

    public function updateProfile(Request $request) {

        $customer = User::findOrFail(Auth::user()->id);
        $customer->full_name = $request->customer_name;
        $customer->bio = $request->customer_bio;
        $customer->address = $request->customer_address;
        $customer->mobile = $request->customer_mobile;
        if ($request->file('customer_photo')) {
            $imageName = time().'.'.$request->customer_photo->getClientOriginalExtension();
            $request->customer_photo->move(public_path('/uploads'), $imageName);
            $customer->profile_photo = $imageName;
        }
        if($customer->save()) {
            return redirect()->back();
        }

    }
}
