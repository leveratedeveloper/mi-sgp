@extends('layout.app')
 
@section('title', 'Solutions')
 
@section('content')
<div class="my-3">&nbsp;</div>
    <div class="container-fluid overlay-section d-none d-md-block">
        <img src="{{ asset('images/hero-solutions-1.webp') }}" class="img-fluid" alt="Solutions" />

        <!-- Text overlay -->
        <div class="overlay-content">
        <small class="fs-4" style="font-weight: 500">Solutions</small>
        <h2 class="display-5 text-white">We Open Path to</h2>
        <h2 class="display-5 text-white"><span class="highlight-yellow">Empower Your Growth</span> in</h2>
        <h2 class="display-5 text-white">Indonesia's Thriving Market</h2>
        <p class="mt-3 text-white subheadline_outlook">
        We provide investment strategies designed to optimize growth <br> in high liquidity solutions.
        </p>
        </div>
  </div>
<div class="container-fluid"></div>

<!-- mobile -->
<div class="container-fluid d-md-none d-sm-block">
    <div class="row">
        <div class="col-12">
            <div class="card text-white border-0">
                <img src="{{ asset('images/mobile-solutions.webp') }}" class="card-img" alt="...">
                <div class="card-img-overlay px-5 overlay-content">
                    <small class="fs-4 fw-bold">Solutions</small>
                    <h2 class="display-5 text-white">We Open Path to</h2>
                    <h2 class="display-5 text-white"><span class="highlight-yellow">Empower Your Growth in</span></h2>
                    <h2 class="display-5 text-white">Indonesia's Thriving Market</h2>
                    <p class="mt-3 text-white subheadline_outlook">
                    We provide investment strategies designed to optimize growth in high liquidity solutions.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container strong_foundation">
    <div class="row">
        <div class="col-12 text-center">
            <h2>We Stand on <span class="highlight-yellow">Strong Foundation</span></h2>
            <p class="my-3">Built on trust, stability, and a legacy of growth.</p>
        </div>
    </div>
</div>

<div class="container-fluid px-4 px-lg-0">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="row gx-5">
                <div class="col-12 col-lg-4 mb-lg-0 mb-4">
                    <img src="{{ asset('images/Monetary_Authority_of_Singapore.png') }}" alt="" height="55" class="mb-3">
                    <h4>Holding Capital Market <br> Services (CMS) License</h4>
                    <p>We operate with full compliance and transparency, ensuring the highest trust & security for your investment.</p>
                </div>
                <div class="col-12 col-lg-4 mb-lg-0 mb-4">
                    <img src="{{ asset('images/Aum.png') }}" alt="" height="55" class="mb-3">
                    <h4>Strong total AUM across <br> 6 funds as of June 2024</h4>
                    <p>With a strong & growing portfolio of SGD 1 billion, we deliver consistent result & acquire significant opportunities effectively.</p>
                </div>
                <div class="col-12 col-lg-4 mb-lg-0 mb-4">
                    <img src="{{ asset('images/logo-mandiri-bottom.png') }}" alt="" height="55" class="mb-3">
                    <h4>Part of The Largest State <br> Owned Bank in Indonesia</h4>
                    <p>As a supporting role of Bank Mandiri, we benefit from unparalleled financial backing, extensive market expertise, & a strong network that strengthen our capability to serve you.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
        
    </div>
</div>

<div class="container-fluid growth_driven px-4 px-lg-0">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-4">
            <h2>Growth Driven <br> <span class="highlight-yellow">Curated Solutions</span></h2>
            <p class="mt-3 mb-4">We are dedicated to walk you in a secure & reliable path. <br> So you can grow your wealth with peace of mind.</p>
            <div class="row g-0">
                <div class="col-3 col-md-1">
                    <img src="{{ asset('images/money-market.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-9 col-md-11 px-2 mb-3">
                    <h4>Money Market</h4>
                    <p>Take the advantage of investing in Indonesia as a thriving & growing market. Get an optimal growth while remaining highly liquid.</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-3 col-md-1">
                    <img src="{{ asset('images/impact-funds.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-9 col-md-11 px-2 mb-3">
                    <h4>Impact Funds</h4>
                    <p>Lead your wealth to empower change in Indonesia. Bring light towards the Indonesian community as a whole.</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-3 col-md-1">
                    <img src="{{ asset('images/bespoke-solutions.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-9 col-md-11 px-2 mb-3">
                    <h4>Bespoke Solutions</h4>
                    <p>Tailor your investment strategy to boost growth while remaining productive. We are ready to put your needs at the center of our solutions.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-4">
            <img src="{{ asset('images/hands-paper-1.webp') }}" class="img-fluid d-md-block d-none" alt="">
        </div>
    </div>
</div>

<div class="container money_market">
    <div class="row">
        <div class="col-12 text-center">
            <h6>Money Market</h6>
            <h2>Optimal Growth, <span class="highlight-yellow">Highly Liquid</span></h2>
            <p class="my-3">Grow your funds securely and optimally.</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1>Investa Money Market Fund</h1>
            <span class="text-muted fs-6">Last updated: {{ \Carbon\Carbon::now()->format('F jS, Y g:i a') }} (GMT+8)</span>
        </div>
        <div class="col-6"></div>
    </div>
    <div class="row">
        <div class="col-lg-5"></div>
        <div class="col-12 col-lg-7 mt-5 mt-lg-0">
            <!-- Include this within a .container in your page -->
            <div class="row align-items-end text-end">
            <!-- Growth -->
            <div class="col">
                <div style="font-size:1rem;" class="text-muted">Growth</div>
                <div>
                <span style="font-size:1rem; font-weight:500">IDR</span>
                <span style="font-size:1.5rem; font-weight:700">1.4777</span>
                <span style="color:#28a745; font-size:1rem">0.16 +0.01%</span>
                </div>
            </div>
            
            <!-- Change -->
            <div class="col">
                <div style="font-size:1rem;" class="text-muted">Change</div>
                <div>
                <span style="font-size:1rem; font-weight:500">IDR</span>
                <span style="font-size:1.5rem; font-weight:500">0.1844</span>
                </div>
            </div>
            
            <!-- Total AUM -->
            <div class="col">
                <div style="font-size:1rem;" class="text-muted">Total AUM</div>
                <div>
                <span style="font-size:1rem; font-weight:500">SG$</span>
                <span style="font-size:1.5rem; font-weight:700">1.05</span>
                <span style="font-size:1rem; font-weight:500; color:#004080">Billions</span>
                </div>
            </div>
            </div>

        </div>
    </div>
</div>

<div class="container">
    <div id="investmentChart"></div>
</div>

<div class="container-fluid empower_change">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <img src="{{ asset('images/empower-change-1.webp') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-4 mt-lg-0 mt-5 px-5 px-lg-0">
            <h6>Indonesia Impact Fund</h6>
            <h2><span class="highlight-yellow">Empower Change</span> <br> in Indonesia</h2>
            <p class="my-2">Support Indonesia Impact Fund's implementation of Sustainable Development Goals (SDGs) through:</p>
            <ul>
                <li>Poverty Alleviation, Affordable Healthcare.</li>
                <li>High-Quality & Accessible Education.</li>
                <li>Increasing Women Participation.</li>
                <li>Sustainable Cities & Affordable Housing.</li>
                <li>Empowering Climate-Smart Innovations.</li>
            </ul>
            <a href="https://indonesiaimpactfund.com/" target="_blank">
                <img src="{{ asset('images/learn-more.webp') }}" height="25" alt="">
            </a>
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>

<div class="container-fluid empower_change">
    <div class="row align-items-center">
        <div class="col-lg-1"></div>
        <div class="col-lg-4 mt-lg-0 mt-5 order-2 order-md-1 pe-2 px-5 px-lg-0">
            <h6>Bespoke Solutions</h6>
            <h2><span class="highlight-yellow">Personalized</span> <br>to Your Needs</h2>
            <p class="my-2">Whether you're looking for growth, preservation, or optimizing productive funds, we're here for you. Backed by <a href="{{ route('management') }}" class="text-decoration-none" style="color: #67B2E8">generations of experts</a> and a diverse range of solutions, we help you identify opportunities, manage risks, and optimize your investment strategy.</p>
            <a href="{{ route('contact') }}" target="_blank">
                <img src="{{ asset('images/contact-us.webp') }}" height="25" alt="">
            </a>
        </div>
        <div class="col-lg-1 order-2 order-md-1"></div>
        <div class="col-lg-6 order-1 order-md-2">
            <img src="{{ asset('images/personalized-1.webp') }}" class="img-fluid" alt="">
        </div>
    </div>
</div>

<div class="container unique_advantage">
    <div class="row">
        <div class="col-12 text-center">
            <h6>Our Unique Advantage</h6>
            <h2>Grow with Indonesia, <br> <span class="highlight-yellow">Through Indonesians</span></h2>
            <p class="my-3">Grow with us&mdash;invest alongside those who know Indonesia best.</p>
        </div>
    </div>
</div>

<div class="container grow_indonesia">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="row gx-5">
                <div class="col-12 col-lg-4 mb-lg-0 mb-4">
                    <img src="{{ asset('images/growth-icon.png') }}" alt="" height="55" class="mb-3">
                    <h4>Growth You Can Rely On</h4>
                    <p>We combine market expertise, direct market access, and disciplined strategies to deliver reliable and long term growth.</p>
                </div>
                <div class="col-12 col-lg-4 mb-lg-0 mb-4">
                    <img src="{{ asset('images/dollar-sign.png') }}" alt="" height="55" class="mb-3">
                    <h4>Trusted and Secure</h4>
                    <p>Fully licensed and regulated, we uphold the highest standards of transparency and your investment security.</p>
                </div>
                <div class="col-12 col-lg-4 mb-lg-0 mb-4">
                    <img src="{{ asset('images/handshake.png') }}" alt="" height="55" class="mb-3">
                    <h4>Access Through Local Expertise</h4>
                    <p>As part of the largest state-owned, we offer unparalleled local insight and direct market access.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
        
    </div>
</div>

<div class="container-fluid">
    <div class="row g-0">
        <div class="col-1 position-relative">
            <div class="position-absolute bottom-0 start-0">
                <img src="{{ asset('images/bg-solutions-footer.webp') }}" class="img-fluid" alt="">
            </div>
        </div>
        <div class="col-11 grow-footer">
            <img src="{{ asset('images/img-solutions-footer.webp') }}" class="img-fluid" alt="">
        </div>
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
@push('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/stock.js"></script>
        <script>
            const rawData = @json($values);
            const dataWithoutHeader = rawData.slice(1);
            const sampleData = convertToSampleData(dataWithoutHeader);
            function convertToSampleData(data) {
                return data.map(row => {
                    const [dateStr, , navStr] = row;

                    // Convert "28-Nov-14" to a Date object
                    const [day, monthStr, yearStr] = dateStr.split("-");
                    const monthMap = {
                    Jan: 0, Feb: 1, Mar: 2, Apr: 3, May: 4, Jun: 5,
                    Jul: 6, Aug: 7, Sep: 8, Oct: 9, Nov: 10, Dec: 11
                    };
                    const month = monthMap[monthStr];
                    const year = parseInt(yearStr, 10) + 2000; // Convert "14" to 2014

                    // Convert "1.000,75" to 1000.75
                    const nav = parseFloat(navStr.replace('.', '').replace(',', '.'));

                    return [Date.UTC(year, month, parseInt(day, 10)), nav];
                });
            }
            // const sampleData = [
            //     [Date.UTC(2024, 7, 4), 1.4100],
            //     [Date.UTC(2024, 8, 4), 1.4100],
            //     [Date.UTC(2024, 9, 4), 1.4100],
            //     [Date.UTC(2024, 10, 4), 1.4100],
            //     [Date.UTC(2024, 10, 11), 1.4125],
            //     [Date.UTC(2024, 10, 18), 1.4201],
            //     [Date.UTC(2024, 10, 25), 1.4355],
            //     [Date.UTC(2024, 11, 2), 1.4450],
            //     [Date.UTC(2024, 11, 9), 1.4503],
            //     [Date.UTC(2024, 11, 16), 1.4589],
            //     [Date.UTC(2024, 11, 23), 1.4705],
            //     [Date.UTC(2024, 11, 30), 1.4777],
            //     [Date.UTC(2025, 0, 6), 1.4680],
            //     [Date.UTC(2025, 0, 13), 1.4565],
            //     [Date.UTC(2025, 0, 20), 1.4401],
            //     [Date.UTC(2025, 0, 27), 1.4500],
            //     [Date.UTC(2025, 1, 3), 1.4777]
            // ];
        Highcharts.setOptions({
            lang: {
                rangeSelectorFrom: 'From',
                rangeSelectorTo: 'To'
            }
        });
        Highcharts.stockChart('investmentChart', {
            rangeSelector: {
                selected: 1,
                inputEnabled: true,
                inputStyle: {
                    color: '#444',
                    fontWeight: 'bold'
                },
            },
            chart: {
                height: 300
            },
            navigator: {
                enabled: false
            },
            title: {
                text: ''
            },
            series: [{
                name: 'IDR',
                data: sampleData,
                color: '#70CC80',
                tooltip: {
                    valueDecimals: 4
                }
            }]
        });
        </script>
@endpush