@include('frontend.partials.header')
{{-- @dd($doctor_deatils[0]->doctors_name) --}}

 <!-- MAKE AN APPOINTMENT -->

 @if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif

 <section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <img src="/images/appointment-image.jpg" class="img-responsive" alt="">
            </div>

            <div class="col-md-6 col-sm-6">
                <!-- CONTACT FORM HERE -->
                <form action="{{route('appointment.create')}}" method="post" enctype="multipart/form-data">

                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                        <h2>Make an appointment</h2>
                        @csrf
                        {{-- @dd($doctor_deatils) --}}
                        <div class="form-group">
                          <label for="form-label">Doctors Name</label>
                          {{-- <input type="text" class="form-control" name="doctors_name" id="doctors_name"> --}}
                          <select name="doctors_id" class="form-control"id="doctors_name" >
                            @foreach ($doctor_deatils as $data)
                                <option value="{{ $data->id }}">{{ $data->doctors_name }}</option>
                            @endforeach
                          </select>
                        </div>

                          <div class="form-group">
                            <label for="form-label">Test Name</label>
                            <select class="js-example-basic-multiple form-control" name="test_id[]"  multiple="multiple">
                            @foreach ($test_name as $data)
                                <option value="{{ $data->id }}">{{ $data->test_name }}</option>
                            @endforeach

                          </select>
                        </div>
                          <div class="form-group">
                            <label for="slot_id">Appointment Time</label>
                            <select class="form-control" name="slot_id" id="slot_id">
                            @foreach ($slots as $data )
                            <option value="{{ $data->id }}">{{ $data->form_time }}-{{ $data->to_time }}</option>

                            @endforeach
                          </div>
                          <div class="form-group">
                          <label for="date">Appointment Date</label>


                            <input type="date" class="form-control" value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}" name="appointment_date" id="appointment_date" placeholder="Appointment Date"/>
                        </div>
                        <div class="form-group">
                            <label for="form-label">Briefly describe the reason for the appointment:</label>
                            <input type="text" class="form-control" name="reason_name" id="reason_name">
                          </div>

                        <br>


                            <button type="submit" class="form-control" id="cf-submit" name="submit">Submit
                                Button</button>

                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</section>
@include('frontend.partials.footer')
