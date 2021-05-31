@extends('backend.master')

@section('start')


    <table class="table table-bordered bg-warning">
        <h4>Single Doctor Information</h4>

        <tr>
            <th>Doctor Name</th>
            <td>{{ $doctor->doctors_name }}</td>
        </tr>
        <tr>
            <th>Doctor Image</th>
            <td>
                <img width="150px" src="{{ url('/uploads/doctor/' . $doctor->image) }}" alt="">
            </td>
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
            <th>Chamber location</th>
            <td>{{ $doctor->chamber_location }}</td>
        </tr>

        <tr>
            <th>Contact No</th>
            <td>{{ $doctor->contact_no }}</td>
        </tr>
        <tr>
            <th>Email Address</th>
            <td>{{ $doctor->email_address }}</td>
        </tr>

        </tr>

        <th>Age</th>
        <td>{{ $doctor->age }}</td>
        </tr>



        </tr>

        <th>Gender</th>
        <td>{{ $doctor->gender }}</td>
        </tr>







    @endsection
