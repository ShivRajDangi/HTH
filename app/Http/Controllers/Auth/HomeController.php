<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Query;
use Auth;

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
        $all_query = Query::all();
        /*dd($all_query);*/
        return view('Customer.customer',['all_query'=>$all_query]);
    }

    public function submitQuery(Request $request)
    {
        $query = new Query();
        $query->user_id = Auth::user()->id;
        $query->query = $request->myquery;
        $query->query_background = $request->field;
       if($query->save()){
        return redirect()->back();
       } 
    }
    public function showAllQuery(){
        
    }
}
