@extends('frontend.master')

@section('content')

{{--

    <div class="container">
        <div class="main-body">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">

            </nav>
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img width="150px" src="{{url('/uploads/user/'.auth()->user()->image)}}" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>{{ auth()->user()->name }}</h4>
                                    <p class="text-secondary mb-1">{{ auth()->user()->address }}</p>
                                    <p class="text-muted font-size-sm">{{ auth()->user()->contact_no }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->name }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->email }}
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- end of patient profile information --}}

    {{--patient Appontment information Table --}}
    <form action="" style="padding: 80px" >
        <style>
            #appointment{
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            #appointment td,#appointment th{
                border: 1px solid #ddd;
                padding: 8px

            }
            #appointment tr:nth-child(even){
                background-color: #0bfdfd;
            }
            #appointment th{
                padding-top: 17px;
                padding-bottom: 17px;
                text-align: left;
                background-color: #4caf50;
                color:#fff;
            }
            </style>
        <table id=appointment class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Appointment ID</th>
                    <th scope="col">Patient ID</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Consultation time</th>
                    <th scope="col">Appointment Serial Number</th>
                    <th scope="col">Status</th>
                    <th scope="col">Test Report</th>
                    <th scope="col">Cancel Appointment</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($appointment_list as $key=>$data)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->patient_id }}</td>
                    <td>{{ $data->appointment_date }}</td>
                    <td>{{ $data->appointmentDoctor->doctors_name }}</td>
                    <td>{{ $data->appointmentSlot->form_time->format('h:i:s A')}}-{{ $data->appointmentSlot->to_time->format('h:i:s A')}}</td>
                    <td>{{ $data->serial_number }}</td>
                    <td>{{ $data->status }}</td>
                    <td class="text-center">
                        <a class="btn btn-sm btn-primary"  href="{{ route('testreport.list',$data->id)}}">View</a>

                        @if($data->status=='pending')
                    </td>  <td class="text-center">
                        <a class="btn btn-sm btn-danger"  href="{{ route('cancle.form',$data->id)}}">Cancel</a>
                    </td>
                    @endif

                </td>

                </tr>
                @endforeach

            </tbody>
        </table>




    </form>
@endsection
