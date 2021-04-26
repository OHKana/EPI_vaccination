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
              @if (auth()){
               {{auth()->user()->name}}
               }

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

</body>
@endsection
