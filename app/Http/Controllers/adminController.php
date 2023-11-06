<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
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
   $doctor->profile=$imagename;     
   $doctor->name= $request->name;
   $doctor->phone= $request->phone;
   $doctor->Speaciality= $request->Speaciality;
   $doctor->room= $request->room;
   $doctor->email= $request->email;
   $doctor->save();
   return redirect()->back();             
}
}
