<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Patient_Tooth;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function patientsList(){
        $patients = Patient::all()->sortByDesc("id");
        return view('patients',['patients'=>$patients]);
    }

    public function patientsDetails($id){
        $patient = Patient::find($id);
        return view('patient_details',['patient'=>$patient]);
    }

    public function addPatient(){
        return view('add_patient');
    }

    public function store(Request $request){
        $obj = new Patient();
        if($request->first_name) $obj->first_name = $request->first_name;
        if($request->last_name) $obj->last_name = $request->last_name;
        if($request->address) $obj->address = $request->address;
        if($request->telephone) $obj->telephone = $request->telephone;
        if($request->birth_date) $obj->birth_date = $request->birth_date;
        $obj->save();
        $patient_id = $obj->id;

        if($request->t_18_1) $this->saveToothInfo('18_1', $request->t_18_1, $patient_id);

        return redirect()->route('patients');
    }

    public function saveToothInfo($tooth, $value, $patient_id){
        $patient_tooth = new Patient_Tooth();
        $patient_tooth->patient_id = $patient_id;
    }
}
