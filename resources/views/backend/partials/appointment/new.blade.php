@extends('backend.master')
@section('start')
    {{-- for delete message --}}
    @if (session('delete_success'))
        <div class="col-lg-4 m-auto alert alert-warning alert-dismissible fade show" role="alert">
            <strong class="font-weight-bold">{{ session('delete_success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <h2>New Information Table</h2>
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
            <th>Doctors Name</th>
            <th>Patient Name</th>
            <th>Test Name</th>
            <th>Appointment Time</th>
            <th>Appointment Date</th>
            <th>Briefly describe the reason for the appointment:</th>
            <th>Action</th>
            <th>Status</th>
            <th>Payment Status</th>
        </tr>

        {{-- @dd($appointment) --}}
        @foreach ($appointment as $data)
            <tr>
                <td>{{ $data->appointmentDoctor->doctors_name }}</td>
                <td>{{ $data->patient->name }}</td>
                <td>
                    @isset($data->tests)
                        @foreach ($data->tests as $test)
                            {{ $test->test_name }}
                        @endforeach

                    @endisset
                </td>
                <td>{{ $data->appointmentSlot->form_time }}-{{ $data->appointmentSlot->to_time->format('h:i:s A') }}</td>
                <td>{{ $data->appointment_date }}</td>
                <td>{{ $data->reason_name }}</td>


                <td class="text-center">
                    <div class="btn-group btn-sm">
                        <a class="btn btn-sm btn-primary" href="{{ route('appointment.view', $data->id) }}">View</a>

                        <a class="btn btn-secondary" href="{{ route('serialnumber.form', $data->id) }}">serial Numbe</a>

                        <a class="btn btn-sm btn-success"
                            href="{{ route('appointment.status', ['id' => $data->id, 'status' => 'confirmed']) }}">Accepted</a>

                        <a class="btn btn-sm btn-danger"
                            href="{{ route('appointment.rejected', $data->id) }}">Rejected</a>

                        {{-- </div>
            <td class="text-center">
            <div class="btn-group btn-sm">
             <a class="btn btn-sm btn-danger" href="{{ route('appointment.status', $data->id) }}">Status</a>
             </div> --}}

                <td>
                    {{ $data->status }}
                </td>
                <td>
                    {{ optional($data->paymentstatus)->status ?? 'unpaid' }}
                </td>

            </tr>

        @endforeach
    </table>
    {{ $appointment->links() }}

@endsection
