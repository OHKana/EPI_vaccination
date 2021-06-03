<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse">

    <div class="position-sticky pt-4">
      <ul class="nav flex-column" style="height: 100vh">
        <li class="nav-item nav-style p-3">
         <a class="nav-link active " aria-current="page" href="{{route('healthWorkerProfile')}}">
            <span data-feather="home"></span>
            @if(auth()->user()->role=='admin')
            Dashboard
            @else
            Profile
            @endif

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
            <a class="nav-link " href={{route('ChildVaccineChart')}}>
               <span data-feather="users"></span>
               Child Vacchine Chart
             </a>
           </li>
           <li class="nav-item nav-style p-2">
            <a class="nav-link " href={{route('TeenageVaccineChart')}}>
               <span data-feather="users"></span>
               Teenage Vaccine Chart
             </a>
           </li>
        <li class="nav-item nav-style p-2">
           <a class="nav-link " href={{route('healthWorkerNotices')}}>
              <span data-feather="meh"></span>
              Notices
            </a>
          </li>

        <li class="nav-item nav-style p-2">
            <a class="nav-link " href={{route('stockUpdate')}}>
               <span data-feather="truck"></span>
               Stock Update
             </a>

        <li class="nav-item nav-style p-2">
            <a class="nav-link " href={{route('Report')}}>
               <span data-feather="truck"></span>
               Report
             </a>
             <br>
        </li>

      </ul>


    </div>
  </nav>
