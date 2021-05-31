@include('frontend.partials.header')
<a class="list-item" href="{{ route('website') }}"><i class="fa fa-home fa-fw" aria-hidden="true"></i> Home</a>
<section id="login" data-stellar-background-ratio="3">
    <div class="container">
        <div class="row">

            <div class="col-md-100  col-sm-6">
                <img src="/images/p.jpg" class="img-responsive" alt="">
            </div>

            <div class="col-md-6 col-sm-6">
                <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h1>New patient Registration</h1>

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif

                    @if (session()->has('success'))
                        <div class="alert alert-success">{{ session()->get('success') }}</div>
                    @endif

                    <div class="form-group">
                        <label for="name">Enter Patient Name:</label>
                        <input required class="form-control" type="text" id="name" name="name"
                            placeholder="Enter Patient Name">
                    </div>

                    <div class="form-group">
                        <label for="email">Enter Patient Email:</label>
                        <input required class="form-control" type="email" id="email" name="email"
                            placeholder="Enter Patient Email">
                    </div>

                    <div class="form-group">
                        <label for="password">Enter Patient Password:</label>
                        <input required class="form-control" type="password" id="password" name="password"
                            placeholder="Enter Patient Password">
                    </div>
                    <div class="form-group">
                        <label for="age">Patient Age:</label>
                        <input required class="form-control" type="age" id="age" name="age"
                            placeholder="Enter Patient age">
                    </div>



                    <div class="form-group">
                        <label for="male">Male</label>
                        <input type="radio" value="Male" name="gender" id="male" class="with-gap">

                        <label for="female" class="m-l-20">Female</label>
                        <input type="radio" value="female" name="gender" id="female" class="with-gap">
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Contact no</label>
                            <input type="integer" class="form-control" name="contact_no"
                                placeholder="Enter Patient Contact no">
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Address</label>
                                <input type="string" class="form-control" name="address"
                                    placeholder="Enter Patient Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Please upload patient image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="checkbox">I have read and accept the terms</label>
                            <input type="checkbox" id="checkbox" name="checkbox">
                        </div>

                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Register">
                </form>
                <p class="text-center" style="margin-top:10px;">OR</p>

                <br>
                <p class="text-center"><a href="{{ route('login.form') }}">Already have an account?</a></p>
                </fieldset>
            </div>
            <div class="col-md-2">

            </div>
        </div>
</section>

@include('frontend.partials.footer')
