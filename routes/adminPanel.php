<?php

use App\Http\Controllers\AdminDashboard\DashboardController;
use App\Http\Controllers\Doctors\DoctorsController;
use Illuminate\Support\Facades\Route;

// admin panels routes 



Route::controller(DashboardController::class)->group(function(){

    Route::get('dashboard', 'index')->name('mainDashboard');

});

Route::controller(DoctorsController::class)->group(function(){
    Route::get('/insert', 'index')->name('addDoctor'); //route adding doctor page
    Route::post('/insert/add', 'store')->name('insertDoctor'); 
    Route::get('/show', 'showDoctors')->name('showDoctor');
    Route::get('/show/delete/{id}', 'destroy')->name('destroyDoctor');
    // Route::get('/show/edit/{id}', 'edit')->name('destroyDoctor');
    

});

