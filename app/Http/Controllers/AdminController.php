<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function addview()
    {


        return view('admin.add_doctor');
    }

    public function upload(Request $request){

        $doctor=new doctor;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientOriginalExtension();


    $request->file->move('doctorimage',$imagename);

    $doctor->image=$imagename;

    $doctor->name=$request->name;

    $doctor->phone=$request->number;

    $doctor->room=$request->room;

    $doctor->specality=$request->specality;


    $doctor->save();

    return redirect()->back()->with('success', 'Doctor added successfully');

    }

}
