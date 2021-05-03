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
    public function form(){
        $doctor_deatils = Doctor::all();

        $patinet = Appointment::all();
        return view('backend.partials.test.form',compact('doctor_deatils', 'patinet'));
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
                        $file->storeAs('test', $filename);
                    }
            }

            TestReport::create([
            'Patient_id'=>$request->Patient_id,
            'doctors_name'=>$request->doctors_name,
            'test_name'=>$request->test_name,
            'test_id'=>$request->test_id,
            'image'=>$filename,
            'test_slot'=>$request->test_slot,
            'gender'=>$request->gender,
            'description'=>$request->description,

        ]);
        return redirect()->route('test.list');
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
        'test_id'=>$request->test_id,
        'image'=>$filename,
        'test_slot'=>$request->test_slot,
        'gender'=>$request->gender,
        'description'=>$request->description,
        ]);

        return redirect()->route('test.list');
    }
}

