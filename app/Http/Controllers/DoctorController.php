<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $doctors = User::create([
            'region_id'=>$request->region_id,
            'city_id'=>$request->city_id,
            'password'=> bcrypt($request->password),
            'email'=>$request->email,
            'role'=>$request->role,
            'name'=>$request->name
        ]);
        return redirect()->route('admin-panel',compact('doctors'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctors =User::find($id);
        return view('admin.update',compact('doctors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        User::find($id)->update([
            'region_id'=>$request->region_id,
            'city_id'=>$request->city_id,
            'password'=>$request->password,
            'email'=>$request->email,
            'role'=>$request->role,
            'name'=>$request->name
        ]);
        $doctors = User::all();
     return view('admin.mainPanel',compact('doctors')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        User::find($id)->delete();

        return redirect()->route('admin-panel');
    }
}
