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
    public function list(){

        $test = TestReport::with('testDoctor')->paginate(1);
        //dd($test);
        return view('backend.partials.test.list',compact('test'));
    }


    // For Form Page
    public function form($id){
                $appointmentId=$id;
        return view('backend.partials.test.form',compact('appointmentId'));
    }

    public function create (Request $request,$id){

        $appointment=Appointment::find($id);
        $appointment->update([
            'description'=>$request->description
        ]);


        return redirect()->back();
    }


    // For show
    public function view($id){
        $test= TestReport::find($id);
        return view('backend.partials.test.view',compact('test'));
    }


    //  For Edit
    public function edit($id){
        $test = TestReport::findOrFail($id);
        return view('backend.partials.test.edit', compact('test'));
    }
    //  For delete
    public function delete($id){
        TestReport::find($id)->delete();
        return redirect()->route('test.list')->with('delete_success', 'Succesfully Deleted!');
    }


    public function update(Request $request, $id){
        $filename='$file';
        if($request->hasFile('image')){
            //some code here to store into directory
                $file = $request->file('image');

                if ($file->isValid()) {
                    $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
//                    dd($filename);
                    $file->storeAs('test', $filename);
                }
        }
       TestReport::findOrFail($id)->update([
        'Patient_id'=>$request->Patient_id,
        'doctor_Name'=>$request->doctor_Name,
        'test_name'=>$request->test_name,
        'prepared_by'=>$request->prepared_by,
        'image'=>$filename,
        'gender'=>$request->gender,
        'description'=>$request->description,
        ]);

        return redirect()->route('test.list');
    }
}

