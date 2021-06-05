@include('frontend.partials.footer')

@section('content')
    {{-- for delete message --}}
{{--
    <h2>Test Report Table</h2>
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
            Test Report
            @foreach ($appointment_list as $key => $data)
            <div class="col-sm-6">
                <strong>Date:{{ $data->updated_at }}</strong>
                @endforeach
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h6 class="mb-3">From:</h6>
                        <div>
                            <strong>Diagnostic Center</strong>
                        </div>
                        <div>Uttara,Dhaka</div>
                        <div>Email: diagnostic@gmail.com</div>
                        <div>Phone: +8801784438727</div>
                    </div>

                    <div class="col-sm-6">

                        <h6 class="mb-3">To:</h6>
                        <div>
                            <strong>Patient ID:{{ $data->patient->name,$data->id }}</strong>
                        </div>

                        <div><strong>Doctor Name:{{ $data->appointmentDoctor->doctors_name  }}</strong>
                        </div>
                        <div>Email:{{ $data->patient->email,$data->id }}</div>
                        <div>Phone:{{ $data->patient->contact_no,$data->id }}</div>
                    </div>



                </div>

                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <table id=appointment class="table">
                            <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th class="right">Appointment ID</th>
                                    {{-- <th class="right" scope="col">Appointment ID</th> --}}
                                    <th scope="col">Patient ID</th>
                                    <th scope="col">Appointment Date</th>
                                    <th scope="col">Doctor Name</th>
                                    <th scope="col">Consultation time</th>
                                    <th scope="col">Test Information</th>
                                    <th scope="col">Test Image</th>
                                    <th scope="col">Test report pdf</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointment_list as $key => $data)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->patient_id }}</td>
                                        <td>{{ $data->appointment_date }}</td>
                                        <td>{{ $data->appointmentDoctor->doctors_name }}</td>
                                        <td>{{ $data->appointmentSlot->form_time->format('h:i:s A') }}-{{ $data->appointmentSlot->to_time->format('h:i:s A') }}
                                        </td>
                                        <td>{{ $data->description }}</td>
                                        <td> <img width="150px" src="{{ url('/uploads/appointment/' . $data->image) }}" alt=""></td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-danger" href="{{ route('download.pdf', $data->id) }}">Download</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>


                        </table>

                    </div>

                </div>

            </div>
        </div>
    </div>

    @include('frontend.partials.header')

    {{-- <table class="table table-striped">
        <thead>
        <tr>
        <th class="center">#</th>
        <th>Item</th>
        <th>Description</th>

        <th class="right">Unit Cost</th>
          <th class="center">Qty</th>
        <th class="right">Total</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td class="center">1</td>
        <td class="left strong">Origin License</td>
        <td class="left">Extended License</td>

        <td class="right">$999,00</td>
          <td class="center">1</td>
        <td class="right">$999,00</td>
        </tr>
        <tr>
        <td class="center">2</td>
        <td class="left">Custom Services</td>
        <td class="left">Instalation and Customization (cost per hour)</td>

        <td class="right">$150,00</td>
          <td class="center">20</td>
        <td class="right">$3.000,00</td>
        </tr>
        <tr>
        <td class="center">3</td>
        <td class="left">Hosting</td>
        <td class="left">1 year subcription</td>

        <td class="right">$499,00</td>
          <td class="center">1</td>
        <td class="right">$499,00</td>
        </tr>
        <tr>
        <td class="center">4</td>
        <td class="left">Platinum Support</td>
        <td class="left">1 year subcription 24/7</td>

        <td class="right">$3.999,00</td>
          <td class="center">1</td>
        <td class="right">$3.999,00</td>
        </tr>
        </tbody>
        </table>
        </div>
        <div class="row">
        <div class="col-lg-4 col-sm-5">

        </div>

        <div class="col-lg-4 col-sm-5 ml-auto">
        <table class="table table-clear">
        <tbody>
        <tr>
        <td class="left">
        <strong>Subtotal</strong>
        </td>
        <td class="right">$8.497,00</td>
        </tr>
        <tr>
        <td class="left">
        <strong>Discount (20%)</strong>
        </td>
        <td class="right">$1,699,40</td>
        </tr>
        <tr>
        <td class="left">
         <strong>VAT (10%)</strong>
        </td>
        <td class="right">$679,76</td>
        </tr>
        <tr>
        <td class="left">
        <strong>Total</strong>
        </td>
        <td class="right">
        <strong>$7.477,36</strong>
        </td>
        </tr>
        </tbody>
        </table>
 --}}




    {{-- <form action="">
        <table id=appointment class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Appointment ID</th>
                    <th scope="col">Patient ID</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Consultation time</th>
                    <th scope="col">Test Information</th>
                    <th scope="col">Test Image</th>
                    <th scope="col">Test report pdf</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointment_list as $key => $data)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->patient_id }}</td>
                        <td>{{ $data->appointment_date }}</td>
                        <td>{{ $data->appointmentDoctor->doctors_name }}</td>
                        <td>{{ $data->appointmentSlot->form_time->format('h:i:s A') }}-{{ $data->appointmentSlot->to_time->format('h:i:s A') }}
                        </td>
                        <td>{{ $data->description }}</td>
                        <td> <img width="150px" src="{{ url('/uploads/appointment/' . $data->image) }}" alt=""></td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-danger" href="{{ route('download.pdf', $data->id) }}">Download</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>




    </form> --}}
