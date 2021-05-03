<?php

namespace App\Http\Controllers\backend;

use App\Models\Doctor;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{

        // For List
        public function list(){
            $department = Department::all();
            // dd($department);
            return view('backend.partials.department.list', compact('department'));
        }


        // For Form Page
        public function form(){
            return view('backend.partials.department.form');
        }

        public function create (Request $request){
            Department::create([
                'department_name'=>$request->department_name,
            ]);

             return redirect()->route('department.list');
        }

}
