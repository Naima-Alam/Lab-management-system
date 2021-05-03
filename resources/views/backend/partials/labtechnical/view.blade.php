@extends('backend.master')

@section('start')

<table class="table table-bordered bg-warning">
    <h4>Single Labtechnical Information</h4>

    <tr>
        <th>Labtechnical Name</th>
        <td>{{$labtechnical->labtechnical_name}}</td>
    </tr>
    <tr>
        <th>Labtechnical Image</th>
        <<td><img src="{{asset('/uploads/Labtechnical/'.$labtechnical->image)}}" alt="photo" style="height: 50px;width: 50px;object-fit: cover"></td>
    </tr>

    <tr>
        <th>Labtechnical ID</th>
        <td>{{$labtechnical->labtechnical_id}}</td>
    </tr>
    <tr>
        <th>Contact No</th>
        <td>{{$labtechnical->contact_no}}</td>
    </tr>
    <tr>
        <th>Gender</th>
        <td>{{$labtechnical->gender}}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{$labtechnical->email}}</td>
    </tr>





@endsection
