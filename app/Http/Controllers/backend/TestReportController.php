<?php

namespace App\Http\Controllers\backend;

use App\Models\Test;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\TestReport;

class TestReportController extends Controller
{
    // For List
   // public function list(){

    //    $test = TestReport::with('testDoctor')->paginate(1);
        //dd($test);
    //    return view('backend.partials.test.list',compact('test'));
   // }


    // For Form Page
    public function form($id){
                $appointmentId=$id;
        return view('backend.partials.test.form',compact('appointmentId'));
    }

    public function create (Request $request,$id){
        $filename = '';
        $file = $request->file('image');

        if ($request->hasFile('image') && $file->isValid()) {
                $filename = date('Ymdhms') . '.' .$file->getClientOriginalExtension();
                $file->storeAs('appointment', $filename);
        }

        $appointment=Appointment::find($id);
        $appointment->update([
            'description'=>$request->description,
            'image'=>$filename,
            'test_status'=>'test repost submitted'
        ]);


        return redirect()->back();
    }






}

