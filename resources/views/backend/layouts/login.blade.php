@extends('frontend.master')

@section('content')

    <div class="row m-5">
        <div class="col-md-3"></div>

        <div class="col-md-6">
            <form action="{{ route('admin.login') }}" method="post">
                @csrf
                <h1>User Login</h1>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif

                @if (session()->has('success'))
                    <div class="alert alert-success">{{ session()->get('success') }}</div>
                @endif


                <div class="form-group">
                    <label for="email">Enter User Email:</label>
                    <input required class="form-control" type="email" id="email" name="email"
                        placeholder="Enter User Email">
                </div>

                <div class="form-group">
                    <label for="password">Enter User Password:</label>
                    <input required class="form-control" type="password" id="password" name="password"
                        placeholder="Enter User Password">
                </div>

                <button type="submit" class="btn btn-success">Login</button>

            </form>
        </div>

        <div class="col-md-3"></div>
    </div>

@endsection
