@extends('patientLogedIn')

@section('content')



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
        

      </tr>
    </thead>
    <tbody>
        {{-- @foreach ($doses as $data)

        <tr>
            <th scope="row">{{ $data->id }}</th>
            <td>{{ $data->V_Name }}</td>
            <td>{{ $data->Eligible_date }}</td>
            <td>{{ $data->fst_d }}</td>
            <td>{{ $data->snd_d }}</td>
            <td>{{ $data->trd_d }}</td>
            <td>{{ $data->fth_d }}</td>
            <td>{{ $data->fifth_d }}</td>
            <td>
                <div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal4">
                        Update
                    </button>
                </div>
            </td>
        </tr>
        @endforeach --}}
    </tbody>
</table>





@endsection
