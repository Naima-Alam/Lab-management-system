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


                <form action="{{ route('canclecreate.form', $appointmentId) }}" method="post"
                    enctype="multipart/form-data">

                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                        @csrf
                        <div class="form-group">
                            <label for="form-label">Briefly describe the reason for the cancel appointment:</label>
                            <input type="text" class="form-control" name="cancel_reason" id="cancel_reason">
                        </div>

                        <br>


                        {{-- @if ($appointment->status == 'pending')
                        <a class="btn btn-sm btn-success"
                            href="{{ route('cancle.status',['id'=>$data->id, 'status'=>'cancle']) }}">Cancle</a>
                            @endif

                            @if ($data->status == 'confirmed')
                            <a class="btn btn-sm btn-success"
                            href="{{route('test.form',$data->id)}}">Submit Report</a>
                            @endif --}}

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
