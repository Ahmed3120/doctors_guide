<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Resservations;
use App\Models\User;
use Illuminate\Http\Request;

class testcontroller extends Controller
{
    
    public function doctors(){
        $n = Doctor::find(2);

        return $n->resservations;
    }

    public function doc(){
        $n = User::find(3)->doctor;

        return response()->json($n);
    }

    public function doc3(){
        $n = User::find(3)->resservation;

        return response()->json($n);
    }
}
