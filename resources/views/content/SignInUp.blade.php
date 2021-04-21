@extends('master')

@section('content')
<style>
    body {
      background-image: url('https://i0.wp.com/post.healthline.com/wp-content/uploads/2020/09/vaccine_needle-732x549-thumbnail-732x549.jpg?w=756&h=567');
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
