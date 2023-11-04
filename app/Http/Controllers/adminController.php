<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function addview(){
        return view('admin.add_doctor_view');
    }
}
