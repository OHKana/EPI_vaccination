@extends('master')

@section('content')



 <!-- Button trigger modal -->
 <div>
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
    Register new patients
  </button>
 </div>

<br>

<div>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
    Register new Health Assistant
  </button>
</div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{route('registration')}}" class="container">
            @csrf
        <div class="modal-body bg-dark">

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Patient's Name:</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter patient's Name">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User ID:</label>
                    <input type="text" class="form-control" name="userId" placeholder="Enter User Id" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Father'a Name:</label>
                    <input type="text" class="form-control" name="fathersName" placeholder="Enter Father's name">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mother'a Name:</label>
                    <input type="text" class="form-control" name="mothersName" placeholder="Enter Mother's Name">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date of Birth:</label>
                    <input type="date" class="form-control" name="dob" placeholder="Enter Date of Birth" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Gender:</label>
                    <input type="text" class="form-control" name="gender" placeholder="Enter Gender">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contact Number:</label>
                    <input type="tel" class="form-control" name="contactnbr" placeholder="Enter Contact Number" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Address:</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter Address" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Vaccination area:</label>
                    <select class="form-control" name="vaccinationArea" id="">
                        <option value="1">Ward: 1</option>
                        <option value="2">Ward: 2</option>
                        <option value="3">Ward: 3</option>
                    </select>
                </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Enter any Comment ">
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





  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{route('registration')}}" class="container">
            @csrf
        <div class="modal-body bg-dark">

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Health Assistant Name:</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter health assistant Name">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User ID:</label>
                    <input type="text" class="form-control" name="userId" placeholder="Enter User Id" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date of Birth:</label>
                    <input type="date" class="form-control" name="dob" placeholder="Enter Date of Birth" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Gender:</label>
                    <input type="text" class="form-control" name="gender" placeholder="Enter Gender">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contact Number:</label>
                    <input type="tel" class="form-control" name="contactnbr" placeholder="Enter Contact Number" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Address:</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter Address" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Vaccination area:</label>
                    <select class="form-control" name="vaccinationArea" id="">
                        <option value="1">Ward: 1</option>
                        <option value="2">Ward: 2</option>
                        <option value="3">Ward: 3</option>
                    </select>
                </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Enter any Comment ">
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





@endsection
