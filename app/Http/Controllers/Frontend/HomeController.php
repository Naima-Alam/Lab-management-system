<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\TestInformation;

class HomeController extends Controller
{

    //doctor login form
public function doctorlogin()
{
    return view('frontend.layouts.doctorlogin');
}

    //
    public function website()
    {

       return view('frontend.layouts.home');
    }
    public function news()
    {
        return view('frontend.layouts.news');
    }
    public function contact()
    {
        return view('frontend.layouts.contact');
    }
    public function about()
    {
        return view('frontend.layouts.about');
    }
    public function department()
    {
        $department_deatils=Department::all();
        return view('frontend.layouts.department',compact('department_deatils'));
    }
}
