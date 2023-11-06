<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;.0
use Laravel\Tinker\ClassAliasAutoloader;

class adminController extends Controller
{
    public function addview(){
        return view('admin.add_doctor_view');
    }

    public function upload(Request $request){
   $doctor  =  new doctor;
   $image = $request->file;
   $imagename=time().'.'.$image-> getClientOriginalExtension();
   $request->file->move('doctorimage',$imagename);
   $doctor->image=$imagename;     
   $doctor->name= $request->name;
   $doctor->phone= $request->phone;
   $doctor->speciality= $request->speciality;
   $doctor->email= $request->email;
   $doctor->save();
   return redirect()->back();             
}
}
