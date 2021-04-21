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



<div class="col-md-6 m-1 bg-success">
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
</div>


@endsection
