@extends('healthWorkerLogedIn')
@section('content')
<br>
<div class="title text-center mb-3 text-dark" style="background-color: rgba(21, 169, 228, 0.979)">
    <h3 class="font-weight-bolder p-2">Stock Details</h3>
</div>

<div >

    @if(auth()->user()->role=='admin')
    <div class= "text-start">
        <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#exampleModal1">
           Add Stock
         </button>
    </div>
    @endif
</div>
@if (session()->has ('success'))
    <div class="alart alart-success">
    {{session()->get ('success') }}
    </div>
@endif

<br>
<div>
    <table class="table table-light">
        <thead>
            <tr>
                <th scope="col">Serial</th>
                <th scope="col">Vaccine Name</th>
                <th scope="col">Stock In</th>
                <th scope="col">Stock Out</th>
                <th scope="col">Available Stock</th>

              </tr>
        </thead>

        <tbody>
            @foreach ($stocks as $key=>$data)

{{-- @dd($data->CvaccineName) --}}
            <tr>
                <th scope="row">{{ $key+1}}</th>
                @if ($data -> child_v_id != null)
                    <th>{{ $data->CvaccineName->V_Name}}</th>
                @elseif ($data -> teenage_v_id != null)
                    <th>{{ $data->TvaccineName->V_d_Name}}</th>
                @endif

                <th>{{ $data->stock_in}}</th>
                <td>{{ $data->stock_out}}</td>
                <td>{{ $data->available_stock}}</td>

            @endforeach
        </tbody>
    </table>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Add Stock Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            {{-- form --}}

            <form class="container bg-light" method="POST" action="{{ route('stockUpdate.create') }}">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label for="exampleInputName">Vaccine Name</label>
                        <select class="form-select" name="child_v_id" >
                            <option selected  value="0">Select Child Vaccine Name</option>
                            @foreach ($chlid_vaccine as $request)
                                <option value="{{ $request->id }} ">{{ $request->V_Name}}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Vaccine Name</label>
                        <select class="form-select" name="teenage_v_id" >
                            <option selected  value="0">Select Teenage Vaccine Name</option>
                            @foreach ($teenage_vaccine as $request)
                                <option value="{{ $request->id }} ">{{ $request->V_d_Name}}</option>
                            @endforeach
                        </select>

                    </div>



                    <div class="form-group text-dark">
                        <label for="exampleInputEmail3 ">Stock In</label>
                        <input type="text" class="form-control" name="stock_in" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter Amount">
                    </div>


                     <br>

                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal3">
                                Submit
                        </button>
                     <br>
            </form>
            {{-- from end --}}

        </div>
    </div>
</div>
<br>






@endsection
