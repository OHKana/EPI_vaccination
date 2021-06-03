@extends('healthWorkerLogedIn')
@section('content')



<div id="printArea">

 <!-- Button trigger modal -->
 <div class="row mt-4">
    <div class="col-md-12 col-sm-12">
        <form action="{{route('Report')}}">
            <div class="row">

                <div class="col-md-4">
                    <label for="from_date">From Date</label>
                    <input type="date" name="from_date" class="form-control" value="{{date('Y-m-d')}}">
                </div>
                <div class="col-md-4">
                    <label for="from_date ">To Date</label>
                    <input type="date" name="to_date" class="form-control" value="{{date('Y-m-d')}}">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary position-right">Search</button>
                    <a class="btn btn-warning" onclick="printDiv()"href="#">Print</a>

                </div>
            </div>
        </form>
    </div>
 </div>

<br>

<table class="table table-light">
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

          </tr>
        @endforeach
    </tbody>
</table>
<div>

<script type="text/javascript">
    function printDiv(){
        var printContents = document.getElementById("printArea").innerHTML;
        var orginalContents = document.body.innerHTML;

        document.body.innerHTML=printContents;
        window.print();


        document.body.innerHTML=orginalContents;

    }
    </script>
</div>

</div>
@endsection
