@extends('backend.master')

@section('start')

<table class="table table-bordered bg-warning">
    <h4>Single Patient Test Report Information</h4>
    <tr>
        <th>Patient ID</th>
        <td>{{$test->Patient_id}}</td>
    </tr>
    <tr>
        <th>Test Image</th>
        <td>
            <img width="150px" src="{{url('/uploads/test/'.$test->image)}}" alt="">
        </td>
    </tr>
    <tr>
        <th>Doctor ID</th>
        <td>{{$test->doctor_id}}</td>
    </tr>
    <tr>
        <th>Tests Name</th>
        <td>{{$test->test_name}}</td>
    </tr>
    <tr>
        <th>Test Id</th>
        <td>{{$test->test_id}}</td>
    </tr>

    <tr>
        <th>Test Slot</th>
        <td>{{$test->test_slot}}</td>
    </tr>

    <tr>
        <th>Gender</th>
        <td>{{$test->gender}}</td>
    </tr>
    <tr>
        <th>Test Description</th>
        <td>{{$test->description}}</td>
    </tr>

</table>







</table>












@endsection
