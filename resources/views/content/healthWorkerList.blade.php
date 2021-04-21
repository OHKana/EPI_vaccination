@extends('healthWorkerLogedIn')


@section('content')

<H1> Health Worker List</H1>
<br>


<table class="table table-light">
    <thead>
      <tr>
        <th scope="col">User ID</th>
        <th scope="col">Health Assistant Name</th>
        <th scope="col">Email Address</th>
        <th scope="col">Date of Birth</th>
        <th scope="col">Gender</th>
        <th scope="col">Contact Number</th>
        <th scope="col">Address</th>
        <th scope="col">Vaccination Area</th>
        <th scope="col">Image</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($worker as $data)


      <tr>
        <th scope="row">{{ $data->id}}</th>
        <th>{{ $data->workerUser->name}}</th>
        <td>{{ $data->workerUser->email}}</td>

        <td>{{ $data->dob}}</td>
        <td>{{ $data->Gender}}</td>
        <td>{{ $data->Contact_nbr}}</td>
        <td>{{ $data->address}}</td>
        <td>{{ $data->Vaccination_Area}}</td>
        <td>
            <img style="width: 100px;" src="{{url('/files/photo/'.$data->file)}}" alt="">
        </td>

      </tr>
      @endforeach
    </tbody>


  </table>


@endsection
