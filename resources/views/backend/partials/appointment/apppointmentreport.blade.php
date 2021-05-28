@include('frontend.partials.footer')

@section('content')
{{--for delete message  --}}

<h2>Test Report Table</h2>
<style>
    #appointment{
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    #appointment td,#appointment th{
        border: 1px solid #ddd;
        padding: 8px

    }
    #appointment tr:nth-child(even){
        background-color: #0bfdfd;
    }
    #appointment th{
        padding-top: 17px;
        padding-bottom: 17px;
        text-align: left;
        background-color: #4caf50;
        color:#fff;
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
            @foreach ($appointment_list as $key=>$data)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $data->id }}</td>
                <td>{{ $data->patient_id }}</td>
                <td>{{ $data->appointment_date }}</td>
                <td>{{ $data->appointmentDoctor->doctors_name }}</td>
                <td>{{ $data->appointmentSlot->form_time->format('h:i:s A')}}-{{ $data->appointmentSlot->to_time->format('h:i:s A')}}</td>
                <td>{{ $data->description }}</td>
                <td> <img width="150px" src="{{url('/uploads/appointment/'.$data->image)}}" alt=""></td>
                <td class="text-center">
                    <a class="btn btn-sm btn-danger"  href="{{ route('download.pdf',$data->id)}}">Download</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

@include('frontend.partials.header')


</form>
