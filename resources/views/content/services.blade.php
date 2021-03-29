@extends('master')

@section('content')


<div >


    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" data-interval="50">
          Select from here
        </a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" data-toggle="tab" class="dropdown-link" href="{{route('babyTikaChart')}}">Baby tika Chart</a></li>
          <li><a class="dropdown-item" data-toggle="tab" class="dropdown-link" href="{{route('teenageTikaChart')}}">Teenage tika chart</a></li>
          <li><a class="dropdown-item" data-toggle="tab" class="dropdown-link" href="{{route('pregnancyTikaChart')}}">Pregnancy tika chart</a></li>
        </ul>
        {{-- <div class="dropdownMenuLink">
            <div id="baby" class="tab-pane" active> <p>baby Lorem ipsum dolor sit amet.</p></div>
            <div id="teenage" class="tab-pane" fade> <p>teenage Lorem ipsum dolor sit amet.</p></div>
            <div id="pregnancy" class="tab-pane" fade> <p>pregnancy Lorem ipsum dolor sit amet.<p></div>
        </div> --}}
  </div>

  <!-- Large button groups (default and split) -->
    {{-- <div class="btn-group">
        <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Baby Tika Chart
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">BCG</a></li>
            <li><a class="dropdown-item" href="#">pentavalent</a></li>
            <li><a class="dropdown-item" href="#">OPV</a></li>
            <li><a class="dropdown-item" href="#">MR</a></li>
            <li><a class="dropdown-item" href="#">HB</a></li>
            <li><a class="dropdown-item" href="#">OPV</a></li>
        </ul>
    </div>
    <div class="btn-group">
        <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Teenage Tika Chart
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">BCG</a></li>
            <li><a class="dropdown-item" href="#">pentavalent</a></li>
        </ul>
    </div>
    <div class="btn-group">
        <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Pregnancy Tika Chart
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">BCG</a></li>
            <li><a class="dropdown-item" href="#">pentavalent</a></li>
        </ul>
    </div>


</div>
 --}}

@endsection
