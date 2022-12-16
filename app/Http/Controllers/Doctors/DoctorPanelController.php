<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Resservations;
use Laravel\Ui\Presets\React;

class DoctorPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('doctors.doctorsDashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docinfo = User::find($id)->doctor;

        $docinfo;
        return view('doctors.editPage', compact('docinfo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doc = Doctor::find($id);
        if (!$doc) {
            return redirect()->back()->with('erorr', 'erorr');
        }
        $doc->update([
            'doctor_name' => $request->Docname,
            'doctor_address1' => $request->address1,
            'doctor_address2' => $request->address2,
            'specialize' => $request->specialize,
            'doctor_phone_number' => $request->phone_number,
            'note' => $request->note,
        ]);
        

        return redirect()->back()->with('success', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getPationt($id){
        $pation = User::find($id)->resservation;

        return view('doctors.reservationRequestPage', compact('pation'));
    }

    public function getPationts($id){
        $pation = User::find($id)->resservation;

        return view('doctors.pationtPage', compact('pation'));
    }

    public function changeRequsetCase(Request $request, $id){
        
        $pationt = Resservations::find($id);

        if (!$pationt) {
            return redirect()->back()->with('erorr', 'erorr');
        }

        $pationt->update([
            'request_case' => $request->request_case
        ]);

        return redirect()->back()->with('success', 'success');
    }
}
