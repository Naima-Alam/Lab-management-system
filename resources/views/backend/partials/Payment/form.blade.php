@extends('frontend.master')


@section('content')

    {{-- @dd($appointment_list); --}}
    <div class="row clearfix" style="padding: 45px">
        <div class="col-lg-10 col-md-7 col-sm-7 col-xs-8">
            <div class="card">
                <div class="header">
                    <h2>Payment Form</h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                    <form action="{{ route('payment.create', $appointment_list->id) }}" method="post">

                        @csrf
                        <div>
                            <p>Appointment ID: {{ $appointment_list->id }}</p>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Bikash Number</label>
                                <input type="text" class="form-control" name="bikash">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Transection ID</label>
                                <input type="text" class="form-control" name="transection" required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Amount</label>
                                <input type="text" class="form-control" name="amount" required>
                            </div>
                        </div>
                </div>
                <button type="submit" class="btn btn-success">Confirm Payment</button>
            </div>

            </form>
        @endsection
