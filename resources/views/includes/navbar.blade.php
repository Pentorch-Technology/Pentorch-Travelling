<!-- Navbar -->    
<nav class="navbar fixed-top navbar-expand-lg navbar-transparent h-auto">
      <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
          <img src="{{ url('frontend/images/logo_pentorch13.png') }}" alt="Logo PENTORCH" />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
                <span class="fa fa-bars text-white"></span>
            </button>

        <div class="collapse navbar-collapse" id="navb">
          <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item mx-md-2">
              <a href="#" class="nav-link active">Home</a>
            </li>
            <li class="nav-item mx-md-2">
              <a href="#" class="nav-link">Paket Travel</a>
            </li>
            <li class="navr-item dropdown">
              <a
              href=""
                class="nav-link dropdown-toggle"
                id="navbardrop"
                data-toggle="dropdown"
              >
                Services
              </a>
              <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Link</a>
                <a href="#" class="dropdown-item">Link</a>
                <a href="#" class="dropdown-item">Link</a>
              </div>
            </li>
            <li class="nav-item mx-md-2">
              <a href="#" class="nav-link">Testimonial</a>
            </li>
          </ul>
          @guest
              <!-- Mobile Button -->
          <form class="form-inline d-sm block d-md-none">
            <button class="btn btn-outline-warning login my-2 my-sm-0 px-4" type="button" 
            onclick="event.preventDefault(); location.href='{{ url('login') }}';">Masuk</button>
          </form>

          <!-- Desktop Button -->
          <form class="form-inline my-2 my-lg-0 d-none d-md-block">
            <button class="btn btn-outline-warning login btn-navbar-right my-2 my-sm-0 px-4" type="button" 
            onclick="event.preventDefault(); location.href='{{ url('login') }}';">
              Masuk
            </button>
          </form>
          @endguest

          @auth
              <!-- Mobile Button -->
          <form class="form-inline d-sm block d-md-none" action="{{ url('logout') }}" method="POST">
              @csrf
            <button class="btn btn-outline-warning login my-2 my-sm-0 px-4" type="submit">Keluar</button>
          </form>

          <!-- Desktop Button -->
          <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
            @csrf
            <button class="btn btn-outline-warning login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
              Keluar
            </button>
          </form>
          @endauth
        </div>
      </nav>
    </div>