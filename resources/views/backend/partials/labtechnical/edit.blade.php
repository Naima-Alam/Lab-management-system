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
                    <form action="{{ route('labtechnical.update', $labtechnical->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Labtechnican Name</label>
                                <input type="text" class="form-control" name="labtechnical_name"
                                    value="{{ $labtechnical->labtechnical_name }}">
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Labtechnican Qualification</label>
                                <input type="text" class="form-control" name="qualification"
                                    value="{{ $labtechnical->qualification }}">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Labtechnican ID</label>
                                <input type="text" class="form-control" name="labtechnical_id"
                                    value="{{ $labtechnical->labtechnical_id }}">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Labtechnican Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $labtechnical->email }}">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Contact No</label>
                                <input type="text" class="form-control" name="contact_no"
                                    value="{{ $labtechnical->contact_no }}">
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Labtechnican image</label>
                                    <input type="file" class="form-control" name="image"
                                        value="{{ $labtechnical->image }}">
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


                @endsection
