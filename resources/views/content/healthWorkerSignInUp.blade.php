@extends('master')

@section('content')

<h2 class="text-primary"> Sign In to Continue......</h2>




<div class="row" style="padding: 115px;">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif

    <style>
        body {
          background-image: url('https://www.languagelegos.com/wp-content/uploads/2018/05/doctor-blog-2.jpg');
          background-repeat: no-repeat;
          background-size: cover;
                position: relative;
        }
        </style>


    <div class="col-md-6 m-1 bg-success">
        <h1>As Health Worker</h1>

        <form action="{{route('HWlogin')}}" method="post">
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text text-dark">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" required type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
        <br>
    </div>
</div>





@endsection
