@extends('backend.master')

@section('start')

<table class="table table-bordered my-4">
    <tr>
        <th>Department Name</th>
        <th>Action</th>
    </tr>

    @foreach ( $department as $data )
    <tr>
        <td>{{ $data->department_name}}</td>
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
