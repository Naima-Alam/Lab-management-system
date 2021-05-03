<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function form(){
        $doctor_deatils=Doctor::all();
        return view('frontend.layouts.doctorlist',compact('doctor_deatils'));
    }
    public function registrationForm()
    {
//        dd("ok");
        $doctor_deatils=Doctor::all();

        return view('frontend.layouts.registration',compact('doctor_deatils'));

    }

    public function register(Request $request)
    {

        $request->validate([
           'name'=>'required',
           'email'=>'required|email|unique:users',
           'password'=>'required|min:5'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);

        return redirect()->back()->with('success','User Registration Successful.');

    }

    public function loginForm()
    {
//        dd("login");
        return view('frontend.layouts.login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5'
        ]);

        $loginData=$request->only('email','password');

        if(Auth::attempt($loginData))
        {
            return redirect()->route('website')->with('success','User Login Success.');
        }
        return back()->withErrors([
            'email' => 'Invalid Credentials.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('website')->with('success','Logout Successful.');
    }



}
