@extends('backend.master')


@section('start')

    <div class="row clearfix">
        <div class="col-lg-10 col-md-7 col-sm-7 col-xs-8">
            <div class="card">
                <div class="header">
                    <h2>Patient Prescription</h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                    <form action="{{ route('prescription.create') }}" method="post" enctype="multipart/form-data">

                        @csrf
                        <input type="hidden" name="patient_id" value="{{ $id }}">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Medicine Name</label>
                                <input type="text" class="form-control" name="medicine_name" required>
                            </div>
                            <div class="form-group">
                                <label for="form-label">Dosage</label>
                                <input type="text" name="dosage" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="form-label">Frequency</label>
                                <input type="text" name="frequency" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="form-label">Period</label>
                                <input type="text" name="period" class="form-control">
                            </div>

                            <button class="btn btn-primary waves-effect" type="submit">Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
















@endsection
