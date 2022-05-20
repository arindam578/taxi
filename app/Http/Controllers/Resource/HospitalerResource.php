<?php

namespace App\Http\Controllers\Resource;

use App\Dispatcher;
use App\Hospitaler;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\Controller;
use Exception;
use Setting;
use Auth;

class HospitalerResource extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('demo', ['only' => ['update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitalers = Hospitaler::orderBy('created_at' , 'desc')->get();

        if(Auth::guard('admin')->user()){
            return view('admin.hospitaler.index', compact('hospitalers')); 
        }elseif(Auth::guard('hospitaler')->user()){
            return view('hospitaler.hospitaler.index', compact('hospitalers')); 
        } 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::guard('admin')->user()){
            return view('admin.hospitaler.create');
        }elseif(Auth::guard('hospitaler')->user()){
            return view('hospitaler.hospitaler.create'); 
        } 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required|max:255',
            'mobile' => 'digits_between:6,13',
            'email' => 'required|unique:hospitalers,email|email|max:255',
            'address' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        if(Setting::get('demo_mode', 0) == 1) {
            return back()->with('flash_error', 'Disabled for demo purposes! Please contact us at info@appoets.com');
        }

        try{

            $Hospitaler = $request->all();
            $Hospitaler['password'] = bcrypt($request->password);

            $Hospitaler = Hospitaler::create($Hospitaler);
            // echo "<pre>";
            // print_r($Hospitaler);die;

            return back()->with('flash_success','Hospital Details Saved Successfully');


        } 

        catch (Exception $e) {
            return back()->with('flash_error', 'Hospitaler Not Found');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dispatcher  $dispatcher
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dispatcher  $dispatcher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $hospitaler = Hospitaler::findOrFail($id);

            if(Auth::guard('admin')->user()){
                return view('admin.hospitaler.edit',compact('hospitaler'));
            }elseif(Auth::guard('hospitaler')->user()){
                return view('hospitaler.hospitaler.edit',compact('hospitaler')); 
            } 
            
        } catch (ModelNotFoundException $e) {
            return $e;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dispatcher  $dispatcher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'mobile' => 'digits_between:6,13',
        ]);

        if(Setting::get('demo_mode', 0) == 1) {
            return back()->with('flash_error', 'Disabled for demo purposes! Please contact us at info@appoets.com');
        }

        try {

            $hospitaler = Hospitaler::findOrFail($id);
            $hospitaler->name = $request->name;
            $hospitaler->mobile = $request->mobile;
            $hospitaler->save();

            if(Auth::guard('admin')->user()){
                return view('admin.hospitaler.edit',compact('hospitaler'));
            }elseif(Auth::guard('hospitaler')->user()){
                return view('hospitaler.hospitaler.edit',compact('hospitaler')); 
            } 
                
        } 

        catch (ModelNotFoundException $e) {
            return back()->with('flash_error', 'Hospitaler Not Found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dispatcher  $dispatcher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try {
            if(Setting::get('demo_mode', 0) == 1) {
                return back()->with('flash_error', 'Disabled for demo purposes! Please contact us at info@appoets.com');
            }
            
            Hospitaler::find($id)->delete();
            return back()->with('message', 'Hospitaler deleted successfully');
        } 
        catch (Exception $e) {
            return back()->with('flash_error', 'Hospitaler Not Found');
        }
    }

}
