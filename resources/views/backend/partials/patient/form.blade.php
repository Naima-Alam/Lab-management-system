@extends('backend.master')


@section('start')

<div class="row clearfix">
    <div class="col-lg-10 col-md-7 col-sm-7 col-xs-8">
        <div class="card">
            <div class="header">
                <h2>Patient Registration Form</h2>
                <ul class="header-dropdown m-r--5">
                </ul>
            </div>
            <div class="body">
                <form action="{{route('patient.create')}}"method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Patient  Name</label>
                            <input type="text" class="form-control" name="patient_name">
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Patient Mail</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Doctor's Name</label>
                            <input type="text" class="form-control" name="doctors_name" required>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Patient Appoinment Date</label>
                            <input type="date" class="form-control" name="appoinment_date" required>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Patient Appoinment Time</label>
                            <input type="time" class="form-control" name="appointment_time" required>
                    </div>

                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <label class="form-label">Patient Age</label>
                        <input type="age" class="form-control" name="age" required>
                    </div>
                </div>

                    <div class="form-group">
                        <label for="male">Male</label>
                        <input type="radio" value="Male" name="gender" id="male" class="with-gap">

                        <label for="female" class="m-l-20">Female</label>
                        <input type="radio" value="female" name="gender" id="female" class="with-gap">
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Contact no</label>
                            <input type="integer" class="form-control" name="contact_no" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Please upload product image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="checkbox">I have read and accept the terms</label>
                        <input type="checkbox" id="checkbox" name="checkbox">
                    </div>

                    <button class="btn btn-primary waves-effect" type="submit">Save</button>

                </form>
            </div>
        </div>
    </div>
</div>
















@endsection
