@extends('healthWorkerLogedIn')

@section('content')

{{-- search bar --}}
<div class="input-group">
    <div class="form-outline">
      <input id="search-input" type="search" id="form1" class="form-control" />
      <label class="form-label" for="form1">Search</label>
    </div>
    <button id="search-button" type="button" class="btn btn-primary">
      <i class="fas fa-search"></i>
    </button>
  </div>




<table class="table table-light">
    <thead>
      <tr>
        <th scope="col">Registration No</th>
        <th scope="col">Patients Name</th>
        <th scope="col">Father's Name</th>
        <th scope="col">Mother's Name</th>
        <th scope="col">Date Of Birth</th>
        <th scope="col">Gender</th>
        <th scope="col">Contact Number</th>
        <th scope="col">Address</th>
        <th scope="col">Vaccination Area</th>
        <th scope="col">Registration Date</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($patients as $data)


      <tr>
        <th scope="row">{{ $data->Registration_No}}</th>
        <td>{{ $data->patients_Name}}</td>
        <td>{{ $data->fathers_Name}}</td>
        <td>{{ $data->mothers_Namme}}</td>
        <td>{{ $data->dob}}</td>
        <td>{{ $data->gender}}</td>
        <td>{{ $data->contact_Nbr}}</td>
        <td>{{ $data->address}}</td>
        <td>{{ $data->vaccination_Area}}</td>
        <td>{{ $data->regDate}}</td>
        <td>{{ $data->category}}</td>
        <td>
            @if ($data->category == 'Child')
             <a class="btn btn-success" href="{{route('childvaccineschedule')}}">Check</a>
            @elseif ($data->category == 'Teenage')
             <a class="btn btn-success" href="{{route('teenageVaccineSchedule')}}">Check</a>
             @else
             <a class="btn btn-success" href="#">Check</a>
            @endif

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>



@endsection
