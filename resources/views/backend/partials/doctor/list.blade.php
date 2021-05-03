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



<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>
        <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
        <div class="header-search">
            <form action="{{route('doctor.search')}}" method="POST">
                @csrf
                <div class="form-group mb-0">
                    <i class="Search"></i>
                    <input name="search" type="text" placeholder="Search" class="form-control">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
                </div>
            </form>
        </div>
    </div>
</div>


{{--<div class="col-md-4">
            <form action="{{route('doctor.search')}}" method="POST">
                @csrf
            <input name="search" type="text" placeholder="Search" class="form-control">
            <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>--}}


@if (isset($search))
<p>
<span class="alart alart-success">you are searching for"{{$search}},found({{count($doctor)  }})</span>

</p>
@endif


<table class="table table-bordered my-4">
    <tr>
        <th>Doctor Name</th>
        <th>Image</th>
        <th>Specilalist On</th>
        <th>Chamber Name</th>
        <th>Visiting Hour</th>
        <th>Chamber location</th>
        <th>Contact No</th>
        <th>Action</th>
    </tr>

    @foreach ( $doctor as $data )
    <tr>
        <td>{{ $data->doctors_name}}</td>
        <td>
            <img width="150px" src="{{url('/uploads/doctor/'.$data->image)}}" alt="">
        </td>
        <td>{{ $data->specilalist_on}}</td>
        <td>{{ $data->chamber_name}}</td>
        <td>{{ $data->visiting_hour}}</td>
        <td>{{ $data->chamber_location}}</td>
        <td>{{ $data->contact_no}}</td>
        <td class="text-center">
            <a class="btn btn-sm btn-primary" href="{{ route('doctor.view',$data->id)  }}">View</a>
            <a class="btn btn-sm btn-success" href="{{ route('doctor.edit', $data->id) }}">Edit</a>
            <a class="btn btn-sm btn-danger" href="{{ route('doctor.delete', $data->id) }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
{{ $doctor->links() }}

@endsection
