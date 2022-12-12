<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Resservations;
use Illuminate\Http\Request;

class testcontroller extends Controller
{
    public function doctors(){
        $n = Doctor::find(2);

        return $n->resservations;
    }
}
