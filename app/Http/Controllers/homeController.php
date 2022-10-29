<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class homeController extends Controller
{
    function getHome(){
        return(view('home'));
    }

    function getDoctor(){
        $doctors = Doctor::all();
        return view('doctorInfoPage', compact('doctors'));
    }

    function autoComplete(Request $request){

        $doctorName = Doctor::select("name")
                            ->where("name", "like", "%[$request->name]%")
                            ->get();
        
        return response()->jason($doctorName);

    }
}
