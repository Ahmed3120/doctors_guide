<?php

use App\Http\Controllers\Doctors\DoctorPanelController;
use App\Http\Controllers\Reservation\ResservationController;
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

Route::controller(ResservationController::class)->group(function(){

    Route::get('/deleteReq/{id}', 'destroy')->name('deleteRequest');
    Route::get('/booking/{id}', 'index')->name('booking');
    Route::get('/pationts/edit/{id}', 'edit')->middleware('auth')->name('editpatient');

    Route::post('/reservaion/store', 'store')->name('reservaion');
    Route::post('/pationts/edit/updated/{id}', 'update')->middleware('auth')->name('updatepationt');


});