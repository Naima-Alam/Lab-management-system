@include('frontend.partials.footer')

@section('content')
{{--for delete message  --}}

<h2>Test Report Table</h2>


<form action="">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Appointment ID</th>
                <th scope="col">Patient ID</th>
                <th scope="col">Appointment Date</th>
                <th scope="col">Doctor Name</th>
                <th scope="col">Consultation time</th>
                <th scope="col">Test Information</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointment_list as $key=>$data)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $data->id }}</td>
                <td>{{ $data->patient_id }}</td>
                <td>{{ $data->appointment_date }}</td>
                <td>{{ $data->appointmentDoctor->doctors_name }}</td>
                <td>{{ $data->appointmentSlot->form_time->format('h:i:s A')}}-{{ $data->appointmentSlot->to_time->format('h:i:s A')}}</td>
                <td>{{ $data->description }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>

@include('frontend.partials.header')


</form>
