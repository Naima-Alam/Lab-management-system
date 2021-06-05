<?php

namespace App\Http\Controllers\backend;

use App\Models\Payment;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentNotification;
use App\Models\Test;

class PaymentController extends Controller
{




        public function form($id)
        {

            $appointment_list=Appointment::with('appointmentTest','tests')->find($id);
            $total =0;

            foreach($appointment_list->tests as $key=>$test){
                $total +=$test->test_price;
            }

            return view('backend.partials.Payment.form',compact('appointment_list','total'));
        }



        public function create (Request $request,$id){
            // $request->validate([
            //     'amount'=> 'max:500|min:500'
            // ]);
            $appointment=Appointment::with('tests')->find($id);

            $total =0;

            foreach($appointment->tests as $key=>$test){
                $total +=$test->test_price;

            }

           $appointment->update([
               'due_amount' => $total - $request->amount
           ]);

           $payment = Payment::create([
                'transaction_id'=>$request->transection,
                'appointment_id'=> $appointment->id,
                'bikash_no'=>$request->bikash,
                'amount'=>$request->amount,
                'status'=>'paid'
            ]);



             //send email to user
             Mail::to(auth()->user()->email)->send(new AppointmentNotification($appointment));


             return redirect()->route('profile')->with('message', 'Appointment create successful');

        }

}
