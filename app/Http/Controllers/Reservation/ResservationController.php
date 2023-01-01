<?php

namespace App\Http\Controllers\Reservation;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Resservations;
use App\Models\User;
use Illuminate\Http\Request;

class ResservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $name = "";
        $user_id = User::select("id")->where("doctor_id", $id)->get();
        if(sizeof($user_id) <= 0){
            return redirect()->back()->with('noReserve', 'noReserve');
        }

        foreach($user_id as $idd){
            $user_id = $idd->id;
            $name = $idd->doctor_name;
        }

        $name = Doctor::find($id);
        return view("BookingPage", compact("user_id", "name"));
        
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
        $docinfo_id = User::find($request->docid);
        if(!$docinfo_id){
            return redirect()->back()->with('error', 'error');
        }
        Resservations::create([
            'user_id' => $request->docid,
            'pationt_name' => $request->p_name,
            'p_number' => $request->p_phone_number,
            'p_email' => $request->p_email,
            'p_case' => $request->p_case,
            'reservation_time' => $request->reservation_time,
        ]);
        //$docinfo_id = User::find($request->docid)->doctor->id;
        return redirect(
            route('doctorInfoPage', $docinfo_id->doctor_id
            ))->with('success', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Resservations::find($id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservaion = Resservations::find($id);
        if(!$reservaion)
            return redirect()->back()->with('erorr', 'erorr');
        
        // $reservaion = $reservaion->get();
        return view('doctors.editPationt', compact('reservaion'));
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
        // $this->middleware('auth');
        $reservaion = Resservations::find($id);
        if(!$reservaion){
            return redirect()->back(403);
        }

        $reservaion->update([

            'pationt_name' => $request->p_name,
            'p_number' => $request->p_phone_number,
            'p_email' => $request->p_email,
            'p_case' => $request->p_case,
            'reservation_time' => $request->reservation_time,
            'treatment' => $request->treatment,
            'checkups' => $request->checkups,
            'next_reservation_time' => $request->next_reservation_time

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
        $res = Resservations::find($id);
        if($res){
            $res->delete();
            return redirect()->back()->with('success', 'Deleted Successfly');
        }

        return redirect()->back()->with('failed', 'Delete unSuccessfly');

    }
}
