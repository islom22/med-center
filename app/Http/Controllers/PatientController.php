<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patient.patient');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'region_id' => 'required',
            'city_id' => 'required',
            'name' => 'required|min:2',
            'surname' => 'required|min:2',
            'phone' => 'required|min:9|max:9'
        ]);
        // dd($request);
        

       Patient::create([
        'region_id' =>$request->region_id,
        'city_id' =>$request->city_id,
        'name' =>$request->name,
        'surname' =>$request->surname,
        'phone' =>$request->phone,
        'diagnos_main' => $request->diagnos_main,
        'diagnos_eye' => $request->diagnos_eye,
        'diagnos_xray' => $request->diagnos_xray,
        'diagnos_cardiolog' => $request->diagnos_cardiolog
       ]);
 
       $patient= Patient::where('phone', $request->phone)->get();

       return view('patient.patient-room', compact('patient'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patient = Patient::where('id',$id);

        if(Auth::user()->role == 1){
            
            $patient->update([
                'diagnos_main' =>$request->diagnosis,
                'role' => 1 
            ]);    
        }
        if(Auth::user()->role == 2){
            
            $patient->update([
                'diagnos_eye' =>$request->diagnosis,
                'role' => 2
            ]);    
        }
        if(Auth::user()->role == 3){
            
            $patient->update([
                'diagnos_cardiolog' =>$request->diagnosis,
                'role' => 3
            ]);    
        }
        if(Auth::user()->role == 4){
            
            $patient->update([
                'diagnos_xray' =>$request->diagnosis,
                'role' => 4 
            ]);    
        }

        return redirect()->route('home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

   

    
}
