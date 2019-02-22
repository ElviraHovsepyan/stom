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
        $patient = Patient::with('patient_tooth')->where('id',$id)->first();
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
        for($i = 0; $i < 32; $i++){
            $tooth = new Patient_Tooth();
            $tooth->patient_id = $patient_id;
            $tooth->tooth_id = $i+1;
            $tooth->save();
        }
        $this->checkTooth($request,$patient_id);
        return redirect()->route('patients');
    }

    public function checkTooth($request,$patient_id){
//        dd($request->t_18_1);
        if($request->t_18_1) $this->saveToothInfo($patient_id,18,1, $request->t_18_1);
        if($request->t_17_1) $this->saveToothInfo($patient_id,17,1, $request->t_17_1);
        if($request->t_16_1) $this->saveToothInfo($patient_id,16,1, $request->t_16_1);
        if($request->t_15_1) $this->saveToothInfo($patient_id,15,1, $request->t_15_1);
        if($request->t_14_1) $this->saveToothInfo($patient_id,14,1, $request->t_14_1);
        if($request->t_13_1) $this->saveToothInfo($patient_id,13,1, $request->t_13_1);
        if($request->t_12_1) $this->saveToothInfo($patient_id,12,1, $request->t_12_1);
        if($request->t_11_1) $this->saveToothInfo($patient_id,11,1, $request->t_11_1);
        if($request->t_21_1) $this->saveToothInfo($patient_id,21,1, $request->t_21_1);
        if($request->t_22_1) $this->saveToothInfo($patient_id,22,1, $request->t_22_1);
        if($request->t_23_1) $this->saveToothInfo($patient_id,23,1, $request->t_23_1);
        if($request->t_24_1) $this->saveToothInfo($patient_id,24,1, $request->t_24_1);
        if($request->t_25_1) $this->saveToothInfo($patient_id,25,1, $request->t_25_1);
        if($request->t_26_1) $this->saveToothInfo($patient_id,26,1, $request->t_26_1);
        if($request->t_27_1) $this->saveToothInfo($patient_id,27,1, $request->t_27_1);
        if($request->t_28_1) $this->saveToothInfo($patient_id,28,1, $request->t_28_1);

        if($request->t_18_2) $this->saveToothInfo($patient_id,18,2, $request->t_18_2);
        if($request->t_17_2) $this->saveToothInfo($patient_id,17,2, $request->t_17_2);
        if($request->t_16_2) $this->saveToothInfo($patient_id,16,2, $request->t_16_2);
        if($request->t_15_2) $this->saveToothInfo($patient_id,15,2, $request->t_15_2);
        if($request->t_14_2) $this->saveToothInfo($patient_id,14,2, $request->t_14_2);
        if($request->t_13_2) $this->saveToothInfo($patient_id,13,2, $request->t_13_2);
        if($request->t_12_2) $this->saveToothInfo($patient_id,12,2, $request->t_12_2);
        if($request->t_11_2) $this->saveToothInfo($patient_id,11,2, $request->t_11_2);
        if($request->t_21_2) $this->saveToothInfo($patient_id,21,2, $request->t_21_2);
        if($request->t_22_2) $this->saveToothInfo($patient_id,22,2, $request->t_22_2);
        if($request->t_23_2) $this->saveToothInfo($patient_id,23,2, $request->t_23_2);
        if($request->t_24_2) $this->saveToothInfo($patient_id,24,2, $request->t_24_2);
        if($request->t_25_2) $this->saveToothInfo($patient_id,25,2, $request->t_25_2);
        if($request->t_26_2) $this->saveToothInfo($patient_id,26,2, $request->t_26_2);
        if($request->t_27_2) $this->saveToothInfo($patient_id,27,2, $request->t_27_2);
        if($request->t_28_2) $this->saveToothInfo($patient_id,28,2, $request->t_28_2);

        if($request->t_48_1) $this->saveToothInfo($patient_id,48,1, $request->t_48_1);
        if($request->t_47_1) $this->saveToothInfo($patient_id,47,1, $request->t_47_1);
        if($request->t_46_1) $this->saveToothInfo($patient_id,46,1, $request->t_46_1);
        if($request->t_45_1) $this->saveToothInfo($patient_id,45,1, $request->t_45_1);
        if($request->t_44_1) $this->saveToothInfo($patient_id,44,1, $request->t_44_1);
        if($request->t_43_1) $this->saveToothInfo($patient_id,43,1, $request->t_43_1);
        if($request->t_42_1) $this->saveToothInfo($patient_id,42,1, $request->t_42_1);
        if($request->t_41_1) $this->saveToothInfo($patient_id,41,1, $request->t_41_1);
        if($request->t_31_1) $this->saveToothInfo($patient_id,31,1, $request->t_31_1);
        if($request->t_32_1) $this->saveToothInfo($patient_id,32,1, $request->t_32_1);
        if($request->t_33_1) $this->saveToothInfo($patient_id,33,1, $request->t_33_1);
        if($request->t_34_1) $this->saveToothInfo($patient_id,34,1, $request->t_34_1);
        if($request->t_35_1) $this->saveToothInfo($patient_id,35,1, $request->t_35_1);
        if($request->t_36_1) $this->saveToothInfo($patient_id,36,1, $request->t_36_1);
        if($request->t_37_1) $this->saveToothInfo($patient_id,37,1, $request->t_37_1);
        if($request->t_38_1) $this->saveToothInfo($patient_id,38,1, $request->t_38_1);

        if($request->t_48_2) $this->saveToothInfo($patient_id,48,2, $request->t_48_2);
        if($request->t_47_2) $this->saveToothInfo($patient_id,47,2, $request->t_47_2);
        if($request->t_46_2) $this->saveToothInfo($patient_id,46,2, $request->t_46_2);
        if($request->t_45_2) $this->saveToothInfo($patient_id,45,2, $request->t_45_2);
        if($request->t_44_2) $this->saveToothInfo($patient_id,44,2, $request->t_44_2);
        if($request->t_43_2) $this->saveToothInfo($patient_id,43,2, $request->t_43_2);
        if($request->t_42_2) $this->saveToothInfo($patient_id,42,2, $request->t_42_2);
        if($request->t_41_2) $this->saveToothInfo($patient_id,41,2, $request->t_41_2);
        if($request->t_31_2) $this->saveToothInfo($patient_id,31,2, $request->t_31_2);
        if($request->t_32_2) $this->saveToothInfo($patient_id,32,2, $request->t_32_2);
        if($request->t_33_2) $this->saveToothInfo($patient_id,33,2, $request->t_33_2);
        if($request->t_34_2) $this->saveToothInfo($patient_id,34,2, $request->t_34_2);
        if($request->t_35_2) $this->saveToothInfo($patient_id,35,2, $request->t_35_2);
        if($request->t_36_2) $this->saveToothInfo($patient_id,36,2, $request->t_36_2);
        if($request->t_37_2) $this->saveToothInfo($patient_id,37,2, $request->t_37_2);
        if($request->t_38_2) $this->saveToothInfo($patient_id,38,2, $request->t_38_2);
    }

    public function saveToothInfo($patient_id, $tooth, $num, $value){
        $patient_tooth = Patient_Tooth::where('patient_id',$patient_id)
                                ->with('teeth')
                                ->whereHas('teeth',function ($query) use ($tooth){
                                    $query->where('tooth',$tooth);
                                })->first();
        $val = 'value_'.$num;
        $patient_tooth->$val = $value;
        $patient_tooth->save();
    }

    public function edit(Request $request){
        $id = $request->id;
        $obj = Patient::find($id);
        if($request->first_name) $obj->first_name = $request->first_name;
        if($request->last_name) $obj->last_name = $request->last_name;
        if($request->address) $obj->address = $request->address;
        if($request->telephone) $obj->telephone = $request->telephone;
        if($request->birth_date) $obj->birth_date = $request->birth_date;
        $obj->save();
        $patient_id = $obj->id;
        $this->checkTooth($request,$patient_id);
        return redirect()->route('patient_details',['id'=>$patient_id]);
    }

    public function deletePatient($id){
        $patient = Patient::find($id);
        $patient->delete();
        return redirect()->route('patients');
    }
}
