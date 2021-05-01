@extends('healthWorkerLogedIn')

@section('content')


{{-- search bar --}}

<br>
<div class="row">
    <div class= "text-start col-md-6">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
           Register new patients
         </button>
        </div>

<div class="col-md-6 float-end">


<div>
    <form action="{{route('patients.search')}}" method="get">

        <div class="form-group">
            <input type="text" name="search" placeholder="Enter patient id" class="form-control">
            <button class="btn btn-primary position-right">Search</button>
        </div>

    </form>
</div>
</div>
{{-- show result --}}
@if(isset($search))
<p>
<span class="alert alert-success"> you are searching for '{{$search}}' , found ({{count($patients)}})</span>
</p>
@endif

</div>


<!-- Button trigger modal -->
<br>

<!-- from starts for patients registration -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title bg-dark w-100" id="exampleModalLabel">New Patients Registation form:</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{route('registration.patient')}}" class="container">
            @csrf
        <div class="modal-body bg-dark">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Registration No:</label>
                    <input type="number" class="form-control" name="reg_no" placeholder="Enter User Id" >
                </div>


                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Patient's Name:</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter patient's Name">
                </div>


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Father'a Name:</label>
                    <input type="text" class="form-control" name="fathers_Name" placeholder="Enter Father's name">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mother'a Name:</label>
                    <input type="text" class="form-control" name="mothers_Name" placeholder="Enter Mother's Name">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date of Birth:</label>
                    <input type="date" class="form-control" name="dob" placeholder="Enter Date of Birth" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Gender:</label>
                    <select class="form-control" name="gender" id="">
                        <option value="null">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contact Number:</label>
                    <input type="tel" class="form-control" name="contact_Nbr" placeholder="Enter Contact Number" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Address:</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter Address" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Vaccination area:</label>
                    <select class="form-control" name="vaccinationArea" id="">
                        <option value="null">Select Ward</option>
                        <option value="1">Ward: 1</option>
                        <option value="2">Ward: 2</option>
                        <option value="3">Ward: 3</option>
                    </select>
                </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Registration Date</label>
                    <input type="date" class="form-control" name="regDate" placeholder="Enter Todays date ">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Category:</label>
                    <select class="form-control" name="category" id="">
                        <option value="null">Select Category</option>
                        <option value="Child">Child</option>
                        <option value="Teenage">Teenage</option>

                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email address">
                </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>

{{-- heading --}}








<br>
<H1> Patients List</H1>
<br>


<div class="form-control container">

<div class="table-responsive">

<table class="table table-light ">

    <thead>
      <tr>
        <th scope="col">Registration No</th>
        <th scope="col">Patients Name</th>
        <th scope="col">Email Address</th>
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
        <th scope="row">{{ $data->reg_no}}</th>
        <th>{{ $data->patientsUser->name}}</th>
        <th>{{ $data->patientsUser->email}}</th>
        <td>{{ $data->fathers_Name}}</td>
        <td>{{ $data->mothers_Name}}</td>
        <td>{{ $data->dob}}</td>
        <td>{{ $data->gender}}</td>
        <td>{{ $data->contact_Nbr}}</td>
        <td>{{ $data->address}}</td>
        <td>{{ $data->vaccination_Area}}</td>
        <td>{{ $data->regDate}}</td>
        <td>{{ $data->category}}</td>
        <td>
            @if ($data->category == 'Child')
             <a class="btn btn-success" href="{{route('patientsList.checkChild',$data['id'])}}">Check</a>
            @elseif ($data->category == 'Teenage')
             <a class="btn btn-success" href="{{route('patientsList.checkTeenge',$data['id'])}}">Check</a>
             @else
             <a class="btn btn-success" href="#">Check</a>
            @endif

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
{{$patients->links()}}
</div>
</div>

@endsection
