@extends('master')

@section('content')

<h2 class="text-primary"> Sign In to Continue......</h2>






    <style>
        body {
          background-image: url('https://static.vecteezy.com/system/resources/previews/001/105/580/non_2x/doctor-with-coronavirus-vaccine-for-patient-vector.jpg');
          background-repeat: no-repeat;
          background-size: cover;
                position: relative;
        }
        </style>



<div class="col-md-5 m-5 p-2"
style="background-color: rgba(71, 204, 71, 0.877)"
>

    <h1>As Patient</h1>

    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email Address</label>
            <input required name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            {{-- <div id="emailHelp" class="form-text text-dark">We'll never share your email with anyone else.</div> --}}
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input required name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    <br>
</div>


@endsection
