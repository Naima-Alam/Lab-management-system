<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Payment;

use App\Models\Timeslot;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\AppointmentTest;
use App\Models\TestInformation;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentNotification;

class AppointmentController extends Controller
{
    // For All
    public function all()
    {
        $appointment = Appointment::with('appointmentDoctor')->with('appointmentTest')->with('appointmentSlot')->where('status', 'confirmed')->paginate(5); //for paginate
        $total_user = User::count();
        return view('backend.partials.appointment.all', compact('appointment', 'total_user'));
    }

    // For  New
    public function new()
    {
        //dd($appointment);
        $appointment = Appointment::with('appointmentDoctor')->with('tests')->with('paymentstatus')->where('status', 'pending')->paginate(10); //for paginate
        //dd($appointment);
        return view('backend.partials.appointment.new', compact('appointment'));
    }


    // For Form Page
    public function form()
    {
        $doctor_deatils = Doctor::all(); //For Dr. name Docotr Input Filed
        $test_name = TestInformation::all(); // Test Name For Test Input Filed
        $slots = Timeslot::all();
        return view('frontend.layouts.appointmentform', compact('doctor_deatils', 'test_name', 'slots'));
    }

    public function create(Request $request)
    {

        // dd($request->all());


        $filename = '';
        $file = $request->file('image');

        if ($request->hasFile('image') && $file->isValid()) {
                $filename = date('Ymdhms') . '.' .$file->getClientOriginalExtension();
                $file->storeAs('appointment', $filename);
        }
        // need to check  the appointment time are available or not

        $fromDate = date("Y-m-d", strtotime($request->appointment_date));

        $checkAppointment = Appointment::where('doctors_id', $request->doctors_id)
            ->whereDate('appointment_date', $fromDate)
            ->where('slot_id', $request->slot_id)
            // ->where('test_id', $request->test_id)
            ->get();




        if ($checkAppointment->count() == 0) {
            $paymentstatus=Payment::all();
            $appointment = Appointment::create([
                'doctors_id' => $request->doctors_id,
                'patient_id' => auth()->user()->id,
                'test_id' => 1,
                'slot_id' => $request->slot_id,
                'appointment_date' => $request->appointment_date,
                'reason_name' => $request->reason_name,
                'description' => $request->description,
                'description' => $request->description,
                'serial_number' => $request->serial_number,
                //'test_status' => $request->test_status,
                'image'=>$filename,

            ]);

           foreach($request->input('test_id') as $id){
                AppointmentTest::create([
                    'test_id'=>$id,
                    'appointment_id'=>$appointment->id,
                    'patient_id'=>auth()->user()->id,
                ]);

           }

            //send email to user
         //   Mail::to(auth()->user()->email)->send(new AppointmentNotification($appointment));


            return redirect()->route('payment.form',$appointment->id)->with('message', 'Appointment create successful');
        } else
            return redirect()->back()->with('message', 'Allready Booked');
    }


    // For show
    public function view($id)
    {
        $appointment = Appointment::find($id);
        return view('backend.partials.appointment.view', compact('appointment'));
    }


    //  For Edit
    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('backend.partials.appointment.edit', compact('appointment'));
    }

    //  For delete
    public function accepted($id)
    {
        Appointment::find($id)->delete();
        return redirect()->route('appointment.new')->with('delete_success', 'This Appointment is Now  Avilable on all Appointment List');
    }


    public function rejected($id)
    {
        Appointment::withTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('appointment.new')->with('delete_success', 'This Appointment is Permanently Deleted on Your New Appointment List');
    }

    public function rejectedAll($id)
    {
        Appointment::withTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('appointment.list')->with('delete_success', 'This Appointment is Permanently Deleted on Your All Appointment List');
    }

    public function restore($id)
    {
        Appointment::withTrashed()->findOrFail($id)->restore();
        return redirect()->route('appointment.list')->with('delete_success', 'This Appointment is Store on Your New Appointment List');
    }


    // status update
    public function updateStatus($id, $status)
    {
        $appointment = Appointment::find($id);
        if ($status === 'confirmed') {
            $appointment->update(['status' => $status]);
            // Mail::to($appointment->email)->send(new AppointmentNotification($appointment));
        } else {
            $appointment->update(['status' => $status]);
        }
        return redirect()->back();
    }

    //test report list
    public function testreport()
    {

        $appointment_list = Appointment::where('patient_id', auth()->user()->id)->get();
        $patients_list = User::all();
        //dd( $patients_list);
        return view('backend.partials.appointment.apppointmentreport', compact('appointment_list', 'patients_list'));
    }


    public function testform($id)
    {
        $appointmentId = $id;
        return view('backend.partials.test.form', compact('appointmentId'));
    }

    public function testcreate(Request $request, $id)
    {
        $filename = '';
        $file = $request->file('image');

        if ($request->hasFile('image') && $file->isValid()) {
                $filename = date('Ymdhms') . '.' .$file->getClientOriginalExtension();
                $file->storeAs('appointment', $filename);
        }


        $appointment = Appointment::find($id);
        $appointment->update([
            'description' => $request->description,
            'image'=>$filename,
            'test_status'=>'Test Report submitted'
        ]);


        return redirect()->back();
    }

//cancel appointment
    public function cancleform($id)
    {
        $appointmentId = $id;
        $appointment = Appointment::find($id);
        //dd($appointment);
        return view('backend.partials.appointment.cancle', compact('appointment','appointmentId'));
    }

    public function canclecreate(Request $request, $id)
    {

        $appointment = Appointment::find($id);
        $appointment->update([
            'cancel_reason' => $request->cancel_reason,
            'status'=>'canceled by patient'
        ]);


        return redirect()->route('profile');
    }
   //appointment serial number


   public function serialform($id){

    $appointmentId=$id;
    $appointment=Appointment::find($id);
    //dd($appointment);
    return view('backend.partials.appointment.serialform',compact('appointment','appointmentId'));
   }

   public function serialcreate(Request $request,$id){
    $appointment = Appointment::find($id);
    $appointment->update([
        'serial_number' => $request->serial_number,
       // 'status'=>'Confirmed'


    ]);
    return redirect()->route('appointment.new');

   }


//download pdf
public function getAllappointment($id){
    $appointment=Appointment::find($id);
    return view('backend.partials.appointment.apppointmentreport',compact('appointment'));
}
public function downloadPDF($id)
{

    $appointment=Appointment::find($id);



    $pdf = App::make('dompdf.wrapper');

    // return view('backend.partials.appointment.pdf',compact('appointment'));

    $pdf->loadview('backend.partials.appointment.pdf',compact('appointment'));



    return $pdf->download('appointment.pdf');
}


//ap


}
