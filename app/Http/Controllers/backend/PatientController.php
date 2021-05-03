<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    // For List
    public function list(){
        $patients = Patient::paginate(1);
        //dd($patients);
        return view('backend.partials.patient.list',compact('patients'));
    }


    // For Form Page
    public function form(){
        return view('backend.partials.patient.form');
    }

    public function create (Request $request){
        // dd($request->all());
        // dd($request->file('image')->getClientOriginalExtension());

            $filename='';
            if($request->hasFile('image')){
                //some code here to store into directory
                    $file = $request->file('image');

                    if ($file->isValid()) {
                        $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
    //                    dd($filename);
                        $file->storeAs('patient', $filename);
                    }
            }

            Patient::create([
            'patient_name'=>$request->patient_name,
            'image'=>$filename,
            'email'=>$request->email,
            'doctors_name' =>$request->doctors_name,
            'appoinment_date'=>$request->appoinment_date,
            'appointment_time'=>$request->appointment_time,
            'age'=>$request->age,
            'gender'=>$request->gender,
            'contact_no'=>$request->contact_no,
        ]);
        return redirect()->route('patient.list');
    }


    // For show
    public function view($id){
        $patients= Patient::find($id);
        return view('backend.partials.patient.view',compact('patients'));
    }


    //  For Edit
    public function edit($id){
        $patients = Patient::findOrFail($id);
        return view('backend.partials.patient.edit', compact('patients'));
    }
    //  For delete
    public function delete($id){
        Patient::find($id)->delete();
        return redirect()->route('patient.list')->with('delete_success', 'Succesfully Deleted!');
    }


    public function update(Request $request, $id){
        $filename='$file';
        if($request->hasFile('image')){
            //some code here to store into directory
                $file = $request->file('image');

                if ($file->isValid()) {
                    $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
//                    dd($filename);
                    $file->storeAs('patient', $filename);
                }
        }
        Patient::findOrFail($id)->update([
            'patient_name'=>$request->patient_name,
            'image'=>$filename,
            'email'=>$request->email,
            'doctors_name' =>$request->doctors_name,
            'appoinment_date'=>$request->appoinment_date,
            'appointment_time'=>$request->appointment_time,
            'age'=>$request->age,
            'gender'=>$request->gender,
            'contact_no'=>$request->contact_no,
        ]);

        return redirect()->route('patient.list');
    }
}
