@extends('front.master')

@section('content')
<div class="body_content">
    <!-- Home Banner Style V1 -->
    <section class="home-banner-style3 p0">
        <div class="home-style3">
          <div class="container">
            <div class="row">
              <div class="col-xl-8">
                <div class="inner-banner-style3">
                  <h2 class="hero-title mb30 animate-up-1">Find The Perfect Place for your Real Estate Needs</h2>
                  <div class="advance-style3 mb30 mx-auto animate-up-2">
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
                        <div class="advance-content-style3">
                          <div class="row">
                            <div class="col-md-5 col-lg-4">
                              <div class="advance-search-field position-relative text-start">
                                <form action="#" method="get" class="form-search position-relative" accept-charset="utf-8">
                                  <div class="box-search">
                                    <span class="icon flaticon-home-1"></span>
                                    <input class="form-control bgc-f7" type="text" name="search" placeholder="Enter Keyword">
                                  </div>
                                </form>
                              </div>
                            </div>
                            <div class="col-md-3 col-lg-4">
                              <div class="mt-3 mt-md-0">
                                <div class="bootselect-multiselect">
                                  <select class="selectpicker">
                                    <option>type</option>
                                    <option value="Apartments">Apartments</option>
                                    <option value="Bungalow">Bungalow</option>
                                    <option value="Houses">Houses</option>
                                    <option value="Loft">Loft</option>
                                    <option value="Office">Office</option>
                                    <option value="TownHome">TownHome</option>
                                    <option value="Villa">Villa</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4 pe-0">
                              <div class="d-flex align-items-center justify-content-start justify-content-md-center mt-2 mt-md-0">
                                <button class="advance-search-btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="flaticon-settings"></span> Advanced</button>
                                <button class="advance-search-icon ud-btn btn-thm ms-4" type="button"><span class="flaticon-search"></span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="advance-content-style3">
                          <div class="row">
                            <div class="col-md-5 col-lg-4">
                              <div class="advance-search-field position-relative text-start">
                                <form action="#" method="get" class="form-search position-relative" accept-charset="utf-8">
                                  <div class="box-search">
                                    <span class="icon flaticon-home-1"></span>
                                    <input class="form-control bgc-f7" type="text" name="search" placeholder="Enter Keyword">
                                  </div>
                                </form>
                              </div>
                            </div>
                            <div class="col-md-3 col-lg-4">
                              <div class="mt-3 mt-md-0">
                                <div class="bootselect-multiselect">
                                  <select class="selectpicker">
                                    <option>type</option>
                                    <option value="Apartments">Apartments</option>
                                    <option value="Bungalow">Bungalow</option>
                                    <option value="Houses">Houses</option>
                                    <option value="Loft">Loft</option>
                                    <option value="Office">Office</option>
                                    <option value="TownHome">TownHome</option>
                                    <option value="Villa">Villa</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4 pe-0">
                              <div class="d-flex align-items-center justify-content-start justify-content-md-center mt-2 mt-md-0">
                                <button class="advance-search-btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="flaticon-settings"></span> Advanced</button>
                                <button class="advance-search-icon ud-btn btn-thm ms-4" type="button"><span class="flaticon-search"></span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="advance-content-style3">
                          <div class="row">
                            <div class="col-md-5 col-lg-4">
                              <div class="advance-search-field position-relative text-start">
                                <form action="#" method="get" class="form-search position-relative" accept-charset="utf-8">
                                  <div class="box-search">
                                    <span class="icon flaticon-home-1"></span>
                                    <input class="form-control bgc-f7" type="text" name="search" placeholder="Enter Keyword">
                                  </div>
                                </form>
                              </div>
                            </div>
                            <div class="col-md-3 col-lg-4">
                              <div class="mt-3 mt-md-0">
                                <div class="bootselect-multiselect">
                                  <select class="selectpicker">
                                    <option>type</option>
                                    <option value="Apartments">Apartments</option>
                                    <option value="Bungalow">Bungalow</option>
                                    <option value="Houses">Houses</option>
                                    <option value="Loft">Loft</option>
                                    <option value="Office">Office</option>
                                    <option value="TownHome">TownHome</option>
                                    <option value="Villa">Villa</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4 pe-0">
                              <div class="d-flex align-items-center justify-content-start justify-content-md-center mt-2 mt-md-0">
                                <button class="advance-search-btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="flaticon-settings"></span> Advanced</button>
                                <button class="advance-search-icon ud-btn btn-thm ms-4" type="button"><span class="flaticon-search"></span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-block d-md-flex animate-up-3">
                    <p class="hero-text fz15 me-2">Popular Searches:</p>
                    <a href="#"> House,</a>
                    <a href="#"> Apartments,</a>
                    <a href="#"> Office,</a>
                    <a href="#"> Villa,</a>
                    <a href="#"> Bungalow</a>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 d-none d-xl-block">
                <div class="home3-img-box1">
                  <img class="img-1 imageClass" src="{{asset('theme/images/about/about-3.png')}}" alt="">
                  <img class="img-2 spin-right" src="{{asset('theme/images/about/element-3.png')}}" alt="">
                  <img class="img-3 spin-right" src="{{asset('theme/images/about/element-3.png')}}" alt="">
                  {{-- <img class="img-4 default-box-shadow1 bounce-y" src="{{asset('theme/images/about/about-1.png')}}" alt=""> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>


        {{--  --}}
        <section class="pt60 pb90 bgc-f7s">
            <div class="container">
                <div class="row mb30 mt30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="row">
                        <div class="col-lg-6">
                          <div class="main-title wow fadeInUp" data-wow-delay="100ms">
                            <h2 class="title">Properties & Investment</h2>
                            <p class="paragraph">
                              Real Estate Properties / Commercial Properties / Guaranteed Return Investments
                            </p>
                          </div>
                        </div>
                      </div>
                <div class="row">
                    <div class="col-lg-3">
                        {{--  --}}
                        <div class="ps-widget bdrb1 pb30 mb30 overflow-hidden position-relative">
                            <h4 class="title fz17 mb30">Some Text Goes here</h4>
                            <p class="text mb10">This 3-bed with a loft, 2-bath home in the gated community of The Hideout has it all. From the open floor plan to the abundance of light from the windows, this home is perfect for entertaining. The living room and dining room have vaulted ceilings and a beautiful fireplace. You will love spending time on the deck taking in the beautiful views. In the kitchen, you'll find stainless steel appliances and a tile backsplash, as well as a breakfast bar.</p>
                            <p class="text mb10">This 3-bed with a loft, 2-bath home in the gated community of The Hideout has it all. From the open floor plan to the abundance of light from the windows, this home is perfect for entertaining. The living room and dining room have vaulted ceilings and a beautiful fireplace. You will love spending time on the deck taking in the beautiful views. In the kitchen, you'll find stainless steel appliances and a tile backsplash, as well as a breakfast bar.</p>
                            <p class="text mb10">
                                This 3-bed with a loft, 2-bath home in the gated community of The Hideout has it all.
                                From the open floor plan to the abundance of light from the windows, this home is perfect for entertaining.
                                The living room and dining room have vaulted ceilings and a beautiful fireplace.

                            </p>
                            <div class="agent-single-accordion">
                              <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
                                    <div class="accordion-body p-0"><p class="text">Placeholder content for this accordion, which is intended to demonstrate the class. This is the first item's accordion body you get groundbreaking performance and amazing battery life. Add to that a stunning Liquid Retina XDR display, the best camera and audio ever in a Mac notebook, and all the ports you need.</p></div>
                                  </div>
                                  <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Show more</button>
                                  </h2>
                                </div>
                              </div>
                            </div>

                          </div>
                        {{--  --}}
                    </div>
                    <div class="col-lg-9">
                        <div class="col-sm-">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 ps-sm-0">
                                    <div class="sp-img-content">
                                    <a class="popup-img preview-img-3 sp-img mb10 img-border-radius" href="{{asset('theme/images/listings/listing-single-2.jpg')}}">
                                        <img class="w-100 img-border-radius imageClass" src="{{asset('theme/images/listings/listing-single-2.jpg')}}" alt="2.jpg')}}">
                                    </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 ps-sm-0">
                                    <div class="sp-img-content">
                                    <a class="popup-img preview-img-3 sp-img mb10 img-border-radius" href="{{asset('theme/images/listings/listing-single-3.jpg')}}">
                                        <img class="w-100 img-border-radius imageClass" src="{{asset('theme/images/listings/listing-single-3.jpg')}}" alt="3.jpg')}}">
                                    </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 ps-sm-0">
                                    <div class="sp-img-content">
                                    <a class="popup-img preview-img-3 sp-img img-border-radius" href="{{asset('theme/images/listings/listing-single-4.jpg')}}">
                                        <img class="w-100 img-border-radius imageClass" src="{{asset('theme/images/listings/listing-single-4.jpg')}}" alt="4.jpg')}}">
                                    </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 ps-sm-0">
                                    <div class="sp-img-content">
                                        <a class="popup-img preview-img-3 sp-img img-border-radius" href="{{asset('theme/images/listings/listing-single-4.jpg')}}">
                                        <img class="w-100 img-border-radius imageClass" src="{{asset('theme/images/listings/listing-single-4.jpg')}}" alt="4.jpg')}}">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 ps-sm-0">
                                    <div class="sp-img-content">
                                        <a class="popup-img preview-img-3 sp-img img-border-radius" href="{{asset('theme/images/listings/listing-single-4.jpg')}}">
                                        <img class="w-100 img-border-radius imageClass" src="{{asset('theme/images/listings/listing-single-4.jpg')}}" alt="4.jpg')}}">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 ps-sm-0">
                                    <div class="sp-img-content">
                                    <a class="popup-img preview-img-3 sp-img img-border-radius" href="{{asset('theme/images/listings/listing-single-5.jpg')}}">
                                        <img class="w-100 img-border-radius imageClass" src="{{asset('theme/images/listings/listing-single-5.jpg')}}" alt="5.jpg')}}">
                                    </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 ps-sm-0">
                                    <div class="sp-img-content">
                                    <a class="popup-img preview-img-3 sp-img img-border-radius" href="{{asset('theme/images/listings/listing-single-5.jpg')}}">
                                        <img class="w-100 img-border-radius imageClass" src="{{asset('theme/images/listings/listing-single-5.jpg')}}" alt="5.jpg')}}">
                                    </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 ps-sm-0">
                                    <div class="sp-img-content">
                                        <a class="popup-img preview-img-3 sp-img img-border-radius" href="{{asset('theme/images/listings/listing-single-4.jpg')}}">
                                        <img class="w-100 img-border-radius imageClass" src="{{asset('theme/images/listings/listing-single-4.jpg')}}" alt="4.jpg')}}">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 ps-sm-0">
                                    <div class="sp-img-content">
                                        <a class="popup-img preview-img-3 sp-img img-border-radius" href="{{asset('theme/images/listings/listing-single-4.jpg')}}">
                                        <img class="w-100 img-border-radius imageClass" src="{{asset('theme/images/listings/listing-single-4.jpg')}}" alt="4.jpg')}}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--  --}}


      <!-- Featured homes -->


    {{-- <section class="pt-0 pb90 pb30-md bgc-white" style="margin-top:100px">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="main-title wow fadeInUp" data-wow-delay="100ms">
              <h2 class="title">Properties & Investment</h2>
              <p class="paragraph">
                Real Estate Properties / Commercial Properties / Guaranteed Return Investments
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="explore-apartment-5col-slider navi_pagi_top_right slider-4-grid owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">

              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="apartment-style2 text-center mb30">
                    <div class="apartment-img"><img class="imageClass" src="{{asset('theme/images/pexels-expect-best-323780.jpg')}}" alt=""></div>
                    <div class="apartment-content">
                      <h6 class="title mb-0">Houses</h6>
                      <p class="text mb-0">8 Properties</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="apartment-style2 text-center mb30">
                    <div class="apartment-img"><img class="imageClass" src="{{asset('theme/images/pexels-mikhail-konetski-12127434.jpg')}}" alt=""></div>
                    <div class="apartment-content">
                      <h6 class="title mb-0">Stores</h6>
                      <p class="text mb-0">2 Properties</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="apartment-style2 text-center mb30">
                    <div class="apartment-img"><img class="imageClass" src="{{asset('theme/images/pexels-pixabay-261102.jpg')}}" alt=""></div>
                    <div class="apartment-content">
                      <h6 class="title mb-0"> Hotels</h6>
                      <p class="text mb-0">1 Propertie(s)</p>
                    </div>
                  </div>
                </a>
              </div>


            </div>
          </div>
        </div>
      </div>
    </section> --}}

    <!-- Popular Property -->
    <section class="pb90 pb30-md pt-0">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="00ms">
          <div class="col-lg-9">
            <div class="main-title2">
              <h2 class="title">Discover Popular Properties</h2>
              {{-- <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p> --}}
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
                  <div class="col-lg-12 col-sm-12  col-xl-12">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12  col-xl-6">
                            <div class="listing-style5">
                            <div class="list-thumb">
                                <img class="w-100 imageClass image-border" src="{{asset('theme/images/listings/g1-15.jpg')}}" alt="">
                                <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>Rent</div>
                                <div class="list-meta2">
                                <a href="#"><span class="flaticon-like"></span></a>
                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                </div>
                            </div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12  col-xl-6">
                            <div class="listing-style5">
                                <div class="list-content">
                                    <div class="ui-content mt40 mb60">
                                        <h4 class="mb10">Property Title and Description</h4>
                                        <p class="mb25 ff-heading">It doesn’t matter how organized you are — a surplus of toys will always ensure your house is a mess waiting to happen. Fortunately, getting kids on board with the idea of ditching their stuff is a lot easier than it sounds.</p>
                                        <p class="ff-heading">The trick is to make it an opportunity for them to define themselves and their interests. Encourage kids to make a pile of ”baby toys” to donate, and have them set aside any toys that no longer interest them, such as action figures from a forgotten TV show. Separating these toys will help them appreciate how much they’ve grown and rediscover the toys they love.</p>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--  --}}
                    {{-- <hr> --}}

                    <div class="row">
                        <div class="col-lg-6 col-sm-12  col-xl-6">
                            <div class="listing-style5">
                                <div class="list-content">
                                    <div class="ui-content mt40 mb60">
                                        <h4 class="mb10">Property Title and Description</h4>
                                        <p class="mb25 ff-heading">It doesn’t matter how organized you are — a surplus of toys will always ensure your house is a mess waiting to happen. Fortunately, getting kids on board with the idea of ditching their stuff is a lot easier than it sounds.</p>
                                        <p class="ff-heading">The trick is to make it an opportunity for them to define themselves and their interests. Encourage kids to make a pile of ”baby toys” to donate, and have them set aside any toys that no longer interest them, such as action figures from a forgotten TV show. Separating these toys will help them appreciate how much they’ve grown and rediscover the toys they love.</p>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12  col-xl-6">
                            <div class="listing-style5">
                            <div class="list-thumb">
                                <img class="w-100 imageClass image-border" src="{{asset('theme/images/listings/g1-15.jpg')}}" alt="">
                                <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>Rent</div>
                                <div class="list-meta2">
                                <a href="#"><span class="flaticon-like"></span></a>
                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="row">
                        <div class="col-lg-6 col-sm-12  col-xl-6">
                            <div class="listing-style5">
                            <div class="list-thumb">
                                <img class="w-100 imageClass image-border" src="{{asset('theme/images/listings/g1-15.jpg')}}" alt="">
                                <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>Rent</div>
                                <div class="list-meta2">
                                <a href="#"><span class="flaticon-like"></span></a>
                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                </div>
                            </div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12  col-xl-6">
                            <div class="listing-style5">
                                <div class="list-content">
                                    <div class="ui-content mt40 mb60">
                                        <h4 class="mb10">Property Title and Description</h4>
                                        <p class="mb25 ff-heading">It doesn’t matter how organized you are — a surplus of toys will always ensure your house is a mess waiting to happen. Fortunately, getting kids on board with the idea of ditching their stuff is a lot easier than it sounds.</p>
                                        <p class="ff-heading">The trick is to make it an opportunity for them to define themselves and their interests. Encourage kids to make a pile of ”baby toys” to donate, and have them set aside any toys that no longer interest them, such as action figures from a forgotten TV show. Separating these toys will help them appreciate how much they’ve grown and rediscover the toys they love.</p>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--  --}}
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-lg-12 col-sm-12  col-xl-12">
                      <div class="row">
                          <div class="col-lg-6 col-sm-12  col-xl-6">
                              <div class="listing-style5">
                              <div class="list-thumb">
                                  <img class="w-100 imageClass" src="{{asset('theme/images/listings/g1-15.jpg')}}" alt="">
                                  <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>Rent</div>
                                  <div class="list-meta2">
                                  <a href="#"><span class="flaticon-like"></span></a>
                                  <a href="#"><span class="flaticon-new-tab"></span></a>
                                  <a href="#"><span class="flaticon-fullscreen"></span></a>
                                  </div>
                              </div>

                              </div>
                          </div>
                          <div class="col-lg-6 col-sm-12  col-xl-6">
                              <div class="listing-style5">
                                  <div class="list-content">
                                      <div class="ui-content mt40 mb60">
                                          <h4 class="mb10">Property Title and Description</h4>
                                          <p class="mb25 ff-heading">It doesn’t matter how organized you are — a surplus of toys will always ensure your house is a mess waiting to happen. Fortunately, getting kids on board with the idea of ditching their stuff is a lot easier than it sounds.</p>
                                          <p class="ff-heading">The trick is to make it an opportunity for them to define themselves and their interests. Encourage kids to make a pile of ”baby toys” to donate, and have them set aside any toys that no longer interest them, such as action figures from a forgotten TV show. Separating these toys will help them appreciate how much they’ve grown and rediscover the toys they love.</p>
                                        </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                      {{--  --}}
                      <hr>

                      <div class="row">
                          <div class="col-lg-6 col-sm-12  col-xl-6">
                              <div class="listing-style5">
                                  <div class="list-content">
                                      <div class="ui-content mt40 mb60">
                                          <h4 class="mb10">Property Title and Description</h4>
                                          <p class="mb25 ff-heading">It doesn’t matter how organized you are — a surplus of toys will always ensure your house is a mess waiting to happen. Fortunately, getting kids on board with the idea of ditching their stuff is a lot easier than it sounds.</p>
                                          <p class="ff-heading">The trick is to make it an opportunity for them to define themselves and their interests. Encourage kids to make a pile of ”baby toys” to donate, and have them set aside any toys that no longer interest them, such as action figures from a forgotten TV show. Separating these toys will help them appreciate how much they’ve grown and rediscover the toys they love.</p>
                                        </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6 col-sm-12  col-xl-6">
                              <div class="listing-style5">
                              <div class="list-thumb">
                                  <img class="w-100 imageClass" src="{{asset('theme/images/listings/g1-15.jpg')}}" alt="">
                                  <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>Rent</div>
                                  <div class="list-meta2">
                                  <a href="#"><span class="flaticon-like"></span></a>
                                  <a href="#"><span class="flaticon-new-tab"></span></a>
                                  <a href="#"><span class="flaticon-fullscreen"></span></a>
                                  </div>
                              </div>

                              </div>
                          </div>
                      </div>
                      {{--  --}}
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="p-0">
      <div class="container p-0">
          {{--  --}}
              <div class="container">
                  <div class="row wow fadeInUp" data-wow-delay="00ms">
                      <div class="col-lg-9">
                        <div class="main-title2">
                          <h2 class="title">Discover Popular Cities</h2>
                          {{-- <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p> --}}
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="dark-light-navtab style2 text-start text-lg-end mt-0 mt-lg-4 mb-4">
                          <ul class="nav nav-pills justify-content-start justify-content-lg-end" id="pills-tab" role="tablist">
                            {{-- <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">For Rent</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link me-0" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">For Sale</button>
                            </li> --}}
                          </ul>
                        </div>
                      </div>
                    </div>
              </div>
          {{--  --}}
        <div class="row">
          <div class="col-lg-12">
            <div class="home10-map" id="map" data-map-zoom="7" data-map-scroll="true"></div>
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
              <div class="inquiry-img imageClass"><img class="w-100" src="{{asset('theme/images/about/about-3.jpg')}}" alt=""></div>
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
              <h6 class="mb25">About Us</h6>
              <div class="contact-info mb25">
                <p class="text mb5">Address</p>
                <h6 class="info-phone"><a href="%2b(0)-123-050-945-02.html">Edif. 7 Mares, Av. Dom João II 20 1º, 1990-095 Lisboa, Portugal.</a></h6>
              </div>
              <div class="contact-info mb25">
                <p class="text mb5">Total Free Customer Care</p>
                <h6 class="info-phone"><a href="%2b(0)-123-050-945-02.html">+351 123 050 945 02</a></h6>
              </div>
              <div class="contact-info">
                <p class="text mb5">Live Support?</p>
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
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="footer-widget mb-4 mb-lg-5 ps-0 ps-lg-5">
              <div class="link-style1 light-style mb-3">
                <h6 class="mb25">Quick Links</h6>
                <ul class="ps-0">
                  <li><a href="#">Terms of Use</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Our Services</a></li>
                  <li><a href="#">Contact Support</a></li>
                  <li><a href="#">Careers</a></li>

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
                <h5 class="title mb10">Cities</h5>
                <div class="row">
                  <div class="col-sm-6 col-lg-3">
                    {{--  --}}
                    <div class="link-style1 light-style mb-4">
                        <ul class="ps-0">
                            <li><a href="#">Evora</a></li>
                            <li><a href="#">Sintra</a></li>
                        </ul>
                    </div>
                    {{--  --}}
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    {{--  --}}
                    <div class="link-style1 light-style mb-4">
                        <ul class="ps-0">
                            <li><a href="#">Porto</a></li>
                            <li><a href="#">Aveiro</a></li>
                        </ul>
                    </div>
                    {{--  --}}
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    {{--  --}}
                    <div class="link-style1 light-style mb-4">
                        <ul class="ps-0">
                            <li><a href="#">Evora</a></li>
                            <li><a href="#">Sintra</a></li>
                        </ul>
                    </div>
                    {{--  --}}
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
              <p class="copyright-text ff-heading mb-0">Copyright © Marlene Real Estate {{date('Y')}} - All rights reserved</p>
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
