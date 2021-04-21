@extends('healthWorkerLogedIn')
@section('content')



 <!-- Button trigger modal -->

<br>

<div>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
    Register new Health Assistant
  </button>
</div>




{{-- from start for health assistant --}}


  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title bg-dark w-100" id="exampleModalLabel">New Health Assistant Registation form:</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{route('registration.assistant')}}" class="container" enctype="multipart/form-data">
            @csrf
        <div class="modal-body bg-dark">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User ID:</label>
                    <input type="text" class="form-control" name="reg_no" placeholder="Enter User Id" >
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Health Assistant Name:</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter health assistant Name">
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
                    <input type="tel" class="form-control" name="contactnbr" placeholder="Enter Contact Number" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address:</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email Address" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Address:</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter Address" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Vaccination area:</label>
                    <select class="form-control" name="vaccinationArea" id="">
                        <option value="null">Select Ward</option>
                        <option value="ward 1">Ward: 1</option>
                        <option value="ward 2">Ward: 2</option>
                        <option value="ward 3">Ward: 3</option>
                    </select>
                </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Upload Image</label>
                    <input type="file" name="Image" class="from-control">
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
