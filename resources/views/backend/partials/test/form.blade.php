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
                    <form action="{{ route('test.create', $appointmentId) }}" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Test Description</label>
                                <input type="text" class="form-control" name="description" required>
                            </div>
                            <div class="form-group">
                                <label for="">Please patient report image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <button class="btn btn-primary waves-effect" type="submit">Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
















@endsection
