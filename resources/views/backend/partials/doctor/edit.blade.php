@extends('backend.master')

@section('start')

    <div class="row clearfix">
        <div class="col-lg-10 col-md-7 col-sm-7 col-xs-8">
            <div class="card">
                <div class="header">
                    <h2>Doctor Registration Form</h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                    <form action="{{ route('doctor.update', $doctor->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Doctor Name</label>
                                <input type="text" class="form-control" name="doctors_name"
                                    value="{{ $doctor->doctors_name }}">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Professional Degree</label>
                                <input type="text" class="form-control" name="professional_degree"
                                    value="{{ $doctor->professional_degree }}">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Designation</label>
                                <input type="text" class="form-control" name="designation"
                                    value="{{ $doctor->designation }}">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Specilalist On</label>

                                <input type="text" class="form-control" name="specilalist_on"
                                    value="{{ $doctor->specilalist_on }}">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Hospital Name</label>
                                <input type="text" class="form-control" name="hospital_name"
                                    value="{{ $doctor->hospital_name }}">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Chamber Name</label>
                                <input type="string" class="form-control" name="chamber_name"
                                    value="{{ $doctor->chamber_name }}">
                            </div>

                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Visiting Hour</label>
                                <input type="time" class="form-control" name="visiting_hour"
                                    value="{{ $doctor->visiting_hour }}">
                            </div>
                        </div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <label class="form-label">Chamber location</label>
                        <input type="string" class="form-control" name="chamber_location"
                            value="{{ $doctor->chamber_location }}">
                    </div>
                </div>
            </div>
            <div class="form-group form-float">
                <div class="form-line">
                    <label class="form-label">Contact No</label>
                    <input type="integer" class="form-control" name="contact_no" value="{{ $doctor->contact_no }}">
                </div>
            </div>
        </div>
        <div class="form-group form-float">
            <div class="form-line">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" name="email_address" value="{{ $doctor->email_address }}">
            </div>
        </div>
        <div class="form-group form-float">
            <div class="form-line">
                <label class="form-label">Doctor Age</label>
                <input type="integer" class="form-control" name="age" value="{{ $doctor->age }}">
            </div>
        </div>
        <div class="form-group form-float">
            <div class="form-line">
                <label class="form-label">Doctor image</label>
                <input type="file" class="form-control" name="image" value="{{ $doctor->image }}">
            </div>
        </div>

        <div class="form-group">
            <label for="male">Male</label>
            <input type="radio" value="Male" name="gender" id="male" class="with-gap">

            <label for="female" class="m-l-20">Female</label>
            <input type="radio" value="female" name="gender" id="female" class="with-gap">
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
