@extends('backend.master')


@section('start')
    <footer data-stellar-background-ratio="5">
        <section id="team" data-stellar-background-ratio="1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="about-info">
                            <div class="row">
                                <div class="col-md-2">

                                </div>

                                <div class="col-md-8">

                                    <h2>Department Form</h2>
                                    <form action="{{ route('department.create') }}" method="post"
                                        enctype="multipart/form-data">

                                        @csrf

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <label class="form-label">Department Name</label>
                                                <input type="text" class="form-control" name="department_name">
                                            </div>
                                            <div class="col-md-2">

                                            </div>

                                            <br>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </form>




















                                @endsection
