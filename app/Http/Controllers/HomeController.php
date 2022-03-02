<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::user()->role == 0){

            $doctors = User::all();

            return view('admin.mainPanel', compact('doctors'));
        }
        if(Auth::user()->role == 1){
            $patients = Patient::where('role',0)->get();
            return view('doctor.main-doctor',compact('patients'));
        }
        if(Auth::user()->role == 2){
            $patients = Patient::where('role',1)->get();
            return view('doctor.eye-doctor',compact('patients'));
        }
        if(Auth::user()->role == 3){
            $patients = Patient::where('role',2)->get();
            return view('doctor.cardiolog',compact('patients'));
        }
        if(Auth::user()->role == 4){
            $patients = Patient::where('role',3)->get();
            return view('doctor.xray-doctor',compact('patients'));
        }
    }
}
