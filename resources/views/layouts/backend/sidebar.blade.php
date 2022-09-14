<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="{{ asset('backend/images/logo.jpg') }}" alt="profile">
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">David Grey. H</span>
            <span class="text-secondary text-small">Project Manager</span>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">
          <i class="fa fa-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#addressc" aria-expanded="false" aria-controls="addressc">
          <i class="fa-solid fa-location-crosshairs menu-icon"></i>
          <span class="menu-title">Address</span>
          <i class="fa-solid fa-caret-down" style="margin-right: 0;margin-left: auto"></i>
        </a>
        <div class="collapse" id="addressc">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href=""><i class="fa-solid fa-angle-right"></i>Division</a></li>
            <li class="nav-item"> <a class="nav-link" href=""><i class="fa-solid fa-angle-right"></i>District</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>