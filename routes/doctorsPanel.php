<?php

use App\Http\Controllers\Doctors\DoctorPanelController;
use Illuminate\Support\Facades\Route;

// admin panels routes 


Route::controller(DoctorPanelController::class)->group(function(){
    
    Route::get('/docdash', 'index');
    Route::get('/docedit/{id}', 'edit')->name('docedit');
    Route::get('/pationt/{id}', 'getPationt')->name('docpationt');
    Route::get('/pationts/{id}', 'getPationts')->name('docpationts');
    Route::post('/docedit/{id}', 'update')->name('docupdate');
    Route::post('/caseupdate/{id}', 'changeRequsetCase')->name('caseupdate');

});

