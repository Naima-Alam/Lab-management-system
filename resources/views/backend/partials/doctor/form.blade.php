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
                    <form action="{{ route('doctor.create') }}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Doctor Name</label>
                                <input type="text" class="form-control" name="doctors_name">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Professional Degree</label>
                                <input type="text" class="form-control" name="professional_degree" required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Designation</label>
                                <input type="text" class="form-control" name="designation" required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Specilalist On</label>
                                <input type="text" class="form-control" name="specilalist_on" required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Hospital Name</label>
                                <input type="text" class="form-control" name="hospital_name" required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Chamber Name</label>
                                <input type="string" class="form-control" name="chamber_name" required>
                            </div>

                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Visiting Hour</label>
                                <input type="time" class="form-control" name="visiting_hour" required>
                            </div>
                        </div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <label class="form-label">Chamber location</label>
                        <input type="string" class="form-control" name="chamber_location" required>
                    </div>
                </div>
            </div>
            <div class="form-group form-float">
                <div class="form-line">
                    <label class="form-label">Contact No</label>
                    <input type="integer" class="form-control" name="contact_no" required>
                </div>
            </div>
        </div>
        <div class="form-group form-float">
            <div class="form-line">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" name="email_address" required>
            </div>
        </div>
        <div class="form-group form-float">
            <div class="form-line">
                <label class="form-label">Doctor Age</label>
                <input type="integer" class="form-control" name="age" required>
            </div>
        </div>
        <div class="form-group">
            <label for="">Please upload product image</label>
            <input type="file" name="image" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="male">Male</label>
        <input type="radio" value="Male" name="gender" id="male" class="with-gap">

        <label for="female" class="m-l-20">Female</label>
        <input type="radio" value="female" name="gender" id="female" class="with-gap">
    </div>

    <div class="form-group">
        <label for="doctor">terms and condition</label>
        <input type="radio" value="doctor" name="role" id="doctor" class="with-gap">

    </div>
    <br>
    <button type="submit" class="btn btn-success">Submit</button>
    </div>

    </form>




















@endsection
