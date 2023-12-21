<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fw-bold fs-5" aria-current="page" href="{{route('home')}}">Homepage</a>
        </li> 
      </ul> 
      <ul class="navbar-nav text-end mb-2 mx-5 fw-bold fs-5 mb-lg-0">
        {{-- <li class="nav-item me-2">
          <a class="nav-link active" aria-current="page" href="{{route('login')}}">Effettua il login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('register')}}">Registrati</a>
        </li> --}}
      </ul>  
      @guest
      <ul class="navbar-nav text-end mb-2 mx-5 fw-bold fs-5 mb-lg-0">
        
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Accedi
        </a>
        <ul class="dropdown-menu">
          <li class="nav-item me-2">
            <a class="nav-link active" aria-current="page" href="{{route('login')}}">Effettua il login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('register')}}">Registrati</a>
          </li>
          
        </ul>
      </li> 

      </ul>
      @endguest
      @Auth
      <ul class="navbar-nav text-end mb-2 mx-5 fw-bold fs-5 mb-lg-0">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Accedi
          </a>
          <ul class="dropdown-menu">
            <li class="nav-item me-2">
              <a class="nav-link active" aria-current="page" href="{{route('auth.dashboard')}}">Dashboard</a>
            </li>
           
            
          </ul>
        </li> 
  
        </ul>


      @endAuth
    </ul>
    </div>
  </div>
</nav>