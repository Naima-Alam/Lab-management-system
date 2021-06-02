<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use App\Models\Appointment;
use App\Models\Prescription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrescriptionController extends Controller
{
    ////prescription Form

    public function form($id)
    {
        //$doctor_deatils = Doctor::all(); //For Dr. name Docotr Input Filed
       // $test_name = TestInformation::all(); // Test Name For Test Input Filed
        $prescription = Prescription::all();
        return view('backend.partials.doctor.prescriptionform', compact('prescription','id'));
    }

//prescription create
    public function create (Request $request){
        Prescription::create([
            'patient_id'=>$request->patient_id,
            'doctor_id'=>auth()->user()->id,
            'medicine_name'=>$request->medicine_name,
            'dosage'=>$request->dosage,
            'frequency'=>$request->frequency,
            'period'=>$request->period,
        ]);

         return redirect()->route('prescription.view');
    }

     // For List
     public function  view($id){

        $prescription = Prescription::with('appointmentDoctor','paitent')->findOrFail($id);

        return view('backend.partials.doctor.prescriptionview', compact('prescription'));
    }
    public function list(){
        $prescription= Prescription::all();
        return view('backend.partials.doctor.prescriptionlist',compact('prescription'));
    }


}
