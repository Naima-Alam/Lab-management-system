@extends('backend.master')

@section('start')

<table class="table table-bordered bg-warning">
    <h4>Single Patient Information</h4>
    <tr>
        <th>Patient Name</th>
        <td>{{$patients->first_name}}</td>
    </tr>
    <tr>
        <th>Patient Image</th>
        <td>
            <img width="150px" src="{{url('/uploads/patient/'.$patients->image)}}" alt="">
        </td>
    </tr>
    <tr>
        <th>Patient Email</th>
        <td>{{$patients->email}}</td>
    </tr>
    <tr>
        <th>Doctor's Name</th>
        <td>{{$patients->doctors_name}}</td>
    </tr>
    <tr>
        <th>Appoinment Date</th>
        <td>{{$patients->appoinment_date}}</td>
    </tr>

    <tr>
        <th>Appoinment Time</th>
        <td>{{$patients->appointment_time}}</td>
    </tr>
    <tr>
        <th>Patient Age</th>
        <td>{{$patients->age}}</td>
    </tr>
    <tr>
        <th>Gender</th>
        <td>{{$patients->gender}}</td>
    </tr>
    <tr>
        <th>Contact no</th>
        <td>{{$patients->contact_no}}</td>
    </tr>

</table>







</table>












@endsection
