@extends('healthWorkerLogedIn')

@section('content')

<h2>Teenage Vaccine Schedule</h2>


    <div>
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Vaccine Dose Name</th>
                    <th scope="col">Schedule</th>
                    <th scope="col">Eligible Date</th>
                    <th scope="col">Vaccine recieve Date</th>

                    <th scope="col">Action</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($teenage as $data)


                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                       <td>hfhf</td>
                        <td>trt</td>
                        <td>{{ $data->eligible_date }}</td>
                        <td>{{ $data->V_rcv_date }}</td>

                        <td>
                            <a class="btn btn-success" href="#">Update</a>
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>



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
