@include('frontend.partials.header')
    <!-- TEAM -->
    <a class="list-item" href="{{ route('website') }}"><i class="fa fa-home fa-fw" aria-hidden="true"></i> Home</a>
    <section id="team" data-stellar-background-ratio="1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                        <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Available Department</h2>
                    </div>
                </div>
                <div class="clearfix"></div>
{{-- @dd($doctor_deatils); --}}
                @foreach ($department_deatils as $data)
                <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                        {{-- <img src="{{ asset('/uploads/doctor/'.$data->image) }}" class="img-responsive" alt="Doctor Image" width="200" height="200" >
 --}}
                        <div class="team-info">
                            <h3>{{ $data->department_name }}</h3>

                            <div class="team-contact-info">



                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
@include('frontend.partials.footer')
