<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Patient_Tooth;
use App\Visit;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function patientsList(){
        $patients = Patient::all()->sortByDesc("id");
        return view('patients',['patients'=>$patients]);
    }

    public function patientsDetails($id){
        $patient = Patient::with('patient_tooth')->where('id',$id)->first();
        $visits = Visit::where('patient_id', $id)->orderBy('id','desc')->get();
        return view('patient_details',['patient'=>$patient,'visits'=>$visits]);
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

    public function checkTooth($request,$patient_id, $param = false){
        for($i = 11; $i < 49; $i++){
            if(strpos(strval($i),'0') != false || strpos(strval($i),'9') != false) continue;
            if(!$param){
                if($request->has('t_'.$i.'_1')) $this->saveToothInfo($patient_id,$i,1, $request->input('t_'.$i.'_1'));
                if($request->has('t_'.$i.'_2')) $this->saveToothInfo($patient_id,$i,2, $request->input('t_'.$i.'_2'));
            } else {
                $this->saveToothInfo($patient_id,$i,1, $request->input('t_'.$i.'_1'));
                $this->saveToothInfo($patient_id,$i,2, $request->input('t_'.$i.'_2'));
            }
        }
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
        $this->checkTooth($request,$patient_id, true);
        return redirect()->route('patient_details',['id'=>$patient_id]);
    }

    public function deletePatient(Request $request){
        $id = $request->id;
        $patient = Patient::find($id);
        $patient->patient_tooth()->delete();
        $patient->visits()->delete();
        $patient->delete();
        return 'success';
    }

    public function visit(Request $request){
        $id = $request->id;
        $obj = new Visit();
        $obj->patient_id = $id;
        if($request->diagnosis) $obj->diagnosis = $request->diagnosis;
        if($request->tooth) $obj->tooth = $request->tooth;
        if($request->procedure) $obj->procedure = $request->procedure;
        if($request->date) $obj->date = $request->date;
        if($request->price) $obj->price = $request->price;
        if($request->next_visit) $obj->next_visit = $request->next_visit;
        $obj->save();
        return 'success';
    }

    public function deleteVisit($id){
        $visit = Visit::find($id);
        $visit->delete();
        return back();
    }

    public function editVisit(Request $request){
        $id = $request->id;
        $name = $request->name;
        $val = $request->val;
        $visit = Visit::find($id);
        $visit->$name = $val;
        $visit->save();
        return 'success';
    }
}
