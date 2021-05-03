<?php

namespace App\Http\Controllers\backend;

use App\Models\Doctor;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function profile($id){
        $doctor_deatils = Doctor::findOrfail($id);
        return view('backend.layouts.profile', compact('doctor_deatils'));
    }

    // For List
    public function list(){
        $doctor = Doctor::paginate(5);
        $department_deatils=Department::all();
        //dd($doctor);
        return view('backend.partials.doctor.list',compact('doctor','department_deatils'));
    }



    public function search(Request $request)
    {
        $search=$request->search;

        if($search)
        {
            $doctor=Doctor::where('doctors_name','like','%'.$search.'%')->paginate(3);
        }else
        {
            $doctor = Doctor::paginate(5);
        }

        // were(name=%search%)


        return view('backend.partials.doctor.list',compact('doctor','search'));
    }

    // For Form Page
    public function form(){
        return view('backend.partials.doctor.form');
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
                        $file->storeAs('doctor', $filename);
                    }
            }

        Doctor::create([
            'doctors_name'=>$request->doctors_name,
            'image'=>$filename,
            'professional_degree'=>$request->professional_degree,
            'designation' =>$request->designation,
            'specilalist_on'=>$request->specilalist_on,
            'hospital_name'=>$request->hospital_name,
            'chamber_name'=>$request->chamber_name,
            'visiting_hour'=>$request->visiting_hour,
            'chamber_location'=>$request->chamber_location,
            'contact_no'=>$request->contact_no,
            'email_address'=>$request->email_address,
            'age'=>$request->age,
            'gender'=>$request->gender,
        ]);
        return redirect()->route('doctor.list');
    }


    // For show
    public function view($id){
        $doctor= Doctor::find($id);
        return view('backend.partials.doctor.view',compact('doctor'));
    }


    //  For Edit
    public function edit($id){
        $doctor = Doctor::findOrFail($id);
        return view('backend.partials.doctor.edit', compact('doctor'));
    }

    //  For delete
    public function delete($id){
        Doctor::find($id)->delete();
        return redirect()->route('doctor.list')->with('delete_success', 'Succesfully Deleted!');
    }


    public function update(Request $request, $id){
        $doctor = Doctor::findOrFail($id);

            if($request->hasFile('image')){
                $file = $request->file('image');
                if ($file->isValid()) {
                        $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
                        $file->storeAs('doctor', $filename);
                }
                if(file_exists(public_path('uploads/doctor/'.$doctor->image)))
                    unlink(public_path('uploads/doctor/'.$doctor->image));
            } else{
                $filename = $doctor->image;
            }

            $doctor->update([
            'doctors_name'=>$request->doctors_name,
            'image'=>$filename,
            'professional_degree'=>$request->professional_degree,
            'designation' =>$request->designation,
            'specilalist_on'=>$request->specilalist_on,
            'hospital_name'=>$request->hospital_name,
            'chamber_name'=>$request->chamber_name,
            'visiting_hour'=>$request->visiting_hour,
            'chamber_location'=>$request->chamber_location,
            'contact_no'=>$request->contact_no,
            'email_address'=>$request->email_address,
            'age'=>$request->age,
            'gender'=>$request->gender,
        ]);

        return redirect()->route('doctor.list');
    }




        public function loginForm()
        {
             $doctor_deatils = Doctor::all();
            return view('frontend.layouts.doctorlogin',compact('doctor_deatils'));
        }



        public function doLogin(Request $request){
            // dd($request->all());
            $request->validate([
                'email'=>'required|email',
                'password'=>'required|min:5'
            ]);

            $loginData = $request->only('email','password');

            if(Auth::attempt($loginData))
            {
                return redirect()->route('admin.dashboard')->with('success','Doctor Login Success.');
            }
            return back()->withErrors([
                'email' => 'Invalid Credentials.',
            ]);
        }

        public function dashboard(){
            return view('frontend.master');
        }

        public function logout()
        {
            Auth::logout();
            return redirect()->route('doctor.loginForm')->with('success','Logout Successful.');
        }



}
