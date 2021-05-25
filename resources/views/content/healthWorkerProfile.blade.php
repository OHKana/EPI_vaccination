@extends('healthWorkerLogedIn')
@section('content')

@if (session()->has ('success'))
    <div class="alart alart-success">
    {{session()->get ('success') }}
    </div>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error )
    <div class="alart alart-danger">{{$error}}</div>
    @endforeach
@endif

<br>
<body>
    <div class="flex-container">
        <div class="flex-item">
            <h1 id="customer">
                Welcome Back !
              @if (auth())
               {{auth()->user()->name}}


               @else
               {{-- {
                    00
               } --}}
               <h1> sorry <h1>
               @endif
            </h1>
            {{-- @dd() --}}
            <p id="customer" style="max-width:800px text-centered">
                From here you can view edit,update,patients details.

            </p>
        </div>
    </div>

{{-- admin profile --}}


@if(auth()->user()->role=='admin')
    <div class="album py-5 ">
    <div class="container">
        <h3 class="font-weight-bolder p-1 "> Upazila Health Officer </h3>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-center">
        <div class="col ">
          <div class="card shadow-sm ">
            <img style=" height: 200px; width: 100% ;" src="https://thumbs.dreamstime.com/b/smiling-female-doctor-holding-medical-records-lab-coat-her-office-clipboard-looking-camera-56673035.jpg " alt="">
            <div class="card-body">
                <h4 class="text-dark">Name: Tohidul</h4>
                <p class="text-dark">User ID: 111111</p>
                <p class="text-dark">Designation: UHO </p>
                <p class="text-dark">Contact: 0136513644 </p>
                <p class="text-dark">Address: Narsingdi</p>

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    @endif







    {{-- health worker profile --}}
    @if(auth()->user()->role=='worker')
    <div class="album py-5 ">
    <div class="container">
        <h3 class="font-weight-bolder p-1 ">Health Worker Profile</h3>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-center">
        <div class="col ">
          <div class="card shadow-sm ">
            <img style=" height: 200px; width: 100% ;" src="{{url('/files/photo/'.$user->WorkerProfile->file)}}" alt="">
            <div class="card-body">
                <h4 class="text-dark">Name: {{$user->name}}</h4>
                <p class="text-dark">User ID: {{$user->email}}</p>
                <p class="text-dark">User ID: {{$user->WorkerProfile->reg_no}}</p>

                <p class="text-dark">Address: {{$user->WorkerProfile->address}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                         <button type="button" class="btn btn-sm btn-outline-success">update profile</button>

                         <a type="button" class="btn btn-success" href="{{route('changePassword')}}">Change Password</a>
                    </div>
                    {{-- <small class="text-muted">{{$member->member->gender}}</small> --}}
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    @endif
</body>
@endsection
