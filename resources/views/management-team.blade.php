@extends('layout.app')
 
@section('title', 'Management')
 
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-1" style="width: 80px;background-color: #003D79;"></div>
            <div class="col-lg-11 col-md-10 col-11">
            <div class="white-spacing-50 py-5"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                <h3><p class="styled-text">Management Team</p></h3>
                            </div>
                            <div class="col-md-8"></div>
                        </div>
                        <div class="row py-2">
                            <div class="col-md-1"></div>
                            <div class="col-md-11">
                                <div>
                                    <h2 class="display-5 d-inline">Experts with <span class="highlight-yellow">Purpose.</span></h2>
                                </div>
                                    <div class="row pt-5">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <!-- desktop -->
                                                <div class="col-md-3 p-4 d-none d-md-block">
                                                    <a href="#" data-bs-target="#modalBaskoro" data-bs-toggle="modal" class="img-hover-zoom">
                                                        <img src="{{ asset('images/management_baskoro.webp') }}" alt="" class="img-fluid">
                                                    </a>
                                                    <div class="pt-4 text-center">
                                                        <h4 class="color-blue-mandiri">Baskoro Adi</h4>
                                                        <p>Chief Executive Officer <br>
                                                        Executive Director</p>
                                                    </div>
                                                </div>
                                                <!-- mobile -->
                                                 <div class="col-6 d-md-none d-sm-block mb-3">
                                                    <a href="#" data-bs-target="#modalBaskoro" data-bs-toggle="modal" class="img-hover-zoom">
                                                            <img src="{{ asset('images/management_baskoro.webp') }}" alt="" class="img-fluid">
                                                        </a>
                                                 </div>
                                                 <div class="col-6 d-md-none d-sm-block">
                                                    <div class="pt-4 text-left">
                                                            <h4 class="color-blue-mandiri">Baskoro Adi</h4>
                                                            <p>Chief Executive Officer <br>
                                                            Executive Director</p>
                                                        </div>
                                                 </div>

                                                <!-- desktop -->
                                                <div class="col-md-3 p-4 d-none d-md-block">
                                                    <a href="#"  data-bs-target="#modalRiki" data-bs-toggle="modal"  class="img-hover-zoom">
                                                        <img src="{{ asset('images/management_riki.webp') }}" alt="" class="img-fluid">
                                                    </a>
                                                    <div class="pt-4 text-center">
                                                        <h4 class="color-blue-mandiri">Riki Frindos</h4>
                                                        <p>Non Executive Director</p>
                                                    </div>
                                                </div>
                                                <!-- mobile -->
                                                <div class="col-6 d-md-none d-sm-block mb-3">
                                                    <a href="#" data-bs-target="#modalRiki" data-bs-toggle="modal" class="img-hover-zoom">
                                                            <img src="{{ asset('images/management_riki.webp') }}" alt="" class="img-fluid">
                                                        </a>
                                                 </div>
                                                 <div class="col-6 d-md-none d-sm-block">
                                                    <div class="pt-4 text-left">
                                                        <h4 class="color-blue-mandiri">Riki Frindos</h4>
                                                        <p>Non Executive Director</p>
                                                        </div>
                                                 </div>
                                            </div>
                                            <div class="row">
                                                <!-- desktop -->
                                                <div class="col-md-3 p-4 d-none d-md-block">
                                                    <a href="#" data-bs-target="#modalBudi" data-bs-toggle="modal" class="img-hover-zoom">
                                                        <img src="{{ asset('images/management_budi.webp') }}" alt="" class="img-fluid">
                                                    </a>
                                                    <div class="pt-4 text-center">
                                                        <h4 class="color-blue-mandiri">Budi Akbarsjah</h4>
                                                        <p>Chief Business Development Officer</p>
                                                    </div>
                                                </div>
                                                <!-- mobile -->
                                                <div class="col-6 d-md-none d-sm-block mb-3">
                                                    <a href="#" data-bs-target="#modalBudi" data-bs-toggle="modal" class="img-hover-zoom">
                                                            <img src="{{ asset('images/management_budi.webp') }}" alt="" class="img-fluid">
                                                        </a>
                                                 </div>
                                                 <div class="col-6 d-md-none d-sm-block">
                                                    <div class="pt-4 text-left">
                                                        <h4 class="color-blue-mandiri">Budi Akbarsjah</h4>
                                                        <p>Chief Business Development Officer</p>
                                                        </div>
                                                 </div>

                                                <!-- desktop -->
                                                <div class="col-md-3 p-4 d-none d-md-block">
                                                    <a href="#" data-bs-target="#modalHenry" data-bs-toggle="modal" class="img-hover-zoom">
                                                        <img src="{{ asset('images/management_henry.webp') }}" alt="" class="img-fluid">
                                                    </a>
                                                    <div class="pt-4 text-center">
                                                        <h4 class="color-blue-mandiri">Henry Shaw</h4>
                                                        <p>Chief Operating Officer</p>
                                                    </div>
                                                </div>
                                                <!-- mobile -->
                                                <div class="col-6 d-md-none d-sm-block mb-3">
                                                    <a href="#" data-bs-target="#modalHenry" data-bs-toggle="modal" class="img-hover-zoom">
                                                            <img src="{{ asset('images/management_henry.webp') }}" alt="" class="img-fluid">
                                                        </a>
                                                 </div>
                                                 <div class="col-6 d-md-none d-sm-block">
                                                    <div class="pt-4 text-left">
                                                        <h4 class="color-blue-mandiri">Henry Shaw</h4>
                                                        <p>Chief Operating Officer</p>
                                                        </div>
                                                 </div>
                                                <!-- desktop -->
                                                <!-- <div class="col-md-3 p-4 d-none d-md-block">
                                                    <a href="#" data-bs-target="#modalKevin" data-bs-toggle="modal" class="img-hover-zoom">
                                                        <img src="{{ asset('images/management_kevin.webp') }}" alt="" class="img-fluid">
                                                    </a>
                                                    <div class="pt-4 text-center">
                                                        <h4 class="color-blue-mandiri">Kevin Wijaya</h4>
                                                        <p>Chief Investment Officer</p>
                                                    </div>
                                                </div> -->
                                                <!-- mobile -->
                                                <!-- <div class="col-6 d-md-none d-sm-block mb-3">
                                                    <a href="#" data-bs-target="#modalKevin" data-bs-toggle="modal" class="img-hover-zoom">
                                                            <img src="{{ asset('images/management_kevin.webp') }}" alt="" class="img-fluid">
                                                        </a>
                                                 </div>
                                                 <div class="col-6 d-md-none d-sm-block">
                                                    <div class="pt-4 text-left">
                                                        <h4 class="color-blue-mandiri">Kevin Wijaya</h4>
                                                        <p>Chief Investment Officer</p>
                                                    </div>
                                                 </div> -->
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <!-- <div class="col-md-5"></div> -->
                        </div>
                        <div class="py-4"></div>
                        
                        
                    </div>
            </div>
        </div>
    </div>
    

@include('partials.modal-baskoro')
@include('partials.modal-riki')
@include('partials.modal-budi')
@include('partials.modal-henry')
@include('partials.modal-kevin')
@endsection
