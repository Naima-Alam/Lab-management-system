@include('frontend.partials.footer')

@section('content')
    {{-- for delete message --}}
    {{-- <h2>Test Report Table</h2>
    <style>
        #appointment {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #appointment td,
        #appointment th {
            border: 1px solid #ddd;
            padding: 8px
        }

        #appointment tr:nth-child(even) {
            background-color: #0bfdfd;
        }

        #appointment th {
            padding-top: 17px;
            padding-bottom: 17px;
            text-align: left;
            background-color: #4caf50;
            color: #fff;
        }

    </style> --}}

    <div class="container">
        <div class="card">
            <div class="card-header">

                <div style="width:121px; margin:0 auto;">
                    <h2>Prescription</h2>
                </div>

                <strong style="padding: 15px">Date:{{ $prescription->created_at }}</strong>
                <div class="card-body">


                        <div class="col-sm-6">
                            <h6 class="mb-3">From:</h6>

                            <div><strong>Doctor Name:{{ $prescription->appointmentDoctor->doctors_name }}</strong>
                            </div>
                            <div>Chamber address:{{ $prescription->appointmentDoctor->chamber_location }}</div>
                            <div>Email:{{ $prescription->appointmentDoctor->email_address }}</div>
                            <div>Phone:{{ $prescription->appointmentDoctor->contact_no }}</div>
                        </div>

                        <div class="col-sm-6">
                            {{-- @dd($prescription ) --}}

                            <h6 class="mb-3">To:</h6>

                            <div>
                                <strong>Patient Name:{{ $prescription->paitent->name, $prescription->id }}</strong>
                            </div>
                            <div>
                                <strong>Contact No:{{ $prescription->paitent->contact_no, $prescription->id }}</strong>
                            </div>
                            <div>
                                <strong>Patient Email:{{ $prescription->paitent->email, $prescription->id }}</strong>
                            </div>



                            {{-- <div>Email:{{ $prescription->patient->email,$prescription->id }}</div> --}}
                            {{-- <div>Phone:{{ $prescription->patient->contact_no,$prescription->id }}</div> --}}
                        </div>






                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <table id=appointment class="table">
                                <thead>
                                    <tr>
                                        <th class="center">#</th>
                                        {{-- <th class="right">Appointment ID</th> --}}
                                        {{-- <th class="right" scope="col">Appointment ID</th> --}}
                                        <th scope="col">Medicine Name</th>
                                        <th scope="col">Dosage</th>
                                        <th scope="col">Frequency</th>
                                        <th scope="col">Period</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        {{-- <th scope="row">{{ $prescription + 1 }}</th> --}}
                                        <td>{{ 1 }}</td>
                                        <td>{{ $prescription->medicine_name }}</td>
                                        <td>{{ $prescription->dosage }}</td>
                                        <td>{{ $prescription->frequency }}</td>
                                        <td>{{ $prescription->period }}</td>
                                        {{-- <td>{{ $data->appointmentDoctor->doctors_name }}</td>
                                        \
                                        <td>{{ $data->description }}</td>

                                        </td> --}}
                                    </tr>


                                </tbody>
                            </table>


                        </table>

                    </div>

                        <div style="position: absolute" style='bottom: -150px'>
                            <div>
                                <strong>Diagnostic Center</strong>
                            </div>

                            <div>Uttara,Dhaka</div>
                            <div>71-101 Szczecin, Poland</div>
                            <div>Email: diagnostic@gmail.com</div>
                            <div>Phone: +8801784438727</div>
                        </div>



                </div>

            </div>
        </div>
    </div>

    @include('frontend.partials.header')
