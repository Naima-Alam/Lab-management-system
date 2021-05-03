@extends('backend.master')
@section('start')
{{--for delete message  --}}
@if (session('delete_success'))
<div class="col-lg-4 m-auto alert alert-warning alert-dismissible fade show" role="alert">
    <strong class="font-weight-bold">{{ session('delete_success') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<h2>New Information Table</h2>
<table class="table table-bordered my-4">
    <tr>
        <th>Doctors Name</th>
        <th>Patient Name</th>

        <th>Appointment Id</th>
        <th>Test Name</th>
        <th>Appointment Time</th>
        <th>Appointment Date</th>
        <th>Briefly describe the reason for the appointment:</th>
        <th>Action</th>
    </tr>

    {{-- @dd($appointment) --}}
    @foreach ( $appointment as $data )


    <tr>
        <td>{{ $data->appointmentDoctor->doctors_name}}</td>
        <td>{{ $data->patient_name}}</td>

        <td>{{ $data->appointment_id}}</td>
        <td>
            @isset ($data->appointmentTest->test_name)
            {{ $data->appointmentTest->test_name}}
            @endisset
        </td>
        <td>{{ $data->appointment_time}}</td>
        <td>{{ $data->appointment_date}}</td>
        <td>{{ $data->reason_name}}</td>


        <td class="text-center">
            <div class="btn-group btn-sm">
                <a class="btn btn-sm btn-primary" href="{{  route('appointment.view',$data->id) }}">View</a>
                <a class="btn btn-sm btn-success" href="{{ route('appointment.accepted', $data->id) }}">Accepted</a>
                <a class="btn btn-sm btn-danger" href="{{ route('appointment.rejected', $data->id) }}">Rejected</a>
            </div>
    </tr>

    @endforeach
</table>
{{ $appointment->links() }}

@endsection
