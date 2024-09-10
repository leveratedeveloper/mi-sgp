@extends('layout.app')
 
@section('title', 'Our Strategy')
 
@section('content')
<div class="container-fluid d-none d-md-block">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/image02-strategy.webp') }}" alt="" class="img-fluid" style="margin-top: 50px;">
        </div>
        <div class="col-md-5 ps-5">
            <h2 class="display-5 padding-bespoke">Bespoke Equity & <br> <span class="highlight-yellow">Fixed Income Funds.</span></h2>
            <div class="col-lg-9 col-md-12 col-9">
            <p>Tailored fund solutions in optimized jurisdiction designed to support institutional and family office investors in realizing their unique investment objectives.</p>
            </div>
        </div>
    </div>
</div>

<!-- mobile -->
 <div class="container-fluid d-md-none d-sm-block">
    <div class="row">
        <div class="col-12">
            <img src="{{ asset('images/image02-strategy.webp') }}" alt="" class="img-fluid" style="margin-top: 50px;">
        </div>
        <div class="col-12 p-5">
            <h2 class="display-5">Bespoke Equity & <br> <span class="highlight-yellow">Fixed Income Funds.</span></h2>
            <p>Tailored fund solutions in optimized jurisdiction designed to support institutional and family office investors in realizing their unique investment objectives.</p>
        </div>
    </div>
 </div>

 <div class="d-none d-md-block">
    <div class="row">
        <div class="col-md-8 col-lg-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10 d-flex flex-column justify-content-center">
                        <h2 class="display-5 fw-bolder h2-investa">
                            Investa <span class="highlight-yellow"> Money Market </span> Fund.
                        </h2>
                        <div class="col-lg-6 col-md-12 col-6">
                            <p class="mt-4">
                            Launched at the end of 2014, our flagship fund is now distributed by global private banks, giving investors access to liquid instrument with attractive yield.
                            </p>
                            <div class="mt-2">
                                <a href="https://www.bloomberg.com/quote/MIMMMID:SP" class="link-offset-2 link-underline link-underline-opacity-0 link-sky-blue shortcut_link">see at bloomberg 
                                    <img src="{{ asset('images/arrow-right.svg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-md-4 col-lg-4 orange-space-strategy"></div>
    </div>
    </div>

<!-- mobile -->
<div class="container-fluid d-md-none d-sm-block">
    <div class="row">
        <div class="col-12 p-5">
            <h2 class="display-5 fw-bolder">
                Investa <br> <span class="highlight-yellow"> Money Market </span> Fund.
            </h2>
            <p>Launched at the end of 2014, our flagship fund is now distributed by global private banks, giving investors access to liquid instrument with attractive yield.</p>
            <div class="mt-2">
                <a href="https://www.bloomberg.com/quote/MIMMMID:SP" class="link-offset-2 link-underline link-underline-opacity-0 link-sky-blue shortcut_link">see at bloomberg 
                    <img src="{{ asset('images/arrow-right.svg') }}" alt="">
                </a>
            </div>
        </div>
        
    </div>
</div>

<div class="container-fluid py-5 d-none d-md-block product-section">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11">
            <div class="container item-product">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-3">
                        <div class="image-overlay-container">
                            <img src="{{ asset('images/img-4.webp') }}" alt="Background Image" class="img-fluid">
                            <div class="overlay-text">
                                <h4 class="text-fold">The ability to access <br> Indonesia money <br>market product</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-3">
                        <div class="image-overlay-container">
                            <img src="{{ asset('images/img-5.webp') }}" alt="Background Image" class="img-fluid">
                            <div class="overlay-text">
                                <h4 class="text-fold">Short term <br>investment with<br> optimum growth<br> potential</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-3">
                        <div class="image-overlay-container">
                            <img src="{{ asset('images/img-6.webp') }}" alt="Background Image" class="img-fluid">
                            <div class="overlay-text">
                                <h4 class="text-fold">High Liquidity <br> (daily subscription <br> and redemption)</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- mobile -->
<div class="container d-md-none d-sm-block" style="background-image: url('{{ asset('images/background-strategy-mobile.webp') }}');height: 100%; background-size: cover;background-repeat:no-repeat;background-position: right;">
<div class="row p-4">
        <div class="col-12">
            <div class="card border-0 pb-4" style="background-color:transparent;">
                <img src="{{ asset('images/mobile_home_investa_access.webp') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h4 class="position-absolute bottom-0 start-0 px-3 pb-5">The ability to access Indonesia money market product</h4>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card border-0 pb-4" style="background-color:transparent;">
                    <img src="{{ asset('images/mobile_home_investa_short time.webp') }}" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h4 class="position-absolute bottom-0 start-0 px-3 pb-5">Short term investment with optimum growth potential</h4>
                    </div>
                </div>
            </div>
        <div class="col-12">
            <div class="card border-0" style="background-color:transparent;">
                    <img src="{{ asset('images/mobile_home_investa_high liquidity.webp') }}" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h4 class="position-absolute bottom-0 start-0 px-3 pb-5">High Liquidity (daily subscription and redemption)</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
