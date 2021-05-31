@extends('backend.master')

@section('start')

    <table class="table table-bordered bg-warning">
        <h4>Single Labtechnican Information</h4>

        <tr>
            <th>Labtechnican Name</th>
            <td>{{ $labtechnical->labtechnical_name }}</td>
        </tr>
        <tr>
            <th>Labtechnical Qualification</th>
            <td>{{ $labtechnical->qualification }}</td>
        </tr>
        <tr>
            <th>Labtechnican Image</th>
            <<td><img src="{{ asset('/uploads/Labtechnical/' . $labtechnical->image) }}" alt="photo"
                    style="height: 50px;width: 50px;object-fit: cover"></td>
        </tr>

        <tr>
            <th>Labtechnican ID</th>
            <td>{{ $labtechnical->labtechnical_id }}</td>
        </tr>
        <tr>
            <th>Contact No</th>
            <td>{{ $labtechnical->contact_no }}</td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>{{ $labtechnical->gender }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $labtechnical->email }}</td>
        </tr>





    @endsection
