@extends('master')

@section('content')

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
      background-image: url('https://i0.wp.com/post.healthline.com/wp-content/uploads/2020/09/vaccine_needle-732x549-thumbnail-732x549.jpg?w=756&h=567');
      background-repeat: no-repeat;
      background-size: cover;
            position: relative;
    }
    </style>

<div >
    <div class="dropdown m-5">
        <a class="btn btn-success dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" data-interval="50">
          Select From Here
        </a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" data-toggle="tab" class="dropdown-link" href="{{route('healthWorkerSignInUp')}}">HealthWorker LogIn</a></li>
            <li><a class="dropdown-item" data-toggle="tab" class="dropdown-link" href="{{route('patientsSignInUp')}}">Patients Login</a></li>
        </ul>

  </div>
  @endsection
