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

    <h2> All Patient Prescription Report</h2>
    <table class="table table-bordered my-4">
        <tr>

            <th>Doctor Name</th>
            <th>Patient Name</th>
            <th>Medicine Name</th>
            <th>Dosage</th>
            <th>Frequency</th>
            <th>Period</th>
            <th>Action</th>



        </tr>
        @foreach ($prescription as $data)


            <tr>
                <td>{{ $data->appointmentDoctor->name }}</td>
                <td>{{ $data->paitent->name }}</td>

                <td>{{ $data->medicine_name }}</td>
                <td>{{ $data->dosage}}</td>
                <td>{{ $data->frequency}}</td>
                <td>{{ $data->period}}</td>
                {{-- relation --}}
                {{-- <td>
                    @isset($data->testDoctor->doctors_name)
                        {{ $data->testDoctor->doctors_name }}
                    @endisset
                </td> --}}


                {{-- <td>{{ $data->test_id }}</td> --}}

                <td class="text-center">
                    <a class="btn btn-sm btn-primary" href="{{ route('prescription.view', $data->id) }}">View</a>
                    {{-- <a class="btn btn-sm btn-success" href="{{ route('test.edit', $data->id) }}">Edit</a> --}}
                    {{-- <a class="btn btn-sm btn-danger" href="{{ route('test.delete', $data->id) }}">Delete</a> --}}
                </td>
            </tr>
        @endforeach
    </table>
    {{-- {{ $test->links() }} --}}

@endsection
