@extends('backend.master')

@section('start')


<table class="table table-bordered bg-warning">
    <h4>Appointment Information</h4>

    <tr>
        <th>Doctors Name</th>
        <td>{{$appointment->doctors_name}}</td>
        {{-- <td>{{$appointment->doctors_name}}</td> --}}
    </tr>
    <tr>
        <th>Patient Name</th>
        <td>{{$appointment->patient_name}}</td>
    </tr>

    <tr>
        <th>Appointment Id</th>
        <td>{{$appointment->appointment_id}}</td>
    </tr>
    <tr>
        <th>Test Name</th>
        <td>{{$appointment->test_name}}</td>
    </tr>
    <tr>
        <th>Appointment Time</th>
        <td>{{$appointment->appointment_time}}</td>
    </tr>
    <tr>
        <th>Appointment Date</th>
        <td>{{$appointment->appointment_date}}</td>
    </tr>
    <tr>
        <th>Briefly describe the reason for the appointment:</th>
        <td>{{$appointment->reason_name}}</td>
    </tr>







    @endsection
