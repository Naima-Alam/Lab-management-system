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
            return redirect()->route('admin.dashboard')->with('success','Admin Login Success.');
        }
        return back()->withErrors([
            'email' => 'Invalid Credentials.',
        ]);
    }

    public function dashboard(){
        return view('backend.master');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.loginForm')->with('success','Logout Successful.');
    }


}
