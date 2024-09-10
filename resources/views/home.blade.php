@extends('layout.app')
 
@section('title', 'Premier Investment Opportunities in Southeast Asia')
 
@section('content')
<div class="container-fluid d-none d-md-block">
    <div class="row">
        <div class="col-12">
        <div id="carouselExampleCaptions" class="carousel slide">
                <!-- <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div> -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/slides/slide-1.webp') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block text-start">
                                <div class="col-lg-8 col-md-12">
                                <h2 class="display-4 text-white">Gateway to Southeast <br> Asia's <span class="highlight-yellow">Largest & Fastest </span> <br> Growing Economy</h2>
                                    <div class="col-lg-6 col-8">
                                        <p class="text-white">For over a decade, we’ve been committed to providing investor access to exciting opportunities in Indonesia, supported by the country’s largest bank.</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    
                </div>
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> -->
                </div>
        </div>
    </div>
</div>

<!-- mobile -->
 <div class="container-fluid d-md-none d-sm-block">
    <div class="row">
        <div class="col-12 px-5" style="background-image: url('{{ asset('images/slides/mobile_home_hero.webp') }}');height: 100%; background-size: cover">
            <!-- <img src="{{ asset('images/slides/mobile_home_hero.webp') }}" alt="" class="img-fluid"> -->
            <h2 class="display-4 text-white" style="padding-top: 170px">Gateway to Southeast <br> Asia's <span class="highlight-yellow">Largest & Fastest </span> <br> Growing Economy</h2>
            <p class="text-white pb-5 mb-4">For over a decade, we've been committed to providing investor access to exciting opportunities in Indonesia, supported by the country’s largest bank.</p>
            
        </div>
    </div>
 </div>
    

<div class="container-fluid d-none d-md-block">
    <div class="row position-relative z-1">
        <div class="col-md-8" style="background-color: #003D79;height: 5vh">&nbsp;</div>
        <div class="col-md-4" style="background-color: #FFB700;height: 5vh">&nbsp;</div>
    </div>
    <div class="row">
        <div class="col-md-8 col-lg-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10 d-flex flex-column justify-content-center">
                        <h2 class="display-5 fw-bolder" style="padding-top: 120px;line-height: 1.3em;">
                            <span class="highlight-yellow">Unlocking</span> The Jewel of <br> The Equator.
                        </h2>
                        <p class="mt-4">
                            As the world's 4th most populated country, Indonesia <br>has great potential waiting to be discovered.
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-md-4 col-lg-4 orange-space"></div>
    </div>
</div>

<!-- mobile -->
 <div class="container-fluid d-md-none d-sm-block p-4">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-column justify-content-center">
                        <h2 class="display-5 fw-bolder" style="padding-top: 0px;line-height: 1.3em;">
                            <span class="highlight-yellow">Unlocking</span> The Jewel of <br> The Equator.
                        </h2>
                        <p class="mt-2 mb-4">
                            As the world's 4th most populated country, Indonesia has great potential waiting to be discovered.
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- <div class="col-md-4 col-lg-4" style="background-color: #FFB700;height: 60vh"></div> -->
    </div>
 </div>

<div class="container-fluid py-5 d-none d-md-block section-benefit">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11">
            <div class="container item-product">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-3">
                        <div class="image-overlay-container">
                            <img src="{{ asset('images/desktop_01_home_indonesia_natural resource.webp') }}" alt="Background Image" class="img-fluid">
                            <div class="overlay-text">
                                <h4>Abundant in <br> natural resources</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-3">
                        <div class="image-overlay-container">
                            <img src="{{ asset('images/desktop_01_home_indonesia_middle class.webp') }}" alt="Background Image" class="img-fluid">
                            <div class="overlay-text">
                                <h4>Middle class <br> growing strong</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-3">
                        <div class="image-overlay-container">
                            <img src="{{ asset('images/desktop_01_home_indonesia_labor.webp') }}" alt="Background Image" class="img-fluid">
                            <div class="overlay-text">
                                <h4>Young and passionate <br> demographic</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- mobile -->
 <div class="container d-md-none d-sm-block" style="background-image: url('{{ asset('images/background-orange.webp') }}');height: 100%; background-size: cover;background-repeat:no-repeat;background-position: right;">
    <div class="row p-4">
        <div class="col-12">
            <div class="card border-0 pb-4" style="background-color:transparent;">
                <img src="{{ asset('images/desktop_01_home_indonesia_natural resource.webp') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h4 class="position-absolute bottom-0 start-0 px-3 pb-5">Abundant in <br> natural resources</h4>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card border-0 pb-4" style="background-color:transparent;">
                    <img src="{{ asset('images/desktop_01_home_indonesia_middle class.webp') }}" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h4 class="position-absolute bottom-0 start-0 px-3 pb-5">Middle class <br> growing strong</h4>
                    </div>
                </div>
            </div>
        <div class="col-12">
            <div class="card border-0" style="background-color:transparent;">
                    <img src="{{ asset('images/desktop_01_home_indonesia_labor.webp') }}" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h4 class="position-absolute bottom-0 start-0 px-3 pb-5">Young and passionate <br> demographic</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

 </div>

<div class="row">
    <div class="col-2" style="background-color: #FFB700;height: 64px"></div>
    <div class="col-10"></div>
</div>

<div class="d-none d-md-block">
    <div class="row">
        <div class="col-5 z-0" style="background-color: #003D79;height: 410px;position: absolute;"></div>
    </div>
    <div class="container mb-5">
        <div class="row py-5">
            <div class="col-lg-6 col-md-6">
                <!-- <div class="embed-responsive embed-responsive-16by9"> -->
                    <div>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal">
                    <img src="{{ asset('images/video-preview.webp') }}" class="img-fluid embed-responsive-item z-1 position-relative" alt="Woman gardening">
                    </a>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 py-3">
                <h2 class="display-5 fw-bolder">Invest in Indonesia.<br>Invest with <br><span class="highlight-yellow">Mandiri Investment.</span></h2>
                <p>We pave your way to unlock investment opportunities and guide you to achieve your goal by providing support through the synergy with Mandiri Group.</p>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
    </div>
</div>

<!-- mobile -->
<div class="d-md-none d-sm-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal">
                <img src="{{ asset('images/video-preview-mobile.webp') }}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-12 p-5">
                <h2 class="display-5 fw-bolder">Invest in Indonesia.<br>Invest with <br><span class="highlight-yellow">Mandiri Investment.</span></h2>
                <p>We pave your way to unlock investment opportunities and guide you to achieve your goal by providing support through the synergy with Mandiri Group.</p>
            </div>
        </div>
    </div>
</div>

<div class="row d-none d-md-block">
    <div class="col-12">
        <div class="white-spacing-50"></div>
    </div>
</div>

<div class="container-fluid d-none d-md-block">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div>
                <img src="{{ asset('images/logo-mandiri-about-us.png') }}" alt="" width="264" class="img-fluid">
                <h2 class="display-5 d-inline">we open <span class="highlight-yellow">doors.</span></h2>
            </div>
        </div>
        <div class="col-md-5"></div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4"></div>
        <div class="col-lg-4 col-md-6">
        <p>Mandiri Investment is a subsidiary of PT Mandiri Manajemen Investasi (known as “Mandiri Investasi”), the largest local fund house in Indonesia.</p>
        <p>Presently, Mandiri Investasi manages mutual funds and discretionary accounts. Both offices are also now working on Private Equity opportunities to access Indonesia’s real sector.</p>
        <p>By going offshore, Mandiri Investasi will be able to provide a more investor friendly platform through which they can invest into one of the fastest growing economies in Asia.</p>
            <div class="my-3">
                <a href="{{ route('about') }}" class="link-offset-2 link-underline link-underline-opacity-0 link-sky-blue shortcut_link">see more 
                    <img src="{{ asset('images/arrow-right.svg') }}" alt="">
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-8 bg-open-doors">
        </div>
    </div>
</div>

<!-- mobile -->
<div class="container-fluid d-md-none d-sm-block" style="background-image: url('{{ asset('images/background-grey-mobile.webp') }}');height: 100%; background-size: cover;background-repeat:no-repeat;background-position: right;">
    <div class="white-spacing-50"></div>
    <div class="row">
        <div class="col-12 px-5">
            <img src="{{ asset('images/logo-mandiri-about-us-mobile.webp') }}" alt="" width="100" class="img-fluid">
        </div>
        <div class="col-12 px-5 py-3">
            <h2 class="display-5 d-inline">we open <span class="highlight-yellow">doors.</span></h2>
            <p>Mandiri Investment is a subsidiary of PT Mandiri Manajemen Investasi (known as “Mandiri Investasi”), the largest local fund house in Indonesia.</p>
            <p>Presently, Mandiri Investasi manages mutual funds and discretionary accounts. Both offices are also now working on Private Equity opportunities to access Indonesia’s real sector.</p>
            <p>By going offshore, Mandiri Investasi will be able to provide a more investor friendly platform through which they can invest into one of the fastest growing economies in Asia.</p>
            <div class="my-3">
                <a href="{{ route('about') }}" class="link-offset-2 link-underline link-underline-opacity-0 link-sky-blue shortcut_link">see more 
                    <img src="{{ asset('images/arrow-right.svg') }}" alt="">
                </a>
            </div>
            <img src="{{ asset('images/mobile_home_we-open-doors.webp') }}" alt="" class="img-fluid">
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel">Video Title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe id="videoPlayer" src="https://www.youtube.com/embed/m4_5LfRUDhU" title="Build A Sustainable Growth With Mandiri Investasi - Mandiri Investment" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
