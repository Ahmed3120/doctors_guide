<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;


class homeController extends Controller
{
    function getHome(){
        $specialize = Doctor::select('specialize')->get();
        return(view('home', compact('specialize')));
    }

    public function getItemByName(Request $request){
        $name = $request->doc_name;

        $doctorName = Doctor::select('doctor_name', 'specialize', 'updated_at', 'id')
                            ->where('doctor_name', "like", '%'.$name.'%')
                            ->get();
    
        if(!$doctorName){
            return redirect()->back()->with('success', __('لم يتم ايجاد الاسم'));
        }
        return view('searchResult', compact('doctorName'));
    }

    function getDoctorById($id){
        $doctor = Doctor::find($id);
        if (!$doctor) {
            return redirect()->back()->with('erorr', 'erorr');
        }
        return view('doctorInfoPage', compact('doctor'));
        // return redirect(view('doctorInfoPage'))->with('doctor', compact('doctor'));
    }

  

    function autoComplete(Request $request){

        $doctorName = Doctor::select("name")
                            ->where("name", "like", "%[$request->name]%")
                            ->get();
        
        return response()->jason($doctorName);
    }
}
