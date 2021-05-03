@extends('backend.master')

@section('content')

<div class="row">
    <div class="col-10 m-auto">
        <div class="card-box pd-20 height-100-p mb-30">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <img src="{{ asset('/uploads/doctor/'.$doctor_deatils->image) }}" alt="" class="img-fluid rounded-circle img-thumbnail" style="width: 100px; height: 100px">
                </div>
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
                    <p class="font-18 max-width-500 border border-radius-6 p-3">{{ $doctor_deatils->Doctor }}</p>
                </div>
            </div>

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
                        <td>{{ $doctor_deatils->doctors_name }}</td>
                    </tr>
                    <tr>
                        <th>Professional Degree</th>
                        <td>{{ $doctor_deatils->professional_degree }}</td>
                    </tr>
                    <tr>
                        <th>Designation</th>
                        <td>{{ $doctor_deatils->designation}}</td>
                    </tr>

                    <tr>
                        <th>Specilalist On</th>
                        <td>{{ $doctor_deatils->specilalist_on }}</td>
                    </tr>
                    <tr>
                        <th>Hospital Name</th>
                        <td>{{ $doctor_deatils->hospital_name }}</td>
                    </tr>
                    <tr>
                        <th>Chamber Name</th>
                        <td>{{ $doctor_deatils->chamber_name }}</td>
                    </tr>
                    <tr>
                        <th>Visiting Hour</th>
                        <td>{{ $doctor_deatils->visiting_hour}}</td>
                    </tr>
                    <tr>
                        <th>Chamber Location</th>
                        <td>{{ $doctor_deatils->chamber_location}}</td>
                    </tr>
                    <tr>
                        <th>Contact No</th>
                        <td>{{ $doctor_deatils->contact_no}}</td>
                    </tr>
                    <tr>
                        <th>Email Address</th>
                        <td>{{ $doctor_deatils->email_address}}</td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td>{{ $doctor_deatils->age}}</td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>{{ $doctor_deatils->gender}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
