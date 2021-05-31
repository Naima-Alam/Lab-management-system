@extends('backend.master')

@section('start')
    <style>
        #appointment {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #appointment td,
        #appointment th {
            border: 1px solid #ddd;
            padding: 8px
        }

        #appointment tr:nth-child(even) {
            background-color: #0bfdfd;
        }

        #appointment th {
            padding-top: 17px;
            padding-bottom: 17px;
            text-align: left;
            background-color: #4caf50;
            color: #fff;
        }

    </style>
    <table id=appointment class="table table-bordered my-4">
        <tr>
            <th>Test Name</th>
            <th>Department ID</th>
            <th>Test Price</th>
            <th>Action</th>
        </tr>

        @foreach ($testinfo as $data)
            <tr>
                <td>{{ $data->test_name }}</td>
                <td>{{ $data->department_id }}</td>
                <td>{{ $data->test_price }}</td>
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
