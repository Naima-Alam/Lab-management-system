@extends('backend.master')

@section('start')
<style>
    #appointment{
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    #appointment td,#appointment th{
        border: 1px solid #ddd;
        padding: 8px

    }
    #appointment tr:nth-child(even){
        background-color: #0bfdfd;
    }
    #appointment th{
        padding-top: 17px;
        padding-bottom: 17px;
        text-align: left;
        background-color: #4caf50;
        color:#fff;
    }
    </style>
<table id=appointment class="table table-bordered my-4">
    <tr>
        <th>Patient Name</th>
        <th>Patient Email</th>
        <th>Address</th>
        <th>Age</th>
        <th>Image</th>
        <th>Gender</th>
        <th>Contact No</th>
        <th>Action</th>
    </tr>

    @foreach ( $user as $data )
    <tr>
        <td>{{ $data->name}}</td>
        <td>{{ $data->email}}</td>
        <td>{{ $data->address}}</td>
        <td>{{ $data->age}}</td>
        <td>
            <img width="150px" src="{{url('/uploads/user/'.$data->image)}}" alt="">
        </td>
        <td>{{ $data->gender}}</td>
        <td>{{ $data->contact_no}}</td>
        <td class="text-center">
            <a class="btn btn-sm btn-primary" href="{{ route('profile',$data->id)  }}">View</a>
            <a class="btn btn-sm btn-success" href="{{ route('doctor.edit', $data->id) }}">Edit</a>
            <a class="btn btn-sm btn-danger" href="{{ route('doctor.delete', $data->id) }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
