@extends('layout.app')
 
@section('title', 'Market Outlook - Detail')
 


@section('content')
<div class="my-3">&nbsp;</div>
    <div class="container-fluid overlay-section d-none d-md-block mt-lg-5">
        <img src="{{ asset('images/hero-market-outlook-details.webp') }}" class="img-fluid" alt="Market Outlook" />

        <!-- Text overlay -->
        <div class="overlay-content">
          <small class="fs-4 fw-bold">Market Outlook</small>
          <h2 class="display-5 text-white w-50">Indonesia: Southeast Asia's Digital Growth Powerhouse</h2>
          <p class="mt-3 text-white w-50">
          Indonesia's economy is growing rapidly, fueled by technology, infrastructure development, and a booming consumer market. Startups and foreign investments play a key role, positioning Indonesia as a regional leader. This outlook highlights the country’s transformation and key opportunities for investors.
          </p>
          <a href="#" class="download-btn text-decoration-none my-4">Download PDF</a>
        </div>
  </div>
<!-- mobile -->
<div class="container-fluid d-md-none d-sm-block">
    <div class="row">
        <div class="col-12">
            <div class="card text-white border-0">
                <img src="{{ asset('images/m-hero-market-outlook-details.webp') }}" class="card-img" alt="...">
                <div class="card-img-overlay px-5 overlay-content">
                    <small class="fs-4 fw-bold">Solutions</small>
                    <h2 class="display-5 text-white">Indonesia: Southeast Asia's Digital Growth Powerhouse</h2>
                    <p class="mt-3 text-white subheadline_outlook">
                    Indonesia's economy is growing rapidly, fueled by technology, infrastructure development, and a booming consumer market. Startups and foreign investments play a key role, positioning Indonesia as a regional leader. This outlook highlights the country's transformation and key opportunities for investors.
                    </p>
                    <a href="#" class="download-btn text-decoration-none my-4">Download PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-hero-outlook-detail d-none d-md-block"></div>

<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <div style="background-color: #003D79; height: auto">
                <img src="{{ asset('images/key-hole.webp') }}" class="img-fluid p-5 my-5" alt="Market Outlook" style="margin-left:120px;"/>
            </div>
        </div>
        <div class="col-lg-1">&nbsp;</div>
        <div class="col-lg-4 mt-lg-0 mt-5 px-5 px-lg-0">
            <h6>1st Key Point</h6>
            <h2>Digital Transformation and Technology</h2>
            <p class="my-2 pe-lg-5">Indonesia is rapidly becoming a leader in the digital space, with a booming e-commerce market and fintech innovations driving its economic expansion. By 2025, the country's digital economy is expected to reach USD 146 billion, fueled by increased smartphone adoption and internet access. The growth of digital services positions Indonesia as a major player in Southeast Asia's tech landscape.</p>
            <a href="#" target="_blank">
                <img src="{{ asset('images/see-more.png') }}" height="20" alt="">
            </a>
        </div>
        <div class="col-lg-1">&nbsp;</div>
    </div>

    <div class="row align-items-center">
        <div class="col-lg-1">&nbsp;</div>
        <div class="col-lg-4 mt-lg-0 mt-5 px-5 px-lg-0">
            <h6>2nd Key Point</h6>
            <h2>Infrastructure Development Driving Growth</h2>
            <p class="my-2 pe-lg-5">Large-scale infrastructure projects, such as new airports, ports, and road networks, are essential to Indonesia’s economic development. These investments are improving regional connectivity, reducing business costs, and attracting foreign investment. The government’s commitment to infrastructure ensures Indonesia will remain a key hub for trade and commerce in the region.</p>
            <a href="#" target="_blank">
                <img src="{{ asset('images/see-more.png') }}" height="20" alt="">
            </a>
        </div>
        <div class="col-lg-1">&nbsp;</div>
        <div class="col-lg-6">
            <div style="background-color: #003D79; height: auto">
                <img src="{{ asset('images/2nd-key.webp') }}" class="img-fluid p-5" alt="Market Outlook" style="margin-left:-120px;"/>
            </div>
        </div>
    </div>

    <div class="row align-items-center">
        <div class="col-lg-6">
            <div style="background-color: #003D79; height: auto">
                <img src="{{ asset('images/3nd-key.webp') }}" class="img-fluid p-5 my-5" alt="Market Outlook" style="margin-left:120px;"/>
            </div>
        </div>
        <div class="col-lg-1">&nbsp;</div>
        <div class="col-lg-4 mt-lg-0 mt-5 px-5 px-lg-0">
            <h6>3rd Key Point</h6>
            <h2>Tourism, Consumer Growth, and Market Opportunities</h2>
            <p class="my-2 pe-lg-5">Indonesia's tourism sector is seeing a strong post-pandemic recovery, especially in popular destinations like Bali. Simultaneously, the expanding middle class is driving domestic demand across various industries, particularly in consumer goods and services. Together, these trends create an environment rich with opportunities for investment and growth.</p>
            <a href="#" target="_blank">
                <img src="{{ asset('images/see-more.png') }}" height="20" alt="">
            </a>
        </div>
        <div class="col-lg-1">&nbsp;</div>
    </div>
</div>

<div class="container py-5 mt-2">
  <div class="row">
    <div class="col-12">
      <h3 class="title-other-outlooks">Other Outlooks</h3>
    </div>
  </div>
</div>

<div class="container pb-5">
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
                <h4 class="color-blue-mandiri pt-3 pb-2 news-title">Government's Infrastructure Push Accelerates Growth</h4>
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
  </div>


    <div class="my-3">&nbsp;</div>
    
    <div class="container-fluid overlay-section mt-lg-5 d-none d-md-block">
        <img src="{{ asset('images/bg-enter-the-open-gate.webp') }}" class="img-fluid" alt="Market Outlook" />

        <!-- Text overlay -->
        <div class="overlay-content">
          <h2 class="display-5 text-white w-50">Enter The Open Gate <span class="highlight-yellow">Empower Your Growth</span> </h2>
          <p class="mt-3 text-white w-50">
          A range of solutions and diverse investments products ready <br> to walk you in a secure &amp; reliable path.
          </p>
          <a href="{{ route('solutions') }}" class="download-btn text-decoration-none my-4">See Our Solutions</a>
        </div>
  </div>

  <!-- mobile -->
  <div class="container-fluid overlay-section mt-lg-5 d-md-none d-sm-block">
        <img src="{{ asset('images/m-bg-enter-the-open-gate.webp') }}" class="img-fluid" alt="Market Outlook" />

        <!-- Text overlay -->
        <div class="overlay-content mt-5">
          <h2 class="display-5 text-white w-100">Enter The Open Gate <span class="highlight-yellow">Empower Your Growth</span> </h2>
          <p class="mt-3 text-white w-100">
          A range of solutions and diverse investments products ready to walk you in a secure &amp; reliable path.
          </p>
          <a href="{{ route('solutions') }}" class="download-btn text-decoration-none my-4 mt-5">See Our Solutions</a>
        </div>
  </div>

  

<div class="container-fluid bg-section">
    <div class="container">
      <div class="content-box">
        <!-- Text content -->
        <div class="text-box">
          <div class="headline">Solutions That Fits <span class="highlight-yellow">Your Vision</span></div>
          <p class="mt-3 mt-lg-2">Our team of local experts and experienced asset manager is looking forward to hear your needs. Contact us today.</p>
        </div>
        <!-- Button -->
         <a href="{{ route('contact') }}" class="contact-btn text-decoration-none">Contact Us</a>
      </div>
    </div>
  </div>
@endsection