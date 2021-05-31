@extends('backend.master')


@section('start')
    @if (session('delete_success'))
        <div class="col-lg-4 m-auto alert alert-warning alert-dismissible fade show" role="alert">
            <strong class="font-weight-bold">{{ session('delete_success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    <h2>Appointment Form</h2>
    <ul class="header-dropdown m-r--5">
        <form action="{{ route('acreate.update', $appointment->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="text">Doctors Name:</label>
                <input type="text" class="form-control" id="doctors_name" value="{{ $appointment->doctors_name }}">
            </div>
            <div class="form-group">
                <label for="text">Patient Name:</label>
                <input type="text" class="form-control" id="patient_name" value="{{ $appointment->patient_name }}">
            </div>
            <div class="form-group">
                <label for="integer">Appointment ID:</label>
                <input type="integer" class="form-control" id="appointment_id" value="{{ $appointment->appointment_id }}">
            </div>
            <div class="form-group">
                <label for="text">Test Name:</label>
                <input type="text" class="form-control" id="test_name" value="{{ $appointment->test_name }}">
            </div>
            <div class="form-group">
                <label for="time">Appointment Time:</label>
                <input type="time" class="form-control" id="appointment_time"
                    value="{{ $appointment->appointment_time }}">
            </div>
            <div class="form-group">
                <label for="date">Appointment Date:</label>
                <input type="date" class="form-control" id="appointment_date"
                    value="{{ $appointment->appointment_date }}">
            </div>
            <div class="form-group">
                <label for="text">Briefly describe the reason for the appointment:</label>
                <input type="text" class="form-control" id="reason_name" value="{{ $appointment->reason_name }}">
            </div>

            <button class="btn btn-primary waves-effect" type="submit">Save</button>
        </form>




    @endsection
