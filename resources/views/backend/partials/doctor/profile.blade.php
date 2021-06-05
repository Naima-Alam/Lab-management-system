@extends('backend.master')

@section('start')


<div class="row">
    {{-- @dd($doctor); --}}
    <div class="col-10 m-auto">
        <div class="card-box pd-20 height-100-p mb-30">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <img src="{{ url('/uploads/doctor/'.$doctor->image) }}" alt="Admin"
                        class="img-fluid rounded-circle img-thumbnail" style="width: 100px; height: 100px">
                        {{-- <img width="150px" src="{{ url('/uploads/user/' . auth()->user()->image) }}" alt="Admin"
                                    class="rounded-circle" width="150"> --}}
                </div>
                @csrf
                <div class="col-md-8">
                    <h4 class="font-20 weight-500 mb-10 text-capitalize">
                        Welcome back
                        <span class="weight-600 font-30 text-blue">
                            {{-- {{ Auth::user()->name }} --}}
                            @isset(Auth::user()->name)
                                {{ Auth::user()->name }}
                            @endisset
                        </span>
                    </h4>
                    {{-- <p class="font-18 max-width-500 border border-radius-6 p-3">{{ $doctor_deatils->Doctor }}</p> --}}
                </div>
            </div>
            {{-- @dd($doctor) --}}
            <div class="clearfix mb-20 mt-2">
                <div class="pull-left">
                    <h3 class="text-blue h4">Your info</h3>
                    <hr class="m-0">
                </div>
            </div>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <th>Professional Degree</th>
                        <td>{{ $doctor->professional_degree }}</td>
                    </tr>
                    <tr>
                        <th>Designation</th>
                        <td>{{ $doctor->designation }}</td>
                    </tr>

                    <tr>
                        <th>Specilalist On</th>
                         <td>{{ $doctor->specilalist_on }}</td>
                    </tr>
                    <tr>
                        <th>Hospital Name</th>
                       <td>{{ $doctor->hospital_name }}</td>
                    </tr>
                    <tr>
                        <th>Chamber Name</th>
                        <td>{{ $doctor->chamber_name }}</td>
                    </tr>
                    <tr>
                        <th>Visiting Hour</th>
                        <td>{{ $doctor->visiting_hour }}</td>
                    </tr>
                    <tr>
                        <th>Chamber Location</th>
                        <td>{{ Auth::user()->address }}</td>
                    </tr>
                    <tr>
                        <th>Contact No</th>
                        <td>{{ Auth::user()->contact_no }}</td>
                    </tr>
                    <tr>
                        <th>Email Address</th>
                        <td>{{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td>{{ Auth::user()->age }}</td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        {{-- <td>{{ $doctor->gender }}</td> --}}
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>






    @endsection
