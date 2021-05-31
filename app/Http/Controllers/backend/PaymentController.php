<?php

namespace App\Http\Controllers\backend;

use App\Models\Payment;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentNotification;

class PaymentController extends Controller
{




        public function form($id)
        {

            $appointment_list=Appointment::find($id);

            //dd($appointmentID);
            return view('backend.partials.Payment.form',compact('appointment_list'));
        }



        public function create (Request $request,$id){
            $appointment=Appointment::find($id);
           $payment = Payment::create([
                'transaction_id'=>$request->transection,
                'appointment_id'=> $appointment->id,
                'bikash_no'=>$request->bikash,
                'amount'=>$request->amount,
                'status'=>'paid'
            ]);

             //send email to user
             Mail::to(auth()->user()->email)->send(new AppointmentNotification($appointment));


             return redirect()->back()->with('message', 'Appointment create successful');

        }

}
