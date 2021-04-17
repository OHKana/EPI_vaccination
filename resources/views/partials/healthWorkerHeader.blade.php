<header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0" style="font-family: 'Times New Roman', Times, serif;">EPI Vaccination Management</h3>
        <div>
        <nav class="nav nav-masthead justify-content-center float-md-end">
        <ul class="nav">
            <li class="nav item nav-style">
            <a class="nav-link active" aria-current="page" href="#">Profile</a>
            </li>

            <li class="nav item nav-style">
            <a class="nav-link" href="{{route('patientsList')}}">Patients List</a>
            </li>

            <li class="nav item nav-style">
            <a class="nav-link" href="{{route('healthWorkerList')}}">Health Worker List</a>
            </li>

            <li class="nav item nav-style">
            <a class="nav-link" href="{{route('services')}}">Vacciness</a>
            </li>

            <li class="nav item nav-style">
            <a class="nav-link " href="{{route('registration')}}">Registration</a>
            </li>

            <li class="nav item nav-style">

            @auth
                <span class="nav-link">{{auth()->user()->HealthAssistant_Name}}</span>
                <a class="nav-link" href="{{route('logout')}}">Log Out</a>
                @else
                <a class="nav-link" href="{{route('healthWorkerSignInUp')}}">Log In</a>

            @endauth
            </li>
        </ul>
        </nav>
        </div>
    </div>
</header>

{{-- <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" href="#">Active</a>
    </li> --}}
