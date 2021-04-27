<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse">

    <div class="position-sticky pt-4">
      <ul class="nav flex-column">

        @if(auth()->user()->role=='admin')

        <li class="nav-item nav-style p-3">
         <a class="nav-link active " aria-current="page" href="{{route('healthWorkerProfile')}}">
            <span data-feather="home"></span>
           Profile
          </a>
             </li>
        <li class="nav-item nav-style p-2">
         <a class="nav-link  "  href={{route('patientsList')}}>
            <span data-feather="at-sign"></span>
            Patients List
          </a>
        </li>


        <li class="nav-item nav-style p-2">
         <a class="nav-link " href={{route('healthWorkerList')}}>
            <span data-feather="users"></span>
            Health Worker List
          </a>
        </li>
        <li class="nav-item nav-style p-2">
           <a class="nav-link " href={{route('services')}}>
              <span data-feather="meh"></span>
              Vacciness
            </a>
          </li>

        <li class="nav-item nav-style p-2">
            <a class="nav-link " href={{route('registration')}}>
               <span data-feather="truck"></span>
               Registration
             </a>
             <br>
        </li>
        @endif

        @if(auth()->user()->role=='worker')
        <li class="nav-item nav-style p-3">
            <a class="nav-link active " aria-current="page" href="{{route('healthWorkerProfile')}}">
               <span data-feather="home"></span>
              Profile
             </a>
        </li>
        <li class="nav-item nav-style p-2">
            <a class="nav-link  "  href={{route('patientsList')}}>
               <span data-feather="at-sign"></span>
               Patients List
             </a>
        </li>
        <li class="nav-item nav-style p-2">
            <a class="nav-link " href={{route('services')}}>
               <span data-feather="meh"></span>
               Vacciness
             </a>
        </li>
        <li class="nav-item nav-style p-2">
            <a class="nav-link " href={{route('healthWorkerList')}}>
               <span data-feather="users"></span>
               Health Worker List
             </a>
             <br>
        </li>


        @endif


      </ul>


    </div>
  </nav>
