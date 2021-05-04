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

<table class="table table-bordered my-4">
    <tr>
        <th>Labtechnican Name</th>
        <th>Image</th>
        <th>Labtechnican Id</th>
        <th>Gender</th>
        <th>Labtechnican Email</th>
        <th>Contact No</th>
        <th>Action</th>
    </tr>

    @foreach ( $labtechnical as $data )
    <tr>
        <td>{{ $data->labtechnical_name}}</td>
        <td>
            <img width="150px" src="{{url('/uploads/Labtechnical/'.$data->image)}}" alt="">
        </td>
        <td>{{ $data->labtechnical_id}}</td>
        <td>{{ $data->email}}</td>
        <td>{{ $data->gender}}</td>
        <td>{{ $data->contact_no}}</td>
        <td class="text-center">
            <a class="btn btn-sm btn-primary"  href="{{ route('labtechnical.view',$data->id)  }}">View</a>
            <a class="btn btn-sm btn-success"  href="{{ route('labtechnical.edit', $data->id) }}">Edit</a>
            <a class="btn btn-sm btn-danger"  href="{{ route('labtechnical.delete', $data->id) }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
{{ $labtechnical->links() }}

@endsection
