@extends('front.master')

@section('content')
<div class="body_content">
    <!-- Home Banner Style V1 -->
    <section class="home-banner-style7 pt0 pb30 bgc-white">
      <div class="home-style7 maxw1600 bdrs24 position-relative mx-auto mx10-lg">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-xl-6">
              <div class="inner-banner-style7 mb30-lg">
                <h1 class="hero-title mb30 animate-up-1">Find Your Place <br class="d-none d-lg-block"> </h1>
                <div class="advance-style3 at-home7 mb30 animate-up-2">
                  <ul class="nav nav-tabs p-0 m-0" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Buy</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Rent</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Sold</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="advance-content-style3 at-home7">
                        <div class="row">
                          <div class="col-md-8 pe-3 pe-md-0">
                            <div class="advance-search-field position-relative text-start">
                              <form method="get" class="form-search position-relative" accept-charset="utf-8">
                                <div class="box-search">
                                  <span class="icon flaticon-home-1"></span>
                                  <input class="form-control rounded-0" type="text" name="search" placeholder="Enter Keyword">
                                  <div class="search-suggestions rounded-0">
                                    <h6 class="fz14 ml20 mt25 mb-0">Recent Searches</h6>
                                    <div class="box-suggestions">
                                      <ul class="p-0 m-0">
                                        <li>
                                          <div class="info-product">
                                            <div class="item_title"><i class="flaticon-maps pe-2"></i> New York, NY</div>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="info-product">
                                            <div class="item_title"><i class="flaticon-maps pe-2"></i> Los Angeles</div>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="info-product">
                                            <div class="item_title"><i class="flaticon-home pe-2"></i> Villa on Hollywood Boulevard</div>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="info-product">
                                            <div class="item_title"><i class="flaticon-maps pe-2"></i> New York, NY</div>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="d-flex align-items-center justify-content-md-center mt-2 mt-md-0">
                              <button class="advance-search-btn mr15" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="flaticon-settings"></span> Advanced</button>
                              <button class="advance-search-icon ud-btn btn-dark" type="button"><span class="flaticon-search"></span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="advance-content-style3 at-home7">
                        <div class="row">
                          <div class="col-md-8 pe-3 pe-md-0">
                            <div class="advance-search-field position-relative text-start">
                              <form method="get" class="form-search position-relative" accept-charset="utf-8">
                                <div class="box-search">
                                  <span class="icon flaticon-home-1"></span>
                                  <input class="form-control rounded-0" type="text" name="search" placeholder="Enter Keyword">
                                  <div class="search-suggestions rounded-0">
                                    <h6 class="fz14 ml20 mt25 mb-0">Recent Searches</h6>
                                    <div class="box-suggestions">
                                      <ul class="p-0 m-0">
                                        <li>
                                          <div class="info-product">
                                            <div class="item_title"><i class="flaticon-maps pe-2"></i> New York, NY</div>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="info-product">
                                            <div class="item_title"><i class="flaticon-maps pe-2"></i> Los Angeles</div>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="info-product">
                                            <div class="item_title"><i class="flaticon-home pe-2"></i> Villa on Hollywood Boulevard</div>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="info-product">
                                            <div class="item_title"><i class="flaticon-maps pe-2"></i> New York, NY</div>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="d-flex align-items-center justify-content-md-center mt-2 mt-md-0">
                              <button class="advance-search-btn mr15" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="flaticon-settings"></span> Advanced</button>
                              <button class="advance-search-icon ud-btn btn-dark" type="button"><span class="flaticon-search"></span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                      <div class="advance-content-style3 at-home7">
                        <div class="row">
                          <div class="col-md-8 pe-3 pe-md-0">
                            <div class="advance-search-field position-relative text-start">
                              <form method="get" class="form-search position-relative" accept-charset="utf-8">
                                <div class="box-search">
                                  <span class="icon flaticon-home-1"></span>
                                  <input class="form-control rounded-0" type="text" name="search" placeholder="Enter Keyword">
                                  <div class="search-suggestions rounded-0">
                                    <h6 class="fz14 ml20 mt25 mb-0">Recent Searches</h6>
                                    <div class="box-suggestions">
                                      <ul class="p-0 m-0">
                                        <li>
                                          <div class="info-product">
                                            <div class="item_title"><i class="flaticon-maps pe-2"></i> New York, NY</div>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="info-product">
                                            <div class="item_title"><i class="flaticon-maps pe-2"></i> Los Angeles</div>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="info-product">
                                            <div class="item_title"><i class="flaticon-home pe-2"></i> Villa on Hollywood Boulevard</div>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="info-product">
                                            <div class="item_title"><i class="flaticon-maps pe-2"></i> New York, NY</div>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="d-flex align-items-center justify-content-md-center mt-2 mt-md-0">
                              <button class="advance-search-btn mr15" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="flaticon-settings"></span> Advanced</button>
                              <button class="advance-search-icon ud-btn btn-dark" type="button"><span class="flaticon-search"></span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex animate-up-3">
                  <a href="#">
                    <div class="funfact_one mr60 mr10-xs">
                      <div class="details">
                        <ul class="ps-0 mb-0">
                          <li><div class="timer">88</div></li>
                        </ul>
                        <p class="text mb-0">Rented</p>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="funfact_one mr60 mr10-xs">
                      <div class="details">
                        <ul class="ps-0 mb-0 d-flex">
                          <li><div class="timer">10</div></li>
                          {{-- <li><span>K</span></li> --}}
                          <li><span>+</span></li>
                        </ul>
                        <p class="text mb-0">Property Sold</p>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="funfact_one">
                      <div class="details">
                        <ul class="ps-0 mb-0 d-flex justify-content-sm-center">
                          <li><div class="timer">20</div></li>
                          <li><span>+</span></li>
                        </ul>
                        <p class="text mb-0">Property Listed</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="home7-main-slider">
                <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide" data-swiper-slide-index="00">
                      <div class="listing-style13">
                        <div class="list-thumb">
                          <img class="w-100" src="{{asset('theme/images/listings/slider-home7-1.jpg')}}" alt="">
                        </div>
                        <div class="list-content">
                          <div class="h4 list-price animate-up-1 mb-0">$986,00</div>
                          <h2 class="list-title animate-up-2"><a href="#">Studio on Grand Avenue</a></h2>
                          <div class="list-meta d-flex align-items-center animate-up-3">
                            <a class="mr10" href="#">32 Beds -</a>
                            <a class="mr10" href="#">91 Baths -</a>
                            <a href="#">1500 sq ft</a>
                          </div>
                          <a href="#" class="ud-btn btn-transparent2 animate-up-2">View Details<i class="fal fa-arrow-right-long"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="01">
                      <div class="listing-style13">
                        <div class="list-thumb">
                          <img class="w-100" src="{{asset('theme/images/listings/slider-home7-2.jpg')}}" alt="">
                        </div>
                        <div class="list-content">
                          <div class="h4 list-price animate-up-1 mb-0">$14,000</div>
                          <h2 class="list-title animate-up-1"><a href="#">New apartment nice view</a></h2>
                          <div class="list-meta d-flex align-items-center animate-up-1">
                            <a class="mr10" href="#">32 Beds -</a>
                            <a class="mr10" href="#">91 Baths -</a>
                            <a href="#">1500 sq ft</a>
                          </div>
                          <a href="#" class="ud-btn btn-transparent2 animate-up-2">View Details<i class="fal fa-arrow-right-long"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="02">
                      <div class="listing-style13">
                        <div class="list-thumb">
                          <img class="w-100" src="{{asset('theme/images/listings/slider-home7-3.jpg')}}" alt="">
                        </div>
                        <div class="list-content">
                          <div class="h4 list-price animate-up-1 mb-0">$14,000</div>
                          <h2 class="list-title animate-up-1"><a href="#">New apartment nice view</a></h2>
                          <div class="list-meta d-flex align-items-center animate-up-1">
                            <a class="mr10" href="#">32 Beds -</a>
                            <a class="mr10" href="#">91 Baths -</a>
                            <a href="#">1500 sq ft</a>
                          </div>
                          <a href="#" class="ud-btn btn-transparent2 animate-up-2">View Details<i class="fal fa-arrow-right-long"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swpr_paginations">
                    <div class="slideactive">01</div>
                    <div class="slidetotal">03</div>
                  </div>
                  <!-- </div> -->
                  <div class="posr mt-4">
                    <div class="swpr_custom_prgrsba swiper-pagination swiper-pagination-progressbar"> <span class="swiper-pagination-progressbar-fill"></span> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- Featured homes -->
    <section class="pt-0 pb90 pb30-md bgc-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="main-title wow fadeInUp" data-wow-delay="100ms">
              <h2 class="title">Featured homes</h2>
              <p class="paragraph">Get some Inspirations from 1800+ skills</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="explore-apartment-5col-slider navi_pagi_top_right slider-4-grid owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="apartment-style2 text-center mb30">
                    <div class="apartment-img"><img src="{{asset('theme/images/listings/as-6.jpg')}}" alt=""></div>
                    <div class="apartment-content">
                      <h6 class="title mb-0">Apartments for sale</h6>
                      <p class="text mb-0">2 Properties</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="apartment-style2 text-center mb30">
                    <div class="apartment-img"><img src="{{asset('theme/images/listings/as-7.jpg')}}" alt=""></div>
                    <div class="apartment-content">
                      <h6 class="title mb-0">Single family homes for Rent</h6>
                      <p class="text mb-0">8 Properties</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="apartment-style2 text-center mb30">
                    <div class="apartment-img"><img src="{{asset('theme/images/listings/as-8.jpg')}}" alt=""></div>
                    <div class="apartment-content">
                      <h6 class="title mb-0">Offices For Rent</h6>
                      <p class="text mb-0">2 Properties</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="apartment-style2 text-center mb30">
                    <div class="apartment-img"><img src="{{asset('theme/images/listings/as-9.jpg')}}" alt=""></div>
                    <div class="apartment-content">
                      <h6 class="title mb-0">Villas for sale</h6>
                      <p class="text mb-0">1 Propertie(s)</p>
                    </div>
                  </div>
                </a>
              </div>


            </div>
          </div>
        </div>
      </div>
    </section>

       <!-- Popular Property -->
       <section class="pb90 pb30-md pt-0">
        <div class="container">
          <div class="row wow fadeInUp" data-wow-delay="00ms">
            <div class="col-lg-9">
              <div class="main-title2">
                <h2 class="title">Discover Popular Properties</h2>
                <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="dark-light-navtab style2 text-start text-lg-end mt-0 mt-lg-4 mb-4">
                <ul class="nav nav-pills justify-content-start justify-content-lg-end" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">For Rent</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link me-0" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">For Sale</button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="row">
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <div class="listing-style5">
                        <div class="list-thumb">
                          <img class="w-100" src="{{asset('theme/images/listings/g1-15.jpg')}}" alt="">
                          <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                          <div class="list-meta2">
                            <a href="#"><span class="flaticon-like"></span></a>
                            <a href="#"><span class="flaticon-new-tab"></span></a>
                            <a href="#"><span class="flaticon-fullscreen"></span></a>
                          </div>
                        </div>
                        <div class="list-content">
                          <div class="list-price mb-2">$14,000 / <span>mo</span></div>
                          <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h6>
                          <p class="list-text">California City, CA, USA</p>
                          <div class="list-meta d-flex align-items-center">
                            <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                            <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                            <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <div class="listing-style5">
                        <div class="list-thumb">
                          <img class="w-100" src="{{asset('theme/images/listings/g1-16.jpg')}}" alt="">
                          <div class="list-meta2">
                            <a href="#"><span class="flaticon-like"></span></a>
                            <a href="#"><span class="flaticon-new-tab"></span></a>
                            <a href="#"><span class="flaticon-fullscreen"></span></a>
                          </div>
                        </div>
                        <div class="list-content">
                          <div class="list-price mb-2">$82,000 / <span>mo</span></div>
                          <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in Rego Park</a></h6>
                          <p class="list-text">California City, CA, USA</p>
                          <div class="list-meta d-flex align-items-center">
                            <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                            <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                            <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <div class="listing-style5">
                        <div class="list-thumb">
                          <img class="w-100" src="{{asset('theme/images/listings/g1-17.jpg')}}" alt="">
                          <div class="list-meta2">
                            <a href="#"><span class="flaticon-like"></span></a>
                            <a href="#"><span class="flaticon-new-tab"></span></a>
                            <a href="#"><span class="flaticon-fullscreen"></span></a>
                          </div>
                        </div>
                        <div class="list-content">
                          <div class="list-price mb-2">$63,000 / <span>mo</span></div>
                          <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                          <p class="list-text">California City, CA, USA</p>
                          <div class="list-meta d-flex align-items-center">
                            <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                            <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                            <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <div class="listing-style5">
                        <div class="list-thumb">
                          <img class="w-100" src="{{asset('theme/images/listings/g1-10.jpg')}}" alt="">
                          <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                          <div class="list-meta2">
                            <a href="#"><span class="flaticon-like"></span></a>
                            <a href="#"><span class="flaticon-new-tab"></span></a>
                            <a href="#"><span class="flaticon-fullscreen"></span></a>
                          </div>
                        </div>
                        <div class="list-content">
                          <div class="list-price mb-2">$63,000 / <span>mo</span></div>
                          <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                          <p class="list-text">California City, CA, USA</p>
                          <div class="list-meta d-flex align-items-center">
                            <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                            <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                            <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <div class="listing-style5">
                        <div class="list-thumb">
                          <img class="w-100" src="{{asset('theme/images/listings/g1-11.jpg')}}" alt="">
                          <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                          <div class="list-meta2">
                            <a href="#"><span class="flaticon-like"></span></a>
                            <a href="#"><span class="flaticon-new-tab"></span></a>
                            <a href="#"><span class="flaticon-fullscreen"></span></a>
                          </div>
                        </div>
                        <div class="list-content">
                          <div class="list-price mb-2">$14,000 / <span>mo</span></div>
                          <h6 class="list-title"><a href="page-property-single-v1.html">Triple Story House for Rent</a></h6>
                          <p class="list-text">California City, CA, USA</p>
                          <div class="list-meta d-flex align-items-center">
                            <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                            <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                            <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <div class="listing-style5">
                        <div class="list-thumb">
                          <img class="w-100" src="{{asset('theme/images/listings/g1-12.jpg')}}" alt="">
                          <div class="list-meta2">
                            <a href="#"><span class="flaticon-like"></span></a>
                            <a href="#"><span class="flaticon-new-tab"></span></a>
                            <a href="#"><span class="flaticon-fullscreen"></span></a>
                          </div>
                        </div>
                        <div class="list-content">
                          <div class="list-price mb-2">$82,000 / <span>mo</span></div>
                          <h6 class="list-title"><a href="page-property-single-v1.html">Northwest Office Space</a></h6>
                          <p class="list-text">California City, CA, USA</p>
                          <div class="list-meta d-flex align-items-center">
                            <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                            <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                            <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <div class="listing-style5">
                        <div class="list-thumb">
                          <img class="w-100" src="{{asset('theme/images/listings/g1-13.jpg')}}" alt="">
                          <div class="list-meta2">
                            <a href="#"><span class="flaticon-like"></span></a>
                            <a href="#"><span class="flaticon-new-tab"></span></a>
                            <a href="#"><span class="flaticon-fullscreen"></span></a>
                          </div>
                        </div>
                        <div class="list-content">
                          <div class="list-price mb-2">$63,000 / <span>mo</span></div>
                          <h6 class="list-title"><a href="page-property-single-v1.html">Affordable Green Villa House</a></h6>
                          <p class="list-text">California City, CA, USA</p>
                          <div class="list-meta d-flex align-items-center">
                            <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                            <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                            <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <div class="listing-style5">
                        <div class="list-thumb">
                          <img class="w-100" src="{{asset('theme/images/listings/g1-14.jpg')}}" alt="">
                          <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                          <div class="list-meta2">
                            <a href="#"><span class="flaticon-like"></span></a>
                            <a href="#"><span class="flaticon-new-tab"></span></a>
                            <a href="#"><span class="flaticon-fullscreen"></span></a>
                          </div>
                        </div>
                        <div class="list-content">
                          <div class="list-price mb-2">$63,000 / <span>mo</span></div>
                          <h6 class="list-title"><a href="page-property-single-v1.html">Sky Pool Villa House</a></h6>
                          <p class="list-text">California City, CA, USA</p>
                          <div class="list-meta d-flex align-items-center">
                            <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                            <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                            <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="row">
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <div class="listing-style5">
                        <div class="list-thumb">
                          <img class="w-100" src="{{asset('theme/images/listings/g1-15.jpg')}}" alt="">
                          <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                          <div class="list-meta2">
                            <a href="#"><span class="flaticon-like"></span></a>
                            <a href="#"><span class="flaticon-new-tab"></span></a>
                            <a href="#"><span class="flaticon-fullscreen"></span></a>
                          </div>
                        </div>
                        <div class="list-content">
                          <div class="list-price mb-2">$14,000 / <span>mo</span></div>
                          <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h6>
                          <p class="list-text">California City, CA, USA</p>
                          <div class="list-meta d-flex align-items-center">
                            <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                            <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                            <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <div class="listing-style5">
                        <div class="list-thumb">
                          <img class="w-100" src="{{asset('theme/images/listings/g1-16.jpg')}}" alt="">
                          <div class="list-meta2">
                            <a href="#"><span class="flaticon-like"></span></a>
                            <a href="#"><span class="flaticon-new-tab"></span></a>
                            <a href="#"><span class="flaticon-fullscreen"></span></a>
                          </div>
                        </div>
                        <div class="list-content">
                          <div class="list-price mb-2">$82,000 / <span>mo</span></div>
                          <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in Rego Park</a></h6>
                          <p class="list-text">California City, CA, USA</p>
                          <div class="list-meta d-flex align-items-center">
                            <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                            <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                            <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <div class="listing-style5">
                        <div class="list-thumb">
                          <img class="w-100" src="{{asset('theme/images/listings/g1-17.jpg')}}" alt="">
                          <div class="list-meta2">
                            <a href="#"><span class="flaticon-like"></span></a>
                            <a href="#"><span class="flaticon-new-tab"></span></a>
                            <a href="#"><span class="flaticon-fullscreen"></span></a>
                          </div>
                        </div>
                        <div class="list-content">
                          <div class="list-price mb-2">$63,000 / <span>mo</span></div>
                          <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                          <p class="list-text">California City, CA, USA</p>
                          <div class="list-meta d-flex align-items-center">
                            <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                            <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                            <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <div class="listing-style5">
                        <div class="list-thumb">
                          <img class="w-100" src="{{asset('theme/images/listings/g1-10.jpg')}}" alt="">
                          <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                          <div class="list-meta2">
                            <a href="#"><span class="flaticon-like"></span></a>
                            <a href="#"><span class="flaticon-new-tab"></span></a>
                            <a href="#"><span class="flaticon-fullscreen"></span></a>
                          </div>
                        </div>
                        <div class="list-content">
                          <div class="list-price mb-2">$63,000 / <span>mo</span></div>
                          <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                          <p class="list-text">California City, CA, USA</p>
                          <div class="list-meta d-flex align-items-center">
                            <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                            <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                            <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <div class="listing-style5">
                        <div class="list-thumb">
                          <img class="w-100" src="{{asset('theme/images/listings/g1-11.jpg')}}" alt="">
                          <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                          <div class="list-meta2">
                            <a href="#"><span class="flaticon-like"></span></a>
                            <a href="#"><span class="flaticon-new-tab"></span></a>
                            <a href="#"><span class="flaticon-fullscreen"></span></a>
                          </div>
                        </div>
                        <div class="list-content">
                          <div class="list-price mb-2">$14,000 / <span>mo</span></div>
                          <h6 class="list-title"><a href="page-property-single-v1.html">Triple Story House for Rent</a></h6>
                          <p class="list-text">California City, CA, USA</p>
                          <div class="list-meta d-flex align-items-center">
                            <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                            <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                            <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <div class="listing-style5">
                        <div class="list-thumb">
                          <img class="w-100" src="{{asset('theme/images/listings/g1-12.jpg')}}" alt="">
                          <div class="list-meta2">
                            <a href="#"><span class="flaticon-like"></span></a>
                            <a href="#"><span class="flaticon-new-tab"></span></a>
                            <a href="#"><span class="flaticon-fullscreen"></span></a>
                          </div>
                        </div>
                        <div class="list-content">
                          <div class="list-price mb-2">$82,000 / <span>mo</span></div>
                          <h6 class="list-title"><a href="page-property-single-v1.html">Northwest Office Space</a></h6>
                          <p class="list-text">California City, CA, USA</p>
                          <div class="list-meta d-flex align-items-center">
                            <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                            <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                            <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <div class="listing-style5">
                        <div class="list-thumb">
                          <img class="w-100" src="{{asset('theme/images/listings/g1-13.jpg')}}" alt="">
                          <div class="list-meta2">
                            <a href="#"><span class="flaticon-like"></span></a>
                            <a href="#"><span class="flaticon-new-tab"></span></a>
                            <a href="#"><span class="flaticon-fullscreen"></span></a>
                          </div>
                        </div>
                        <div class="list-content">
                          <div class="list-price mb-2">$63,000 / <span>mo</span></div>
                          <h6 class="list-title"><a href="page-property-single-v1.html">Affordable Green Villa House</a></h6>
                          <p class="list-text">California City, CA, USA</p>
                          <div class="list-meta d-flex align-items-center">
                            <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                            <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                            <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <div class="listing-style5">
                        <div class="list-thumb">
                          <img class="w-100" src="{{asset('theme/images/listings/g1-14.jpg')}}" alt="">
                          <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                          <div class="list-meta2">
                            <a href="#"><span class="flaticon-like"></span></a>
                            <a href="#"><span class="flaticon-new-tab"></span></a>
                            <a href="#"><span class="flaticon-fullscreen"></span></a>
                          </div>
                        </div>
                        <div class="list-content">
                          <div class="list-price mb-2">$63,000 / <span>mo</span></div>
                          <h6 class="list-title"><a href="page-property-single-v1.html">Sky Pool Villa House</a></h6>
                          <p class="list-text">California City, CA, USA</p>
                          <div class="list-meta d-flex align-items-center">
                            <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                            <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                            <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Explore Apartment -->
    <section class="pt-0 pb90 pb30-md bgc-f7" >
        <div class="container" style="padding:100px">
          <div class="row align-items-md-center wow fadeInUp" data-wow-delay="00ms">
            <div class="col-lg-9">
              <div class="main-title2">
                <h2 class="title">Properties by Cities</h2>
                <p class="paragraph">Explore Proper from the various cities we have covered</p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="text-start text-lg-end mb-3">
                <a class="ud-btn2" href="#">See All Properties<i class="fal fa-arrow-right-long dark-color"></i></a>
              </div>
            </div>
          </div>
          <div class="row wow fadeInUp" data-wow-delay="300ms">
            <div class="col-sm-6 col-lg-3">
              <a href="page-property-single-v1.html">
                <div class="position-relative mb50 mb20-md d-flex align-items-center">
                  <div class="city-img flex-shrink-0"><img src="{{asset('theme/images/listings/cp-s-1.png')}}" alt=""></div>
                  <div class="flex-shrink-1 ms-3">
                    <h6 class="mb-1">Coimbra</h6>
                    <p class="mb-0">5 Properties</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-lg-3">
              <a href="page-property-single-v1.html">
                <div class="position-relative mb50 mb20-md d-flex align-items-center">
                  <div class="city-img flex-shrink-0"><img src="{{asset('theme/images/listings/cp-s-2.png')}}" alt=""></div>
                  <div class="flex-shrink-1 ms-3">
                    <h6 class="mb-1">Tavira</h6>
                    <p class="mb-0">3 Properties</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-lg-3">
              <a href="page-property-single-v1.html">
                <div class="position-relative mb50 mb20-md d-flex align-items-center">
                  <div class="city-img flex-shrink-0"><img src="{{asset('theme/images/listings/cp-s-3.png')}}" alt=""></div>
                  <div class="flex-shrink-1 ms-3">
                    <h6 class="mb-1">Aveiro</h6>
                    <p class="mb-0">4 Properties</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-lg-3">
              <a href="page-property-single-v1.html">
                <div class="position-relative mb50 mb20-md d-flex align-items-center">
                  <div class="city-img flex-shrink-0"><img src="{{asset('theme/images/listings/cp-s-4.png')}}" alt=""></div>
                  <div class="flex-shrink-1 ms-3">
                    <h6 class="mb-1">Evora</h6>
                    <p class="mb-0">1 Properties</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-lg-3">
              <a href="page-property-single-v1.html">
                <div class="position-relative mb50 mb20-md d-flex align-items-center">
                  <div class="city-img flex-shrink-0"><img src="{{asset('theme/images/listings/cp-s-5.png')}}" alt=""></div>
                  <div class="flex-shrink-1 ms-3">
                    <h6 class="mb-1">Porto</h6>
                    <p class="mb-0">4 Properties</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-lg-3">
              <a href="page-property-single-v1.html">
                <div class="position-relative mb50 mb20-md d-flex align-items-center">
                  <div class="city-img flex-shrink-0"><img src="{{asset('theme/images/listings/cp-s-6.png')}}" alt=""></div>
                  <div class="flex-shrink-1 ms-3">
                    <h6 class="mb-1">Sintra</h6>
                    <p class="mb-0">3 Properties</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-lg-3">
              <a href="page-property-single-v1.html">
                <div class="position-relative mb50 mb20-md d-flex align-items-center">
                  <div class="city-img flex-shrink-0"><img src="{{asset('theme/images/listings/cp-s-7.png')}}" alt=""></div>
                  <div class="flex-shrink-1 ms-3">
                    <h6 class="mb-1">Aveiro</h6>
                    <p class="mb-0">1 Properties</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-lg-3">
              <a href="page-property-single-v1.html">
                <div class="position-relative mb50 mb20-md d-flex align-items-center">
                  <div class="city-img flex-shrink-0"><img src="{{asset('theme/images/listings/cp-s-8.png')}}" alt=""></div>
                  <div class="flex-shrink-1 ms-3">
                    <h6 class="mb-1">Coimbra</h6>
                    <p class="mb-0">2 Properties</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
    </section>




    <!-- Customers Testimonials -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
            <div class="main-title text-center">
              <h2 class="title">Testimonials From Our Customers</h2>
              <p class="paragraph">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="home7-testimonial-slider dots_none slider-1-grid owl-carousel owl-theme">
              <div class="item">
                <div class="row">
                  <div class="col-lg-5 col-xl-4 offset-xl-1">
                    <div class="testimonial-style4-img position-relative">
                      <img src="{{asset('theme/images/about/about-4.jpg')}}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-6">
                    <div class="testimonial-style4 position-relative">
                      <h6 class="sub-title mb25">Perfect Quality</h6>
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="title mb25">“Amazing design, easy to customize and a design quality superlative account on its cloud platform for the optimized performance. And we didn’t on our original designs.”</h4>
                      <h6 class="author fz14">Ritanzel Dion</h6>
                      <p class="desig mb-0">Bank of Baroda</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-lg-5 col-xl-4 offset-xl-1">
                    <div class="testimonial-style4-img position-relative">
                      <img src="{{asset('theme/images/about/about-4.jpg')}}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-6">
                    <div class="testimonial-style4 position-relative">
                      <h6 class="sub-title mb25">Perfect Quality</h6>
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="title mb25">“Amazing design, easy to customize and a design quality superlative account on its cloud platform for the optimized performance. And we didn’t on our original designs.”</h4>
                      <h6 class="author fz14">Dianne Russell</h6>
                      <p class="desig mb-0">Bank of Sydney</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- How We Help -->
    <section class="pb90 pb30-md bgc-thm-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
            <div class="main-title text-center">
              <h2 class="title">See how How It Works</h2>
              <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay="00ms">
            <div class="iconbox-style2 text-center">
              <div class="icon"><img src="{{asset('theme/images/icon/property-buy.svg')}}" alt=""></div>
              <div class="iconbox-content">
                <h4 class="title">Buy a property</h4>
                <p class="text">Nullam sollicitudin blandit eros eu pretium. Nullam maximus ultricies auctor.</p>
                <a href="page-property-single-v1.html" class="ud-btn btn-white2 bdrs0 mb20">Find a home<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
            <div class="iconbox-style2 active text-center">
              <div class="icon"><img src="{{asset('theme/images/icon/property-sell.svg')}}" alt=""></div>
              <div class="iconbox-content">
                <h4 class="title">Sell a property</h4>
                <p class="text">Nullam sollicitudin blandit eros eu pretium. Nullam maximus ultricies auctor.</p>
                <a href="page-property-single-v1.html" class="ud-btn btn-white2 bdrs0 mb20">Place an ad<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
            <div class="iconbox-style2 text-center">
              <div class="icon"><img src="{{asset('theme/images/icon/property-rent.svg')}}" alt=""></div>
              <div class="iconbox-content">
                <h4 class="title">Rent a property</h4>
                <p class="text">Nullam sollicitudin blandit eros eu pretium. Nullam maximus ultricies auctor.</p>
                <a href="page-property-single-v1.html" class="ud-btn btn-white2 bdrs0 mb20">Find a rental<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Inquiry Form -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xl-5 wow fadeInRight" data-wow-delay="00ms">
            <div class="main-title mb40">
              <h2 class="title">Real Estate Inquiry Form</h2>
              <p class="paragraph fz15">Feel Free To Reach Out To Us By Filling This Form</p>
            </div>
            <div class="inquiry-form mb30-md">
              <form class="form-style1">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb20">
                      <label class="form-label fw600 dark-color">Inquiry Type</label>
                      <div class="bootselect-multiselect">
                        <select class="selectpicker" multiple>
                          <option>Apartments</option>
                          <option>Bungalow</option>
                          <option>Houses</option>
                          <option>Loft</option>
                          <option>Office</option>
                          <option>TownHome</option>
                          <option>Villa</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="mb20">
                      <label class="form-label fw600 dark-color">Personel Role</label>
                      <div class="bootselect-multiselect">
                        <select class="selectpicker" multiple>
                          <option>Mr.</option>
                          <option>Mrs.</option>
                          <option>Miss.</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="mb20">
                      <label class="form-label fw600 dark-color">Personel Name</label>
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb20">
                      <label class="form-label fw600 dark-color">Email</label>
                      <input type="email" class="form-control" placeholder="creativelayers088@gmail.com">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb20">
                      <label class="form-label fw600 dark-color">How to address you</label>
                      <div class="bootselect-multiselect">
                        <select class="selectpicker" multiple>
                          <option>Mr.</option>
                          <option>Mrs.</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb20">
                      <label class="form-label fw600 dark-color">Max Price</label>
                      <input type="text" class="form-control" placeholder="$90">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb30">
                      <label class="form-label fw600 dark-color">Min Size (Sq ft)</label>
                      <input type="text" class="form-control" placeholder="20">
                    </div>
                  </div>
                  <div class="d-grid">
                    <button class="ud-btn btn-dark bdrs0">Submit <i class="fal fa-arrow-right-long"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 col-xl-6 offset-xl-1 wow fadeInLeft" data-wow-delay="300ms">
            <div class="inquiry-form">
              <div class="inquiry-img"><img class="w-100" src="{{asset('theme/images/about/about-3.jpg')}}" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our CTA -->
    <section class="our-cta bgc-dark pt90 pb90 pt60-md pb60-md">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-xl-6 wow fadeInLeft">
            <div class="cta-style3">
              <h2 class="cta-title text-white">Become a Real Estate Agent</h2>
              <p class="cta-text mb25 text-white">We only work with the best companies around the globe to survey</p>
              <a href="page-contact.html" class="ud-btn btn-white bdrs0">Register Now <i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
          <div class="col-lg-5 col-xl-4 offset-xl-2 d-none d-lg-block wow fadeIn" data-wow-delay="300ms">
            <div class="cta-img">
              <img src="{{asset('theme/images/about/cta-member-1.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- Explore Apartment -->
     <section class="mb35 mb0-md pb30-md">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="00ms">
              <div class="main-title text-start text-md-center">
                <h2 class="title">From Our Blog</h2>
                <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
              </div>
            </div>
          </div>
          <div class="row wow fadeInUp" data-wow-delay="300ms">
            <div class="col-sm-6 col-lg-4">
              <div class="blog-style1">
                <div class="blog-img"><img class="w-100" src="images/blog/blog-1.jpg" alt=""></div>
                <div class="blog-content">
                  <div class="date">
                    <span class="month">July</span>
                    <span class="day">28</span>
                  </div>
                  <a class="tag" href="#">Living Room</a>
                  <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="blog-style1">
                <div class="blog-img"><img class="w-100" src="images/blog/blog-2.jpg" alt=""></div>
                <div class="blog-content">
                  <div class="date">
                    <span class="month">July</span>
                    <span class="day">28</span>
                  </div>
                  <a class="tag" href="#">Living Room</a>
                  <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="blog-style1">
                <div class="blog-img"><img class="w-100" src="images/blog/blog-3.jpg" alt=""></div>
                <div class="blog-content">
                  <div class="date">
                    <span class="month">July</span>
                    <span class="day">28</span>
                  </div>
                  <a class="tag" href="#">Living Room</a>
                  <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- Our Footer -->
    <section class="footer-style1 at-home4 pt60 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="footer-widget light-style mb-4 mb-lg-5">
              <a class="footer-logo" href="index.html"><img class="mb40" src="{{asset('theme/images/header-logo3.svg')}}" alt=""></a>
              <div class="contact-info mb25">
                <p class="text mb5">Address</p>
                <h6 class="info-phone"><a href="%2b(0)-123-050-945-02.html">Edif. 7 Mares, Av. Dom João II 20 1º, 1990-095 Lisboa, Portugal.</a></h6>
              </div>
              <div class="contact-info mb25">
                <p class="text mb5">Total Free Customer Care</p>
                <h6 class="info-phone"><a href="%2b(0)-123-050-945-02.html">+351 123 050 945 02</a></h6>
              </div>
              <div class="contact-info">
                <p class="text mb5">Nee Live Support?</p>
                <h6 class="info-mail"><a href="mailto:hi@Marlene Real Estate.com">hi@MarleneRealEstate.com</a></h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="footer-widget mb-4 mb-lg-5 ps-0 ps-lg-5">
              <div class="link-style1 light-style mb30">
                <h6 class="mb25">Popular Search</h6>
                <div class="link-list">
                  <a href="#">Apartment for Rent</a>
                  <a href="#">Apartment Low to hide</a>
                  <a href="#">Offices for Buy</a>
                  <a href="#">Offices for Rent</a>
                </div>
              </div>
              <div class="link-style1 light-style mb-4">
                <h6 class="mb20">Discover</h6>
                <ul class="ps-0">
                  <li><a href="#">Porto</a></li>
                  <li><a href="#">Aveiro</a></li>
                  <li><a href="#">Evora</a></li>
                  <li><a href="#">Sintra</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="footer-widget mb-4 mb-lg-5 ps-0 ps-lg-5">
              <div class="link-style1 light-style mb-3">
                <h6 class="mb25">Quick Links</h6>
                <ul class="ps-0">
                  <li><a href="#">Terms of Use</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Pricing Plans</a></li>
                  <li><a href="#">Our Services</a></li>
                  <li><a href="#">Contact Support</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">FAQs</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="footer-widget mb-4 mb-lg-5">
              <div class="mailchimp-widget mb30">
                <h6 class="title mb30">Keep Yourself Up to Date</h6>
                <div class="mailchimp-style1 at-home7 white-version">
                  <input type="email" class="form-control" placeholder="Your Email">
                  <button class="btn" type="submit"><span class="flaticon-send"></span></button>
                </div>
              </div>
              <div class="app-widget at-home7">
                <h5 class="title mb10">Apps</h5>
                <div class="row">
                  <div class="col-auto">
                    <a href="#">
                      <div class="app-info light-style d-flex align-items-center mb10">
                        <div class="flex-shrink-0">
                          <i class="fab fa-apple fz30 text-white"></i>
                        </div>
                        <div class="flex-grow-1 ml20">
                          <p class="app-text fz13 mb0">Download on the</p>
                          <h6 class="app-title text-white fz14">Apple Store</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-auto">
                    <a href="#">
                      <div class="app-info light-style d-flex align-items-center mb10">
                        <div class="flex-shrink-0">
                          <i class="fab fa-google-play fz30 text-white"></i>
                        </div>
                        <div class="flex-grow-1 ml20">
                          <p class="app-text fz13 mb0">Get in on</p>
                          <h6 class="app-title text-white fz14">Google Play</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container gray-bdrt1 py-4">
        <div class="row">
          <div class="col-sm-6">
            <div class="text-center text-lg-start">
              <p class="copyright-text ff-heading mb-0">© Marlene Real Estate - All rights reserved</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="social-widget text-center text-sm-end">
              <div class="social-style1 light-style">
                <a class="me-2 fw600 fz15" href="#">Follow us</a>
                <a href="#"><i class="fab fa-facebook-f list-inline-item"></i></a>
                <a href="#"><i class="fab fa-twitter list-inline-item"></i></a>
                <a href="#"><i class="fab fa-instagram list-inline-item"></i></a>
                <a href="#"><i class="fab fa-linkedin-in list-inline-item"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
  </div>
@endsection
