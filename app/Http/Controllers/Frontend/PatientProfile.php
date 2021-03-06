<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class PatientProfile extends Controller
{
    //
    public function profile(){


        //current user
        $patients_list=User::all();


        $appointment_list=Appointment::where('patient_id',auth()->user()->id)->get();



        return view('frontend.partials.patientprofile.table',compact('patients_list','appointment_list'));
    }

}
