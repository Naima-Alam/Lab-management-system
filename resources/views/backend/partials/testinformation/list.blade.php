@extends('backend.master')

@section('start')

<table class="table table-bordered my-4">
    <tr>
        <th>Test Name</th>
        <th>Department ID</th>
        <th>Test Price</th>
        <th>Action</th>
    </tr>

    @foreach ( $testinfo as $data )
    <tr>
        <td>{{ $data->test_name}}</td>
        <td>{{ $data->department_id}}</td>
        <td>{{ $data->test_price}}</td>
@auth


<td class="text-center">

    <a class="btn btn-sm btn-success" href="">Edit</a>
    <a class="btn btn-sm btn-danger" href="">Delete</a>
</td>
        @endauth
    </tr>
    @endforeach
</table>


@endsection
