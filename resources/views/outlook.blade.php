@extends('layout.app')
 
@section('title', 'Market Outlook')
 
 
@section('content')
<div class="my-3">&nbsp;</div>
    <div class="container-fluid overlay-section d-none d-md-block">
        <img src="{{ asset('images/hero-market-outlook.webp') }}" class="img-fluid" alt="Market Outlook" />

        <!-- Text overlay -->
        <div class="overlay-content">
          <small class="fs-4 fw-bold">Market Outlook</small>
          <h2 class="display-5 text-white"><span class="highlight-yellow">Discover Emerging</span></h2>
          <h2 class="display-5 text-white">Opportunities in Indonesia</h2>
          <p class="mt-3 text-white subheadline_outlook">
            Gain a closer look at Indonesia through the eyes of experts. Discover emerging opportunities, 
            and gain new perspective on navigating the South East Asia's largest & fastest growing economy.
          </p>
        </div>
  </div>
<div class="container-fluid my-5"></div>

<!-- mobile -->
<div class="container-fluid d-md-none d-sm-block">
    <div class="row">
        <div class="col-12">
            <div class="card text-white border-0">
                <img src="{{ asset('images/mobile-outlook.webp') }}" class="card-img" alt="...">
                <div class="card-img-overlay ps-5 overlay-content" style="padding-top: 100px">
                    <small class="fs-4 fw-bold">Market Outlook</small>
                    <h2 class="display-5 text-white"><span class="highlight-yellow">Discover Emerging</span></h2>
                    <h2 class="display-5 text-white">Opportunities in Indonesia</h2>
                    <p class="text-white subheadline_outlook">
                        Gain a closer look at Indonesia through the eyes of experts. Discover emerging opportunities, 
                        and gain new perspective on navigating the South East Asia's largest & fastest growing economy.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>

<div class="container-fluid bg-cover pt-5">
    <div class="container bg-white py-5">
      <div class="row align-items-center">
        <!-- Image Column -->
        <div class="col-lg-6 mb-lg-4 mb-lg-0">
          <img src="{{ asset('images/news-featured.webp') }}" class="img-fluid px-lg-4" alt="Courier Delivery">
        </div>
        
        <!-- Text Column -->
        <div class="col-lg-6">
          <div class="p-lg-4 p-2">
            <p class="feature-text fw-semibold mb-2 fs-3">Featured</p>
            <h3 class="fw-bold text-primary mb-3">Indonesia: Southeast Asia's Digital Growth Powerhouse</h3>
            <p>Indonesia leads the region with a booming digital economy, projected to reach USD 146 billion by 2025.</p>
            <p class="text-muted mb-4 mt-2 text-xs">12 Feb 2024</p>
            <button class="read-more-btn">Read More</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="container py-5">
    <div class="row g-4">
      <!-- News Card 1 -->
      <div class="col-md-4">
        <div class="news-card">
            <a href="{{ route('outlook.detail', ['slug' => 'detail']) }}" class="text-decoration-none">
                <img src="{{ asset('images/m-outlook-news1.webp') }}" alt="Tourism" class="img-fluid mb-3">
                <h4 class="color-blue-mandiri pt-3 pb-2 news-title">Tourism Revival Fuels Indonesia's Economic Recovery</h4>
            </a>
          <p>Post-pandemic, Indonesia's tourism sector is experiencing a strong rebound.</p>
          <small class="text-muted mt-2 text-xs">12 Feb 2024</small>
        </div>
      </div>

      <!-- News Card 2 -->
      <div class="col-md-4">
        <div class="news-card">
            <a href="#" class="text-decoration-none">
                <img src="{{ asset('images/news-2.webp') }}" alt="Infrastructure" class="img-fluid mb-3">
                <h4 class="color-blue-mandiri pt-3 pb-2 news-title">Government’s Infrastructure Push Accelerates Growth</h4>
            </a>
          <p>Massive infrastructure projects enhance connectivity and support economic ambitions.</p>
          <small class="text-muted mt-2 text-xs">12 Feb 2024</small>
        </div>
      </div>

      <!-- News Card 3 -->
      <div class="col-md-4">
        <div class="news-card">
            <a href="#" class="text-decoration-none">
                <img src="{{ asset('images/news-3.webp') }}" alt="Middle Class" class="img-fluid mb-3">
                <h4 class="color-blue-mandiri pt-3 pb-2 news-title">Rising Middle Class Drives Domestic Consumption</h4>
            </a>
          <p>Indonesia’s middle class expected to reach 141 million by 2025, fueling domestic markets.</p>
          <small class="text-muted mt-2 text-xs">12 Feb 2024</small>
        </div>
      </div>
    </div>

    <!-- Footer Controls -->
    <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-center mt-5 gap-3">
      <!-- Results per page -->
      <div class="align-items-center d-md-flex d-none">
        <span class="me-2">Results per page</span>
        <select class="form-select w-auto">
          <option>3</option>
          <option>6</option>
          <option>9</option>
        </select>
      </div>

      <!-- Pagination -->
      <nav>
        <ul class="pagination mb-0">
          <li class="page-item disabled"><a class="page-link" href="#">‹</a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item disabled"><a class="page-link" href="#">…</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item"><a class="page-link" href="#">6</a></li>
          <li class="page-item"><a class="page-link" href="#">›</a></li>
        </ul>
      </nav>
    </div>
  </div>

<div class="container-fluid bg-section">
    <div class="container">
      <div class="content-box">
        <!-- Text content -->
        <div class="text-box">
          <div class="headline">Solutions That Fits <span class="highlight-yellow">Your Vision.</span></div>
          <p class="mt-3 mt-lg-2">Our team of local experts and experienced asset manager is looking forward to hear your needs. Contact us today.</p>
        </div>
        <!-- Button -->
        <a href="{{ route('contact') }}" class="contact-btn text-decoration-none">Contact Us</a>
      </div>
    </div>
  </div>

@endsection