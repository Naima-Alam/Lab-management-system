<h1>
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
    </style>
<div class="container">
    <div class="card">
        <div class="card-header">
        Test Report

        <div class="col-sm-6">
            <strong>Date:{{ $appointment->updated_at }}</strong>

        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h6 class="mb-3">From:</h6>
                    <div>
                        <strong>Diagnostic Center</strong>
                    </div>
                    <div>Uttara,Dhaka</div>
                    <div>71-101 Szczecin, Poland</div>
                    <div>Email: diagnostic@gmail.com</div>
                    <div>Phone: +8801784438727</div>
                </div>

                <div class="col-sm-6">

                    <h6 class="mb-3">To:</h6>
                    <div>
                        <strong>Patient ID:{{ $appointment->name }}</strong>
                    </div>

                    <div><strong>Doctor Name:{{ $appointment->appointmentDoctor->doctors_name  }}</strong>
                    </div>
                    <div>Email:{{ $appointment->patient->email }}</div>
                    <div>Phone:{{ $appointment->patient->contact_no}}</div>
                </div>
                {{-- <div class="col-lg-4 col-sm-5 ml-auto">
                    <table class="table table-clear">
                    <tbody>
                    <tr>
                    <td class="left">
                    <strong>#</strong>
                    </td>
                    <td class="right">1</td>
                    </tr>
                    <tr>
                    <td class="left">
                    <strong>Consultation time</strong>
                    </td>
                    <td class="right">{{  $appointment->appointmentSlot->form_time->format('h:i:s A') }}-{{ $appointment->appointmentSlot->to_time->format('h:i:s A') }}</td>
                    </tr>
                    <tr>
                    <td class="left">
                     <strong>Test Information</strong>
                    </td>
                    <td class="right">{{ $appointment->description }}</td>
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

                    </div>

                    </div>

                    </div>
                    </div>
                    </div> --}}
    <form action="">
        <table id=appointment class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Appointment ID</th>
                    {{-- <th scope="col">Patient ID</th>
                    <th scope="col">Appointment Date</th> --}}
                    {{-- <th scope="col">Doctor Name</th> --}}
                    <th scope="col">Consultation time</th>
                    <th scope="col">Test Information</th>
                    {{-- <th scope="col">Test Image</th>
                    <th scope="col">Test report pdf</th> --}}
                </tr>
            </thead>
            <tbody>



                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $appointment->id }}</td>
                        {{-- <td>{{ $appointment->patient_id }}</td>
                        <td>{{ $appointment->appointment_date }}</td> --}}
                        {{-- <td>{{ $appointment->appointmentDoctor->doctors_name }}</td> --}}
                        <td>{{  $appointment->appointmentSlot->form_time->format('h:i:s A') }}-{{ $appointment->appointmentSlot->to_time->format('h:i:s A') }}
                        </td>
                        <td>{{ $appointment->description }}</td>
                        {{-- <td> <img width="150px" src="{{ url('/uploads/appointment/' . $appointment->image) }}" alt="logo"></td> --}}

                    </tr>


            </tbody>
        </table>
</h1>
