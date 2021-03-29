@extends('healthWorkerLogedIn')


@section('content')




<table class="table table-light">
    <thead>
      <tr>
        <th scope="col">User ID</th>
        <th scope="col">Health Assistant Name</th>
        <th scope="col">Date of Birth</th>
        <th scope="col">Gender</th>
        <th scope="col">Contact Number</th>
        <th scope="col">Email Address</th>
        <th scope="col">Address</th>
        <th scope="col">Vaccination Area</th>
        <th scope="col">Descrption</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($worker as $data)


      <tr>
        <th scope="row">{{ $data->User_Id}}</th>
        <td>{{ $data->HealthAssistant_Name}}</td>
        <td>{{ $data->dob}}</td>
        <td>{{ $data->Gender}}</td>
        <td>{{ $data->Contact_nbr}}</td>
        <td>{{ $data->Email_Address}}</td>
        <td>{{ $data->address}}</td>
        <td>{{ $data->Vaccination_Area}}</td>
        <td>{{ $data->Description}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>


@endsection
