@extends('backend.master')


@section('start')

    <div class="row clearfix">
        <div class="col-lg-10 col-md-7 col-sm-7 col-xs-8">
            <div class="card">
                <div class="header">
                    <h2>Labtechnican Registration Form</h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                    <form action="{{ route('labtechnical.create') }}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Labtechnican Name</label>
                                <input type="text" class="form-control" name="labtechnical_name">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Labtechnican Qualification</label>
                                <input type="text" class="form-control" name="qualification">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Labtechnican ID</label>
                                <input type="text" class="form-control" name="labtechnical_id" required>
                            </div>
                        </div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <label class="form-label">Labtechnical Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Contact No</label>
                            <input type="text" class="form-control" name="contact_no" required>
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
                        <input type="radio" value="labtechnical" name="role" id="labtechnical" class="with-gap">

                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>

                </form>






            @endsection
