@extends('healthWorkerLogedIn')

@section('content')
<br>
<div class= "text-start">
    <a class="btn btn-warning" onclick="printDiv()"href="#">Print</a>

</div>
<div id="printArea">
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



<script type="text/javascript">
    function printDiv(){
        var printContents = document.getElementById("printArea").innerHTML;
        var orginalContents = document.body.innerHTML;

        document.body.innerHTML=printContents;
        window.print();


        document.body.innerHTML=orginalContents;

    }
    </script>


@endsection
