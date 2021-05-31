@include('frontend.partials.header')
<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
        {{-- @dd($appointment); --}}
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <img src="/images/appointment-image.jpg" class="img-responsive" alt="">
            </div>

            <div class="col-md-6 col-sm-6">
                <!-- CONTACT FORM HERE -->


                <form action="{{ route('serial_number.creat', $appointmentId) }}" method="post"
                    enctype="multipart/form-data">

                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                        @csrf
                        <div class="form-group">
                            <label for="form-label">Appointment Serial Number</label>
                            <input type="text" class="form-control" name="serial_number" id="serial_number">
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
