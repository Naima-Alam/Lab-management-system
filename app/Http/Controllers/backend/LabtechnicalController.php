<?php

namespace App\Http\Controllers\backend;

use App\Models\Appointment;
use App\Models\Labtechnical;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;

class LabtechnicalController extends Controller

{

    public function todaylist()
    {
        $appointment = Appointment::with('appointmentDoctor')->with('appointmentTest')
        // ->where('status','confirmed')
        ->whereDate('appointment_date',Carbon::today())
        ->paginate(5);





        // dd($appointment);

        return view('backend.partials.labtechnical.todayappointment',compact('appointment'));
    }

    public function search(Request $request)
    {
        $search = $request->search;

        if ($search) {
            $labtechnical = Labtechnical::where('test_name', 'like', '%' . $search . '%')->paginate(3);
        } else {
            $labtechnical = Labtechnical::paginate(5);
        }

        // were(name=%search%)


        return view('backend.partials.labtechnical.todayappointment', compact('labtechnical', 'search'));
    }


    // For List
    public function list(){
        $labtechnical = Labtechnical::paginate(1);
        //dd($labtechnical);
        return view('backend.partials.labtechnical.list',compact('labtechnical'));
    }


    // For Form Page
    public function form(){
        return view('backend.partials.labtechnical.form');
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
                        $file->storeAs('labtechnical', $filename);
                    }
            }

            Labtechnical::create([
            'labtechnical_name'=>$request->labtechnical_name,
            'qualification'=>$request->qualification,
            'image'=>$filename,
            'labtechnical_id'=>$request->labtechnical_id,
            'gender' =>$request->gender,
            'email'=>$request->email,
            'contact_no'=>$request->contact_no,

        ]);
        return redirect()->route('labtechnical.list');
    }


    // For show
    public function view($id){
        $labtechnical= Labtechnical::find($id);
        return view('backend.partials.labtechnical.view',compact('labtechnical'));
    }

//  For delete
public function delete($id){
    Labtechnical::find($id)->delete();
    return redirect()->route('labtechnical.list')->with('delete_success', 'Succesfully Deleted!');
}
    //  For Edit
    public function edit($id){
        $labtechnical = Labtechnical::findOrFail($id);
        return view('backend.partials.labtechnical.edit', compact('labtechnical'));
    }


    public function update(Request $request, $id){
        $filename='$file';
        if($request->hasFile('image')){
            //some code here to store into directory
                $file = $request->file('image');

                if ($file->isValid()) {
                    $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
//                    dd($filename);
                    $file->storeAs('labtechnical', $filename);
                }
        }
        Labtechnical::findOrFail($id)->update([
            'labtechnical_name'=>$request->labtechnical_name,
            'qualification'=>$request->qualification,
            'image'=>$filename,
            'labtechnical_id'=>$request->labtechnical_id,
            'gender' =>$request->gender,
            'email'=>$request->email,
            'contact_no'=>$request->contact_no,

        ]);

        return redirect()->route('labtechnical.list');
    }

//status
    public function sampleStatus($id,$status){
        $labtechnical=Appointment::find($id);
        if($status === 'confirmed'){
            $labtechnical->update(['status'=>$status]);
        }else{
            $labtechnical->update(['status'=>$status]);
        }
        return redirect()->back();
    }
}
