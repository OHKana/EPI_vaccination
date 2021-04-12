@extends('healthWorkerLogedIn')

@section('content')

{{-- button --}}
{{-- <div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">
      Update
     </button>
    </div> --}}


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
    <div class="form-group">
      <label for="exampleInputEmail1">Vaccine Name</label>
      <input type="text" class="form-control" name="V_Name" aria-describedby="emailHelp" placeholder="Enter vaccine Name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Eligible For vaccine Date</label>
      <input type="text" class="form-control" name="Eligible_date" placeholder="Eligible date">
    </div>
    <div class="form-group">
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
<br>




<div>
    <table class="table table-light">
        <thead>
          <tr>
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
            @foreach ($doses as $data)


          <tr>
            <th scope="row">{{ $data->V_Name}}</th>
            <td>{{ $data->Eligible_date}}</td>
            <td>{{ $data->fst_d}}</td>
            <td>{{ $data->snd_d}}</td>
            <td>{{ $data->trd_d}}</td>
            <td>{{ $data->fth_d}}</td>
            <td>{{ $data->fifth_d}}</td>
            <td>
                <div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                       Update
                     </button>
                    </div>

            </td>

          </tr>
          @endforeach
        </tbody>
      </table>

</div>





@endsection
