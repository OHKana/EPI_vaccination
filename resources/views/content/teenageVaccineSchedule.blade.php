@extends('healthWorkerLogedIn')

@section('content')


{{-- @dd($patients); --}}
        {{-- <h3>Patient Name: {{ $patients->patients_Name }} <span>Registration NO: {{ $patients->Registration_No }}</span></h3> --}}


    <div>
        <h2>Teenage Vaccine Schedule</h2>
        <h3>Patient Name: {{$patients->patientsUser->name}}</h3>
        <h4>Registration No:{{$patients->reg_no}}</h4>
        <br>
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">Serial No</th>
                    <th scope="col">Vaccine Dose Name</th>
                    <th scope="col">Schedule</th>
                    <th scope="col">Eligible Date</th>
                    <th scope="col">Vaccine recieve Date</th>
                    <th scope="col">Action</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($teenage as $key=> $data)

                    <tr>
                        <th scope="row">{{ $key+1}}</th>

                        <td>{{ $data->vaccineName->V_d_Name }}</td>
                        <td>{{ $data->vaccineName->Schedule }}</td>
                        <td>{{ $data->eligible_date }}</td>
                        <td>{{ $data->V_rcv_date }}</td>
                        <td>
                            <div>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal3">
                                    Update
                                </button>
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <br>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">Update Vaccine recived date</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                {{-- form --}}

                <form class="container bg-light" method="POST" action="{{ route('teenageVaccineSchedule.create') }}">
                    @csrf
                    <div class="modal-body">
                                

                                <div class="form-group text-dark">
                                        <label for="exampleInputEmail3 ">Vaccine recieve Date</label>
                                        <input type="date" class="form-control" name="V_rcv_date" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter Recive date">
                                </div>

                                <br>

                                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal3">
                                            Submit
                                        </button>
                                        <br>
                                        <br>
                </form>
                {{-- from end --}}

            </div>
        </div>
    </div>
    <br>






@endsection
