
@include('frontend.partials.header')
<a class="list-item" href="{{ route('website') }}"><i class="fa fa-home fa-fw" aria-hidden="true"></i> Home</a>
<section id="login" data-stellar-background-ratio="3">
    <div class="container">

            <div class="row">

            <div class="col-md-6 col-sm-6">
                <img src="/images/lo.jpg" class="img-responsive" alt="">
            </div>

            <div class="col-md-6 col-sm-6">
            <form action="{{route('user.email.validate')}}" method="post">
                @csrf
                <h2>Patient Password Recovery</h2>

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif

                @if(session()->has('success'))
                    <div class="alert alert-success">{{session()->get('success')}}</div>
                @endif

                @if(session()->has('successError'))
                    <div class="alert alert-danger">{{session()->get('successError')}}</div>
                @endif
            <fieldset>

                <div class="form-group">
                    <label for="email">Enter Valid Email:</label>
                    <input required class="form-control" type="email" id="email" name="email" placeholder="Enter Patient Email">
                </div>

                {{-- <div class="form-group">
                    <label for="password">Enter Patient Password:</label>
                    <input required class="form-control" type="password" id="password" name="password"
                           placeholder="Enter Patient Password">
                </div> --}}
                <button class="btn btn-lg btn-success btn-block" type="submit">Reset Password</button>
    {{-- <buttontype="submit"class="btnbtn-success">Login</button> --}}

            </form><br>
            {{-- <p class="text-center" style="margin-top:10px;">Did you forget your password ??? <br> <a href="{{route('user.password.recovery')}}">  Reset now !!!</a></p>
            <p class="text-center" style="margin-top:10px;">OR</p>

                   <p class="text-center"><a href="{{ route('registration.form') }}">Register for an account?</a></p> --}}
               </fieldset>


        </div>
        <div class="col-md-2">

        </div>
    </div>

</section>
@include('frontend.partials.footer')



