<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Doctor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use App\Mail\PasswordResetMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        $filename = '';
        $file = $request->file('image');

        if ($request->hasFile('image') && $file->isValid()) {
                $filename = date('Ymdhms') . '.' .$file->getClientOriginalExtension();
                $file->storeAs('user', $filename);

        }

        $request->validate([
           'name'=>'required',
           'email'=>'required|email|unique:users',
           'password'=>'required|min:5'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'contact_no'=>$request->contact_no,
            'age'=>$request->age,
            'image'=>$filename,
            'gender'=>$request->gender,
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


    public function userPasswordRecovery()

{

return view('frontend.layouts.passRecovery');

}

public function userPasswordRecoveryValidate(Request $request)

{

$request->validate([


    'email'=>'required|email'


]);

$userEmailValidate=User::where('email',$request->email)->first();

$token = Str::random(40);



if($userEmailValidate)
{

$passwordReset = PasswordReset::insert([

'token'=>$token,
'email'=>$request->email,

]);

Mail::to($request->email)->send(new PasswordResetMail($passwordReset,$token));

return redirect()->back()->with('success','An Reset Link was sent to your Email. Please Check !!!');

}else{

    return redirect()->back()->with('successError','Email is Invalid. Please try again!!!');
}


}

public function userPasswordUpdate($id)
{


    $tokenCheck=PasswordReset::where('token',$id)->first();

    if( $tokenCheck){
return view('frontend.layouts.updatePassword',compact('tokenCheck'));
}else{

return redirect()->route('login.form')->with('successError','Token Expired. Reset your password again');

}



}


public function passwordUpdate(Request $request)
{

$update=User::where('email',$request->email)->update([

'password'=>bcrypt($request->password),

]);


$tokenDelete=PasswordReset::where('email',$request->email)->delete();


return redirect()->route('login.form')->with('success','password updated successfully. Do-Login !!!');

}

}
