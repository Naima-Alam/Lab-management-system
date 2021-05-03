@extends('backend.master')

@section('start')

<div class="row clearfix">
    <div class="col-lg-10 col-md-7 col-sm-7 col-xs-8">
        <div class="card">
            <div class="header">
                <h2> Single Patient Test Report</h2>
                <ul class="header-dropdown m-r--5">
                </ul>
            </div>
            <div class="body">
                <form action="{{route('test.update', $test->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Patient ID</label>
                            <input type="id" class="form-control" name="Patient_id"value="{{ $test->Patient_id}}">
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Doctor ID</label>
                            <input type="id" class="form-control" name="doctors_id"value="{{ $test->dotor_id}}">
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Test Name</label>
                            <input type="text" class="form-control" name="test_name" value="{{ $est->test_name }}">
                        </div>
                    </div>


                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Test Slot</label>
                            <input type="dateTime" class="form-control" name="test_slot"  value="{{ $patients->test_slot}}">
                    </div>

                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <label class="form-label">Test Id</label>
                        <input type="id" class="form-control" name="test_id" value="{{ $test->test_id}}">
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
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" value="{{ $test->description}}">
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Test Image</label>
                            <input type="file" class="form-control" name="image" value="{{ $patients->image }}">
                        </div>


                    <button class="btn btn-primary waves-effect" type="submit">Save</button>

                </form>
            </div>
        </div>
    </div>
</div>
















@endsection
