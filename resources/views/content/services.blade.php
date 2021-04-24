@extends('healthWorkerLogedIn')

@section('content')

{{-- title --}}
{{-- <div class="title text-center mb-3  bg-white text-dark">
    <h3 class="font-weight-bolder p-2">services</h3>
     </div> --}}


{{-- droodown --}}
<div >
    <div class="dropdown m-5">
        <a class="btn btn-secondary dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" data-interval="50">
          View Vaccine Chart
        </a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" data-toggle="tab" class="dropdown-link" href="{{route('ChildVaccineChart')}}">Child vaccine Chart</a></li>
        <li><a class="dropdown-item" data-toggle="tab" class="dropdown-link" href="{{route('TeenageVaccineChart')}}">Teenage vaccine chart</a></li>
          {{-- <li><a class="dropdown-item" data-toggle="tab" class="dropdown-link" href="{{route('pregnancyTikaChart')}}">Pregnancy vaccine chart</a></li> --}}
        </ul>

  </div>

{{-- check patients id valid or not --}}

<form class="container bg-light">
    <div class="modal-header">
        <h5 class="modal-title bg-white text-dark" id="exampleModalLabel">Enter Registration No to assign New Vaccine:</h5>

      </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Registration Number:</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter registration no">

    </div>
    <br>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Submit
      </button>
    <br>
    <br>
  </form>




<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-dark bg-white">
          <h5 class="modal-title" id="exampleModalLabel">Eligible vaccine</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @foreach ($childs as $data)


            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="{{$data->id}}" name="vaccine_id" id="flexCheckDefault" checked>
                <label class="form-check-label text-dark" for="flexCheckChecked">
                  {{
                      $data->V_Name
                  }}
                </label>
              </div>
              @endforeach

        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-primary">Enter</button>
        </div>
      </div>
    </div>
  </div>


@endsection
