<?php

namespace App\Http\Controllers\AdminDashboard;

use App\Http\Controllers\Controller;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        return view('dashboard');
    }

    

}
