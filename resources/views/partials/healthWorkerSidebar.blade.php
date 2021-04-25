<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-4">
      <ul class="nav flex-column">
        <li class="nav-item p-3">
         <a class="nav-link active text-white" aria-current="page" href="#">
            <span data-feather="home"></span>
           Profile
          </a>
             </li>
        <li class="nav-item p-2">
         <a class="nav-link  text-white"  href={{route('patientsList')}}>
            <span data-feather="at-sign"></span>
            Patients List
          </a>
        </li>


        <li class="nav-item p-2">
         <a class="nav-link text-white" href={{route('healthWorkerList')}}>
            <span data-feather="users"></span>
            Health Worker List
          </a>
        </li>
        <li class="nav-item p-2">
           <a class="nav-link text-white" href={{route('services')}}>
              <span data-feather="meh"></span>
              Vacciness
            </a>
          </li>

        <li class="nav-item p-2">
            <a class="nav-link text-white" href={{route('registration')}}>
               <span data-feather="truck"></span>
               Registration
             </a>
        </li>
        <li>
            @auth
                <span class="nav-link text-white">{{auth()->user()->name}}</span>
                <a class="nav-link text-white" href="{{route('logout')}}">Log Out</a>
                @else
                <a class="nav-link text-white" href="{{route('healthWorkerSignInUp')}}">Log In</a>

            @endauth
        </li>

      </ul>


    </div>
  </nav>
