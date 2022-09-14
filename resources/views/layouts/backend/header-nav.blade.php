

<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      {{-- <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('backend/images/logo.jpg') }}" alt="logo" /></a> --}}
      <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('backend/images/logo.jpg') }}" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="fa fa-solid fa-bars"></span>
      </button>
      <div class="search-field d-none d-md-block">
        <form class="d-flex align-items-center h-100" action="#">
          <div class="input-group">
            <div class="input-group-prepend bg-transparent">
              <span class="input-group-text border-0"><i class="fa-solid fa-magnifying-glass"></i></span>
            </div>
            <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
          </div>
        </form>
      </div>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            {{-- <div class="nav-profile-img">
              <img src="assets/images/faces/face1.jpg" alt="image">
              <span class="availability-status online"></span>
            </div> --}}
            <div class="nav-profile-text">
              <p class="mb-1 text-black">{{ Auth::user()->name }}</p>
            </div>
          </a>
          <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href="#">
              <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              <i class="fa fa-logout me-2 text-primary"></i> Logout </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="fa fa-solid fa-bars"></span>
      </button>
    </div>
  </nav>