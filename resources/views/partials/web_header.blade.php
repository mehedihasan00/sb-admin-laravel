<div class="top-menu">
        <nav class="navbar navbar-light px-md-5 pt-0">
            <div class="container-fluid top-container-fluid">
                <a class="navbar-brand" href="#">
                    Address: Beside Shah Ali Plaza, Mirpur-10, Dhaka-1216
                </a>
                <div>
                  <span class="navbar-mod-brand me-2">Follow Us </span>
                    <a href="#!" class="navbar-brand navbar-mod-brand">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#!" class="navbar-brand navbar-mod-brand">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="#!" class="navbar-brand navbar-mod-brand">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="#!" class="navbar-brand navbar-mod-brand me-0">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div id="header" class="sticky-top ">
      <nav class="navbar navbar-expand-lg navbar-light bg-light px-md-5">
        <div class="container-fluid px-md-0">
          <a class="navbar-brand" href="index.html">
            <img class="logo" src="{{ asset('frontend/assets/img/link-up_technology.png') }}" alt="" srcset="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse flex-grow-0 ms-0" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item nav-mod-item">
                <a class="nav-link nav-mod-link hover" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item nav-mod-item">
                <a class="nav-link nav-mod-link hover" href="#about">About</a>
              </li>
              <li class="nav-item nav-mod-item">
                <a class="nav-link nav-mod-link hover" href="#service">Service</a>
              </li>
              <li class="nav-item nav-mod-item">
                <a class="nav-link nav-mod-link hover" href="#product">Product</a>
              </li>
              <li class="nav-item nav-mod-item">
                <a class="nav-link nav-mod-link hover" href="#team">Team</a>
              </li>
              <li class="nav-item nav-mod-item">
                <a class="nav-link nav-mod-link hover" href="#gallery">Gallery</a>
              </li>
              <li class="nav-item nav-mod-item">
                <a class="nav-link nav-mod-link hover" href="#contact">Contact Us</a>
              </li>
              @if(session('LoggedUser'))
                <li class="nav-item nav-mod-item">
                    <a class="nav-link nav-mod-link" href="{{ asset(url('admin/dashboard')) }}">
                        <span class="badge bg-success">Dashboard</span>
                    </a>
                </li>
              @endif
            </ul>
          </div>
        </div>
      </nav>
    </div>