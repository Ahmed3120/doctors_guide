<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\view1Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(homeController::class)->group(function(){

    Route::get('/', 'getHome');
    Route::get('/doctorinfo/{id}', 'getDoctorById')->name('doctorInfoPage');
    Route::get('/doctori', 'getPage');
    Route::get('/autoComplete', 'autoComplete') ->name('autoComplete');
    Route::get('/doctorSearch',  'getItemByName')->name('docSearch');
    Route::get('/doctorSearches/{specialize}', 'getDoctorBySpecialize')->name('doctorSearches');
});

