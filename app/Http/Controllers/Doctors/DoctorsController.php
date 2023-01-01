<?php

namespace App\Http\Controllers\Doctors;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('doctors.addDoctor');
    }

    public function showDoctors(){
        $all_doc = Doctor::all();


        return view('doctors.showDoctors', compact('all_doc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('doctors.addDoctor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $fileName = $this -> saveImage($request->photo, 'images/offerimages');

        //else save the input to data base 
        Doctor::create([
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tempDoc = Doctor::find($id);

        if ($tempDoc) {
            $tempDoc->delete();
            return redirect()->back()->with('success', 'success');
        }

        return redirect()->back()->with('notfound', 'notfound');
    }
}
