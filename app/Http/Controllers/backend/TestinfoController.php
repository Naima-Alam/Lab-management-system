<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\TestInformation;
use Illuminate\Http\Request;

class TestinfoController extends Controller
{

    // For List
    public function list(){
        $testinfo = TestInformation::all();
        // dd($testinfo);
        return view('backend.partials.testinformation.list', compact('testinfo'));
    }


    // For Form Page
    public function form(){
        return view('backend.partials.testinformation.form');
    }

    public function create (Request $request){
        TestInformation::create([
            'test_name'=>$request->test_name,
            'department_id'=>$request->department_id,
            'test_price'=>$request->test_price,
        ]);

         return redirect()->route('testinformation.list');
    }

}
