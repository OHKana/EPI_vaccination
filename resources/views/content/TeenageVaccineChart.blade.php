@extends('healthWorkerLogedIn')

@section('content')

    {{-- button --}}
    <div class= "text-start">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
            Add New Vaccine (teenage)
        </button>
    </div>
<br>


<h2>Teenage Vaccine Name: TT</h2>

    <div>
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">Vaccine Dose Name</th>
                    <th scope="col">Schedule</th>
                    <th scope="col">Category</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($teenage as $data)


                    <tr>
                        <th scope="row">{{ $data->V_d_Name }}</th>
                        <td>{{ $data->Schedule }}</td>

                        <td>{{ $data->category }}</td>
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
                    <h5 class="modal-title text-dark" id="exampleModalLabel">Add Vaccine Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                {{-- form --}}

                <form class="container bg-light" method="POST" action="{{ route('TeenageVaccineChart.create') }}">
                    @csrf
                    <div class="modal-body">


                        <div class="form-group text-dark">
                            <label for="exampleInputEmail3 ">Vaccine Dose Name</label>
                            <input type="text" class="form-control" name="V_d_Name" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Dose Name">

                            <div class="form-group text-dark">
                                <label for="exampleInputEmail3 ">Schedule</label>
                                <input type="text" class="form-control" name="Schedule" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter schedule">

                                    <div class="form-group text-dark">
                                        <label for="exampleInputEmail3" class="form-label">Category:</label>
                                        <select class="form-control" name="category" id="">
                                            <option value="null">Select Category</option>
                                            <option value="Child">Child</option>
                                            <option value="Teenage">Teenage</option>
                                        </select>
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
