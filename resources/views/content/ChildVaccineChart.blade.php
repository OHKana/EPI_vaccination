@extends('healthWorkerLogedIn')

@section('content')

{{-- button --}}
<br>
@if(auth()->user()->role=='admin')
<div class= "text-start">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
      Add New Vaccine(child)
     </button>
    </div>
    @endif

    <h2>Child Vaccine Chart</h2>

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="exampleModalLabel">Add Vaccine Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

{{-- form --}}

<form class="container bg-light" method="POST" action="{{route('ChildVaccineChart.create')}}">
@csrf
        <div class="modal-body">


    <div class="form-group text-dark">
      <label for="exampleInputEmail3 ">Vaccine Name</label>
      <input type="text" class="form-control" name="V_Name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Vaccine Name">

    </div>
    <div class="form-group text-dark">
        <label for="exampleInputEmail3">Disease</label>
        <input type="text" class="form-control" name="disease" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter number of doses">

      </div>
    <div class="form-group text-dark">
        <label for="exampleInputEmail3">Number of Doses</label>
        <input type="text" class="form-control" name="N_of_dose" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter number of doses">

      </div>
      <div class="form-group text-dark">
        <label for="exampleInputEmail3">Time Differences</label>
        <input type="text" class="form-control"name="Time_difference" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter time difference">

      </div>


      <div class="form-group text-dark">
        <label for="exampleInputEmail3">Starting Time</label>
        <input type="text" class="form-control" name="starting_time" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Starting time">

      </div>
    <br>

    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
        Submit
      </button>
    <br>
    <br>
        </div>
    </form>
{{-- from end --}}

      </div>
    </div>
  </div>
<br>



    <div>
        <table class="table table-light">
            <thead>
              <tr>
                <th scope="col">Vaccine Name</th>
                <th scope="col">Disease Name</th>
                <th scope="col">Number of Doses</th>
                <th scope="col">Time difference</th>
                {{-- <th scope="col">Category</th> --}}
                <th scope="col">Starting Time</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($childs as $data)


              <tr>
                <th scope="row">{{ $data->V_Name}}</th>
                <td>{{ $data->disease}}</td>
                <td>{{ $data->N_of_dose}}</td>
                <td>{{ $data->Time_difference}} weeks</td>
                {{-- <td>{{ $data->category}}</td> --}}
                <td>{{ $data->starting_time}} weeks</td>

              </tr>
              @endforeach
            </tbody>
          </table>

    </div>


@endsection
