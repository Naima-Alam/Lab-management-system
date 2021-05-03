@extends('backend.master')


@section('start')

<div class="row clearfix">
    <div class="col-lg-10 col-md-7 col-sm-7 col-xs-8">
        <div class="card">
            <div class="header">
                <h2>Test Report Form</h2>
                <ul class="header-dropdown m-r--5">
                </ul>
            </div>
            <div class="body">
                <form action="{{route('test.create')}}"method="post" enctype="multipart/form-data">

                    @csrf
{{-- @dd($pateinet) --}}
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label" for="Patient_id">Patient Name</label>
                            <select name="Patient_id" id="Patient_name">
                                @foreach ($patinet as $data)
                                    <option value="{{ $data->id }}">{{ $data->id }}</option>
                                @endforeach
                            </select>
                        </div>

                    <div class="form-group">
                        <label for="form-label">Doctors name</label>
                        {{-- <input type="text" class="form-control" name="doctors_name" id="doctors_name"> --}}
                        <select name="doctors_name" class="form-control"id="doctors_name" >
                          @foreach ($doctor_deatils as $data)
                              <option value="{{ $data->id }}">{{ $data->doctors_name }}</option>
                          @endforeach
                        </select>
                      </div>


                    <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Test Name</label>
                                <input type="text" class="form-control" name="test_name" required>
                            </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Test Id</label>
                            <input type="integer" class="form-control" name="test_id" required>
                        </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Test Slot</label>
                            <input type="dateTime" class="form-control" name="test_slot" required>
                        </div>
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
                            <label class="form-label">Test Description</label>
                            <input type="text" class="form-control" name="description" required>
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
