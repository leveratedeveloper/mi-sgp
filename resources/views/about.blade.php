@extends('layout.app')
 
@section('title', 'About Us')
 
 
@section('content')
<div class="py-4"></div>
    <div class="container-fluid d-none d-md-block">
        <img src="{{ asset('images/about-us.webp') }}" alt="" class="img-fluid">
        <div class="bottom-left">
            <h5 class="text-white fw-bold">About Us</h5>
            <h2 class="h2-bold text-white highlight-yellow">Mandiri Investment</h2>
            <div class="col-md-4">
                <p class="text-white">
                Mandiri Investment is a Singapore based asset management company with a focus on Indonesia. A part of the Bank Mandiri group, the company holds a Capital Market Services License under the regulatory supervision of the Monetary Authority of Singapore.
                </p>
            </div>
        </div>
    </div>

    <!-- mobile -->
     <div class="container-fluid d-md-none d-sm-block">
        <div class="row">
            <div class="col-12">
                <div class="card text-white border-0">
                    <img src="{{ asset('images/mobile-about-us.webp') }}" class="card-img" alt="...">
                    <div class="card-img-overlay px-5" style="padding-top: 250px">
                        <h5 class="text-white fw-bold">About Us</h5>
                        <h2 class="text-white highlight-yellow">Mandiri Investment</h2>
                        <div class="col-md-4">
                            <p class="text-white">
                            Mandiri Investment is a Singapore based asset management company with a focus on Indonesia. A part of the Bank Mandiri group, the company holds a Capital Market Services License under the regulatory supervision of the Monetary Authority of Singapore.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>

    <div class="white-spacing-50 py-5 d-none d-md-block"></div>

    <div class="container d-none d-md-block">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <h3><p class="styled-text">Shareholders</p></h3>
            </div>
            <div class="col-md-8"></div>
        </div>
        <div class="row py-2">
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <div>
                    <h2 class="display-5 d-inline">Our <span class="highlight-yellow">Shareholders.</span></h2>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="py-4"></div>
        <div class="row">
            <div class="col-md-1"></div>
                <div class="col">
                    <img src="{{ asset('images/Logo-BMRI.webp') }}" alt="" class="img-fluid" width="150">
                    <h4 class="color-blue-mandiri pt-3 pb-2">PT Bank Mandiri (Persero) Tbk.</h4>
                    <p>Established on October 2nd, 1998 as part of the Indonesian Government's banking restructuring program that merged four banks in Indonesia into one bank. Engaged in the banking business and has listed its shares on the Indonesia Stock Exchange. Its shareholders are the Government of the Republic of Indonesia (60%) and the Public (40%).</p>
                    <a href="https://bankmandiri.co.id" target="_blank" class="link-offset-2 link-underline link-underline-opacity-0 link-sky-blue shortcut_link pt-2">bankmandiri.co.id
                        <img src="{{ asset('images/arrow-right.svg') }}" alt="">
                    </a>
                </div>
                <div class="col">
                    <img src="{{ asset('images/Logo-BMRI-sekuritas.webp') }}" alt="" class="img-fluid" width="150">
                    <h4 class="color-blue-mandiri pt-3 pb-2">PT Mandiri Sekuritas</h4>
                    <p>The securities company, which is a subsidiary of Bank Mandiri, has been operating since July 31st, 2000. Mandiri Sekuritas provides Securities Underwriting, Corporate Finance Advisory, Securities Brokerage, and Research services through its two main business units, namely Investment Banking and Capital Markets.</p>
                    <a href="https://www.mandirisekuritas.co.id" target="_blank" class="link-offset-2 link-underline link-underline-opacity-0 link-sky-blue shortcut_link pt-2">mandirisekuritas.co.id
                        <img src="{{ asset('images/arrow-right.svg') }}" alt="">
                    </a>
                </div>
                <div class="col">
                <img src="{{ asset('images/Logo-BMRI-investasi.webp') }}" alt="" class="img-fluid" width="150">
                <h4 class="color-blue-mandiri pt-3 pb-2">PT Mandiri Manajemen Investasi</h4>
                <p>The fund management company, also known as Mandiri Investasi, which was established in October 26th, 2004 following a corporate spin-off from PT Mandiri Sekuritas. Currently the company is one of the largest fund manager in Indonesia with track record built since 1993.</p>
                <a href="https://mandiri-investasi.co.id" target="_blank" class="link-offset-2 link-underline link-underline-opacity-0 link-sky-blue shortcut_link pt-2">mandiri-investasi.co.id
                    <img src="{{ asset('images/arrow-right.svg') }}" alt="">
                </a>
                </div>
            <div class="col-md-1"></div>
        </div>
        
    </div>

    <!-- Mobile -->
    <div class="container d-md-none d-sm-block">
        <div class="row p-4">
        <div class="col-12 py-3">
            <h3><p class="styled-text">Shareholders</p></h3>
        </div>
        <div class="col-12 pb-4">
            <h2 class="display-5 d-inline">Our <span class="highlight-yellow">Shareholders.</span></h2>
        </div>
            <div class="col-12 py-3">
                <img src="{{ asset('images/Logo-BMRI.webp') }}" alt="" class="img-fluid" width="150">
                    <h4 class="color-blue-mandiri pt-3 pb-2">PT Bank Mandiri (Persero) Tbk.</h4>
                    <p>Established on October 2nd, 1998 as part of the Indonesian Government's banking restructuring program that merged four banks in Indonesia into one bank. Engaged in the banking business and has listed its shares on the Indonesia Stock Exchange. Its shareholders are the Government of the Republic of Indonesia (60%) and the Public (40%).</p>
                    <a href="https://bankmandiri.co.id" target="_blank" class="link-offset-2 link-underline link-underline-opacity-0 link-sky-blue shortcut_link pt-2">bankmandiri.co.id
                        <img src="{{ asset('images/arrow-right.svg') }}" alt="">
                    </a>
            </div>
            <div class="col-12 py-3">
                <img src="{{ asset('images/Logo-BMRI-sekuritas.webp') }}" alt="" class="img-fluid" width="150">
                    <h4 class="color-blue-mandiri pt-3 pb-2">PT Mandiri Sekuritas</h4>
                    <p>The securities company, which is a subsidiary of Bank Mandiri, has been operating since July 31st, 2000. Mandiri Sekuritas provides Securities Underwriting, Corporate Finance Advisory, Securities Brokerage, and Research services through its two main business units, namely Investment Banking and Capital Markets.</p>
                    <a href="https://www.mandirisekuritas.co.id" target="_blank" class="link-offset-2 link-underline link-underline-opacity-0 link-sky-blue shortcut_link pt-2">mandirisekuritas.co.id
                        <img src="{{ asset('images/arrow-right.svg') }}" alt="">
                    </a>
            </div>
            <div class="col-12 py-3">
                <img src="{{ asset('images/Logo-BMRI-investasi.webp') }}" alt="" class="img-fluid" width="150">
                <h4 class="color-blue-mandiri pt-3 pb-2">PT Mandiri Manajemen Investasi</h4>
                <p>The fund management company, also known as Mandiri Investasi, which was established in October 26th, 2004 following a corporate spin-off from PT Mandiri Sekuritas. Currently the company is one of the largest fund manager in Indonesia with track record built since 1993.</p>
                <a href="https://mandiri-investasi.co.id" target="_blank" class="link-offset-2 link-underline link-underline-opacity-0 link-sky-blue shortcut_link pt-2">mandiri-investasi.co.id
                    <img src="{{ asset('images/arrow-right.svg') }}" alt="">
                </a>
            </div>
         </div>
    </div>

    <div class="white-spacing-50 py-5 d-none d-md-block"></div>

    <div class="container-fluid d-none d-md-block" style="height:10vh;"></div>
    <div class="container-fluid d-none d-md-block">
        <div class="row">
            <div class="col-12">
                <img src="{{ asset('images/section-cc.webp') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <!-- Mobile -->
    <div class="container-fluid d-md-none d-sm-block">
        <div class="row">
            <div class="col-12">
                <img src="{{ asset('images/company-culture-mobile.webp') }}" alt="" class="img-fluid">
            </div>
        </div>
        </div>
    
@endsection
