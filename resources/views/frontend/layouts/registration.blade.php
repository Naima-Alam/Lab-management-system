@include('frontend.partials.header')
<<section id="login" data-stellar-background-ratio="3">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <img src="/images/p.jpg" class="img-responsive" alt="">
            </div>

            <div class="col-md-6 col-sm-6">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <h1>New patient Registration</h1>

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif

                @if(session()->has('success'))
                    <div class="alert alert-success">{{session()->get('success')}}</div>
                @endif

                <div class="form-group">
                    <label for="name">Enter Patient Name:</label>
                    <input required class="form-control" type="text" id="name" name="name" placeholder="Enter Patient Name">
                </div>

                <div class="form-group">
                    <label for="email">Enter Patient Email:</label>
                    <input required class="form-control" type="email" id="email" name="email" placeholder="Enter Patient Email">
                </div>

                <div class="form-group">
                    <label for="password">Enter Patient Password:</label>
                    <input required class="form-control" type="password" id="password" name="password"
                           placeholder="Enter Patient Password">
                </div>

                <button type="submit" class="btn btn-success">Register</button>

            </form>
        </div>
        <div class="col-md-2">

        </div>
    </div>
</section>

 @include('frontend.partials.footer')
