<?php

namespace App\Http\Controllers\backend;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{



    public function loginForm()
    {
         $doctor_deatils = Doctor::all();
        return view('backend.layouts.login',compact('doctor_deatils'));
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
            $request->session()->regenerate();
            if(auth()->user()->role == 'admin')
            {
                return redirect()->route('admin.dashboard')->with('success','Admin Login Success.');
            }
            elseif (auth()->user()->role == 'doctor')
            {
                return redirect()->route('admin.dashboard')->with('success','Doctor Login Success.');
            }


        }
        return back()->withErrors([
            'email' => 'Invalid Credentials',
        ]);
    }
//dashboard
    public function dashboard(){
        //dd('doctor_deatils ');
        $doctor_deatils = Doctor::all();

        return view('backend.master',compact('doctor_deatils'));
    }

 //  For Edit
 public function edit($id)
 {
     $doctor = Doctor::findOrFail($id);
     return view('backend.partials.doctor.edit', compact('doctor'));
 }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.loginForm')->with('success','Logout Successful.');
    }


}
