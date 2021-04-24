@extends('patientLogedIn')

@section('content')
<br>

{{-- @dd(auth()->user()->userProfile->category); --}}

@if($check_category=='Child'){
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


          </tr>
        </thead>
        <tbody>


            @foreach ($doses as $data)

            <tr>

                <th scope="row">{{ $data->id }}</th>
                <td>{{ $data->vaccineName->V_Name }}</td>
                <td>{{ $data->Eligible_date }}</td>
                <td>{{ $data->fst_d }}</td>
                <td>{{ $data->snd_d }}</td>
                <td>{{ $data->trd_d }}</td>
                <td>{{ $data->fth_d }}</td>
                <td>{{ $data->fifth_d }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
}
@elseif ($check_category=='Teenage'){

    <table class="table table-light">
        <thead>
            <tr>
                <th scope="col">Serial No</th>
                <th scope="col">Vaccine Dose Name</th>
                <th scope="col">Schedule</th>
                <th scope="col">Eligible Date</th>
                <th scope="col">Vaccine recieve Date</th>



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

                </tr>
            @endforeach
        </tbody>
    </table>
}
@else{
    <h1> data not found</h1>
}
@endif

@endsection
