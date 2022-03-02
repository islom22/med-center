<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\City;
use App\Models\Region;
use App\Models\User;
   

class PagesController extends Controller
{
    public function patientRegister(Request $request){
        $patient = Patient::where('phone',$request->phone)->first();
      
        if($patient){
            $patient = Patient::where('phone',$request->phone)->first();
            return view('patient.patient-room',compact('patient'));    
        }else{
            return view('patient.patientInfo',[
                'phone'=>$request['phone']
            ]);
        }
    }


    public function room(){
        $doctors = Patient::all();
        return view('patient.patient-room',compact('doctors'));
    }

    public function mainPanel(){
        $doctors = User::all();
        return view('admin.mainPanel',compact('doctors'));   
    }  
     


    public function Doctor()
    {
        return view('admin.add-doctor');
    }

    public function maindoctor(){
        $patients = Patient::where('role',0)->get();
        return view('doctor.main-doctor',compact('patients'));
    }

    public function eyedoctor(){
        $patients = Patient::where('role',1)->get();
        return view('doctor.eye-doctor',compact('patients'));
    }

    public function cardiologdoctor(){
        $patients = Patient::where('role',2)->get();
        return view('doctor.cardiolog',compact('patients'));
    }

    public function xraydoctor(){
        $patients = Patient::where('role',3)->get();
        return view('doctor.xray-doctor',compact('patients'));
    }

    public function diagnosis($id)
    {   
        $patients = Patient::where('id', $id )->first();
                            
        return view('doctor.inspection',compact('patients'));
    }


}
