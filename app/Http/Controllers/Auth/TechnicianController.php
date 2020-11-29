<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Query;
use App\Models\Technician;
use App\Models\InterestedTechnician;
use Illuminate\Support\Facades\Auth;

class TechnicianController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:technician');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $all_queries = Query::where('query_background',Auth::user()->field)->get();
        /*dd($all_queries);*/
        $technician_details = Technician::where('id',Auth::user()->id)->first();
        
        return view('technician.technician',['all_queries'=>$all_queries,'technician_details'=>$technician_details]);
    }

    public function updateProfile(Request $request) {

        $technician = Technician::findOrFail(Auth::user()->id);
        $technician->full_name = $request->technician_name;
        $technician->bio = $request->technician_bio;
        $technician->address = $request->technician_address;
        $technician->mobile = $request->technician_mobile;
        $technician->field = $request->technician_field;
        $technician->experience = $request->technician_experience;
        if ($request->file('technician_photo')) {
            $imageName = time().'.'.$request->technician_photo->getClientOriginalExtension();
            $request->technician_photo->move(public_path('/uploads'), $imageName);
            $technician->profile_photo = $imageName;
        }
        if($technician->save()) {
            return redirect()->back();
        }

    }
    public function interestedToQuery(Request $request) {

        $technicans = Technician::where('id', Auth::user()->id)->first();

        $interestedTechnician = new InterestedTechnician;
        $interestedTechnician->query_id = $request->query_id;
        $interestedTechnician->technician_id = $technicans->id;
        $interestedTechnician->technician_name = $technicans->full_name;
        $interestedTechnician->technician_experience = $technicans->experience;
        $interestedTechnician->technician_field = $technicans->field;
        $interestedTechnician->technician_profession = $technicans->profession;
        $interestedTechnician->technician_photo = $technicans->profile_photo;
        if($interestedTechnician->save()) {
            return redirect()->back()->with(['msg'=>'submitted your response']);
        }
        /*dd($request->query_id);*/
    }
}
