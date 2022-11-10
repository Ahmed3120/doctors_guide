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

    public function getItemByName(Request $request){
        $name = $request->doc_name;

        $doctorName = Doctor::get()->where('doctor_name', $name)->first();
        if(!$doctorName){
            return redirect()->back()->with('success', __('read.not found'));
        }
        return view('doctorInfoPage', compact('doctorName'));
    }

    // function getDoctor(){
    //     $doctors = Doctor::select(id)
    //     return view('doctorInfoPage', compact('doctors'));
    // }

    function autoComplete(Request $request){

        $doctorName = Doctor::select("name")
                            ->where("name", "like", "%[$request->name]%")
                            ->get();
        
        return response()->jason($doctorName);

    }
}
