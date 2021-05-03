@extends('backend.master')

@section("start")
{{--for delete message  --}}
@if (session('delete_success'))
    <div class="col-lg-4 m-auto alert alert-warning alert-dismissible fade show" role="alert">
        <strong class="font-weight-bold">{{ session('delete_success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<h2>Patient Information Table</h2>
<table class="table table-bordered my-4">
    <tr>
        <th>Patient Name</th>
        <th>Patient Image</th>
        <th>Appoinment Date</th>
        <th>Appoinment Time</th>
        <th>Contact no</th>
        <th>Action</th>



    </tr>
    @foreach ($patients as $data)


    <tr>
        <td>{{$data->patient_name}}</td>
        <td>
            <img width="150px" src="{{url('/uploads/patient/'.$data->image)}}" alt="">
        </td>
        <td>{{$data->appoinment_date}}</td>
        <td>{{$data->appointment_time}}</td>
        <td>{{$data->contact_no}}</td>

        <td class="text-center">
            <a class="btn btn-sm btn-primary"  href="{{ route('patient.view',$data->id)}}">View</a>
            <a class="btn btn-sm btn-success"  href="{{ route('patient.edit', $data->id) }}">Edit</a>
            <a class="btn btn-sm btn-danger"  href="{{ route('patient.delete', $data->id) }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
{{ $patients->links() }}

@endsection
