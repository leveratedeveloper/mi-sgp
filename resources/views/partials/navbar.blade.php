<!-- Mobile Version -->
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom d-md-none fixed-top">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="{{ asset('images/logo-mandiri.svg') }}" alt="Mandiri Investment" width="68">
    </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mandiriNavbar"
      aria-controls="mandiriNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="mandiriNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Get to know us <i class="bi bi-chevron-down ms-1"></i> 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('about') }}">About us</a></li>
            <li><a class="dropdown-item" href="{{ route('management') }}">Management team</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Solution &amp; insight <i class="bi bi-chevron-down ms-1"></i> 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('strategy') }}">Our Strategy</a></li>
            <li><a class="dropdown-item" href="{{ route('outlook') }}">Market Outlook</a></li>
            <li><a class="dropdown-item" href="{{ route('solutions') }}">Solutions</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Desktop Version -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top d-md-block d-none container-fluid">
  <div class="container" >
    <a class="navbar-brand px-md-0 px-3" href="{{ route('home') }}">
        <img src="{{ asset('images/logo-mandiri.svg') }}" alt="Mandiri Investment" width="68">
    </a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item dropdown position-static">
        <a class="nav-link dropdown-toggle" href="#" id="megaMenu" data-bs-toggle="dropdown" aria-expanded="false">
          Get to know us 
          <i class="bi bi-chevron-down ms-1"></i> 
        </a>
        <div class="container-fluid dropdown-menu w-100 start-0 end-0 mx-auto mt-0 border-0 shadow-sm p-lg-5" aria-labelledby="megaMenu" style="border-radius:0;max-width: 1522px;margin:auto;">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <a href="{{ route('about') }}" class="text-decoration-none">
                <p class="fw-bold text-primary d-flex align-items-center">
                  About Us &nbsp;<img src="{{ asset('images/arrow-right.svg') }}" alt="">
                </p>
                </a>
                <p class="text-muted mb-0">Get to know our company detail, stakeholders, vision and mission.</p>
              </div>
              <div class="col-md-3">
                <a href="{{ route('management') }}" class="text-decoration-none">
                <p class="fw-bold text-primary d-flex align-items-center">
                  Management Team &nbsp;<img src="{{ asset('images/arrow-right.svg') }}" alt="">
                </p>
                </a>
                <p class="text-muted mb-0">Get to know our company detail, stakeholders, vision and mission.</p>
              </div>
            </div>
          </div>
          <div class="right-color-block position-absolute top-0 end-0 h-100"></div>
        </div>
      </li>
      <li class="nav-item dropdown position-static">
        <a class="nav-link dropdown-toggle" href="#" id="megaMenu" data-bs-toggle="dropdown" aria-expanded="false">
            Solution &amp; insight <i class="bi bi-chevron-down ms-1"></i> 
        </a>
        <div class="container dropdown-menu w-100 start-0 end-0 mx-auto mt-0 border-0 shadow-sm p-lg-5" aria-labelledby="megaMenu" style="border-radius:0;max-width: 1522px;margin:auto;">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <a href="{{ route('strategy') }}" class="text-decoration-none">
                <p class="fw-bold text-primary d-flex align-items-center">
                  Our Strategy &nbsp;<img src="{{ asset('images/arrow-right.svg') }}" alt="">
                </p>
                </a>
                <p class="text-muted mb-0">Get to know our company detail, stakeholders, vision and mission.</p>
              </div>
              <div class="col-md-3">
                <a href="{{ route('outlook') }}" class="text-decoration-none">
                <p class="fw-bold text-primary d-flex align-items-center">
                  Market Outlook &nbsp;<img src="{{ asset('images/arrow-right.svg') }}" alt="">
                </p>
                </a>
                <p class="text-muted mb-0">Get to know our company detail, stakeholders, vision and mission.</p>
              </div>
              <div class="col-md-3">
                <a href="{{ route('solutions') }}" class="text-decoration-none">
                <p class="fw-bold text-primary d-flex align-items-center">
                  Solutions &nbsp;<img src="{{ asset('images/arrow-right.svg') }}" alt="">
                </p>
                </a>
                <p class="text-muted mb-0">Get to know our company detail, stakeholders, vision and mission.</p>
              </div>
            </div>
          </div>
          <div class="right-color-block position-absolute top-0 end-0 h-100"></div>
        </div>
      </li>
      <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
    </ul>
  </div>
</nav>

