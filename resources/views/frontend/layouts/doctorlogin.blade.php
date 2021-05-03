
@include('frontend.partials.header')
<section id="login" data-stellar-background-ratio="3">
    <div class="container">

            <div class="row">

            <div class="col-md-6 col-sm-6">
                <img src="/images/lo.jpg" class="img-responsive" alt="">
            </div>

            <div class="col-md-6 col-sm-6">
            <form action="{{route('login')}}" method="post">
                @csrf
                <h1>Register DoctorPatient Log in</h1>

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif

                @if(session()->has('success'))
                    <div class="alert alert-success">{{session()->get('success')}}</div>
                @endif


                <div class="form-group">
                    <label for="email">Enter Doctor Email:</label>
                    <input required class="form-control" type="email" id="email" name="email" placeholder="Enter Doctor Email">
                </div>

                <div class="form-group">
                    <label for="password">Enter Doctor Password:</label>
                    <input required class="form-control" type="password" id="password" name="password"
                           placeholder="Enter DoctorPatient Password">
                </div>

                <button type="submit" class="btn btn-success">Login</button>

            </form>
        </div>
        <div class="col-md-2">

        </div>
    </div>

</section>
@include('frontend.partials.footer')



