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

    <form action="">
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



                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $appointment->id }}</td>
                        <td>{{ $appointment->patient_id }}</td>
                        <td>{{ $appointment->appointment_date }}</td>
                        <td>{{ $appointment->appointmentDoctor->doctors_name }}</td>
                        <td>{{ $appointment->appointmentSlot->form_time->format('h:i:s A') }}-{{ $appointment->appointmentSlot->to_time->format('h:i:s A') }}
                        </td>
                        <td>{{ $appointment->description }}</td>
                        {{-- <td> <img width="150px" src="{{ url('/uploads/appointment/' . $appointment->image) }}" alt="logo"></td> --}}

                    </tr>


            </tbody>
        </table>
</h1>
