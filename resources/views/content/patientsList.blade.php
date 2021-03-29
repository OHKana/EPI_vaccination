@extends('healthWorkerLogedIn')

@section('content')



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
        <td>{{ $data->Vaccination_Area}}</td>
        <td>{{ $data->regDate}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>



@endsection
