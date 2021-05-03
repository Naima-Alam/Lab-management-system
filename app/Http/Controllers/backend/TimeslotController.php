<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Timeslot;
use Illuminate\Http\Request;

class TimeslotController extends Controller
{
        // For List
        public function list(){
            $timeslot = Timeslot::all();
            // dd($department);
            return view('backend.partials.timeslot.list', compact('timeslot'));
        }


        // For Form Page
        public function form(){
            return view('backend.partials.timeslot.form');
        }

        public function create (Request $request){
            Timeslot::create([
                'form_time'=>$request->form_time,
                'to_time'=>$request->to_time,
            ]);

             return redirect()->route('timeslot.list');
        }

}
