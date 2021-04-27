@extends('healthWorkerLogedIn')

@section('content')


<div>
    <h2>Child Vaccine Schedule</h2>
        <h3>Patient Name: {{$patients->patientsUser->name}}</h3>
        <h4>Registration No:{{$patients->reg_no}}</h4>
        <br>
    <table class="table table-light">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Vaccine Name</th>
            <th scope="col">Eligible For Vaccine Date</th>
            <th scope="col">1st Dose Recive date</th>
            <th scope="col">2st Dose Recive date</th>
            <th scope="col">3rd Dose Recive date</th>
            <th scope="col">4th Dose Recive date</th>
            <th scope="col">5th Dose Recive date</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
@php
use Carbon\carbon;

@endphp

            @foreach ($doses as $data)
            {{-- @dd($data), --}}
            <tr>

                <th scope="row">{{ $data->id }}</th>
                <td>{{ $data->vaccineName->V_Name }}</td>
                <td>{{Carbon::create($patients->dob)->addWeeks($data->vaccineName->starting_time)->isoFormat('Y-M-D')}}</td>
                <td>{{ $data->fst_d }}</td>
                <td>{{ $data->snd_d }}</td>
                <td>{{ $data->trd_d }}</td>
                <td>{{ $data->fth_d }}</td>
                <td>{{ $data->fifth_d }}</td>
                <td>
                    <div>
                        @if($data->vaccineName->N_of_dose!=$data->dose_count)
                     
                        <a type="button"  href="{{route('childvaccineschedule.edit',$data['id'])}}" class="btn btn-primary" >
                            Get Vaccine
                    </a>
                    @endif
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="exampleModalLabel">Update Vaccine recived date</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>


{{-- form --}}
<form method="POST" action="{{route('childvaccineschedule.create')}}">
    @csrf

    <div class="form-group ">
        <label for="exampleInputPassword1">1st dose</label>
        <input type="date" class="form-control" name="fst_d" placeholder="Enter dose Recive Date">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">2nd dose</label>
        <input type="date" class="form-control" name="snd_d" placeholder="Enter dose Recive Date">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">3rd dose</label>
        <input type="date" class="form-control" name="trd_d" placeholder="Enter dose Recive Date">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">4th dose</label>
        <input type="date" class="form-control" name="fth_d" placeholder="Enter dose Recive Date">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">5th dose</label>
        <input type="date" class="form-control" name="fifth_d" placeholder="Enter dose Recive Date">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
{{-- from end --}}
</div>
</div>
</div>




@endsection
