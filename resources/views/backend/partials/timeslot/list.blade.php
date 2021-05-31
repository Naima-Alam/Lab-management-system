@extends('backend.master')

@section('start')

    <table class="table table-bordered my-4">
        <tr>
            <th>Form Time</th>
            <th>To Time</th>

            <th>Action</th>
        </tr>

        @foreach ($timeslot as $data)
            <tr>
                <td>{{ $data->form_time }}</td>
                <td>{{ $data->to_time }}</td>

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
