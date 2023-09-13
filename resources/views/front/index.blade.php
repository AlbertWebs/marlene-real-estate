@extends('front.master')

@section('content')
<div id="page-content">

    <div class="block background-is-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="feature has-icon" data-scroll-reveal="enter left and move 20px">
                        <i class="icon"><img src="{{asset('themes/assets/img/icon-white-shield.png')}}" alt=""></i>
                        <!--end icon-->
                        <div class="description">
                            <h3>ECO Sustainability</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac ornare felis.
                                Nam velit neque, blandit id placerat
                            </p>
                            <a href="#" class="btn btn-default btn-rounded arrow">Read More</a>
                        </div>
                        <!--end description-->
                    </div>
                    <!--end feature-->
                </div>
                <!--end col-md-4-->
                <div class="col-md-4 col-sm-4">
                    <div class="feature has-icon" data-scroll-reveal="enter bottom and move 20px">
                        <i class="icon"><img src="{{asset('themes/assets/img/icon-white-pin.png')}}" alt=""></i>
                        <!--end icon-->
                        <div class="description">
                            <h3>Residential Properties</h3>
                            <p>Mauris ac ornare felis. Nam velit neque, blandit id placerat eu, venenatis at purus.
                                Nunc maximus ultrices lacus
                            </p>
                            <a href="#" class="btn btn-default btn-rounded arrow">Read More</a>
                        </div>
                        <!--end description-->
                    </div>
                    <!--end feature-->
                </div>
                <!--end col-md-4-->
                <div class="col-md-4 col-sm-4">
                    <div class="feature has-icon" data-scroll-reveal="enter right and move 20px">
                        <i class="icon"><img src="{{asset('themes/assets/img/icon-white-wallet.png')}}" alt=""></i>
                        <!--end icon-->
                        <div class="description">
                            <h3>Commercial Properties</h3>
                            <p>Nam velit neque, blandit id placerat eu, venenatis at purus. Nunc maximus ultrices
                                lacus eu fringilla.
                            </p>
                            <a href="#" class="btn btn-default btn-rounded arrow">Read More</a>
                        </div>
                        <!--end description-->
                    </div>
                    <!--end feature-->
                </div>
                <!--end col-md-4-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <div class="background-wrapper">
            <div class="bg-transfer opacity-15">
                <img src="{{asset('themes/assets/img/bg-01.jpg')}}" alt="">
            </div>
            <div class="background-color background-color-black"></div>
        </div>
        <!--end background-wrapper-->
    </div>
    <!--end block-->

    <div class="block" id="about">
        <div class="container">
            <h2>About the Gamping projects</h2>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3>Place where you find yourself</h3>
                    <p>Glamping projects facilitate development of high-quality outdoor accommodations and guest experiences in remote locations at significantly lower cost [and lower environmental impact] which can satisfy consumer desires for authenticity and provide interaction with local communities which are not found within traditional resorts.

                    </p>
                    <p>Glamping projects facilitate development of high-quality outdoor accommodations and guest experiences in remote locations at significantly lower cost [and lower environmental impact] which can satisfy consumer desires for authenticity and provide interaction with local communities which are not found within traditional resorts.

                    </p>
                    {{-- <ul class="check-marks">
                        <li>Quite and peaceful location near the nature</li>
                        <li>Shopping and fitness center right inside the complex</li>
                        <li>Lot of parking places, even for your visitors</li>
                        <li>Many play areas for your kids</li>
                    </ul> --}}
                    <!--end ul-->
                </div>
                <!--end col-md-6-->
                <!--end col-md-6-->
                <div class="col-md-6 col-sm-6">
                    <h3>Video presentation</h3>
                    <a href="http://vimeo.com/24506451" class="video-player video-popup" data-scroll-reveal="enter bottom and move 50px">
                        <i class="play-icon arrow_triangle-right"></i>
                        <div class="has-overlay">
                            <img src="{{url('uploads/unnamed.jpg')}}" alt="">
                        </div>
                    </a>
                    <figure class="note">Let’s check the benefits of this project from the architect</figure>
                    <!--end video-player-->
                </div>
                <!--end col-md-6-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <div class="background-wrapper">
            <div class="background-color background-color-black opacity-5"></div>
        </div>
        <!--end background-wrapper-->
    </div>
    <!--end block-->

    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3">
                    <div class="stage completed" data-scroll-reveal="enter left and move 20px">
                        <div class="icon">
                            <i class="fa fa-file-pdf-o"></i>
                        </div>
                        <!--end icon-->
                            <a href="{{url('/')}}/uploads/dummy.pdf" download="Santana & Partners Commercial Fair">
                            <div class="description">
                                <h3>Project 1</h3>
                                <h2>Santana & Partners Commercial Fair</h2>
                                <figure>Completed</figure>
                            </div>
                            </a>
                        <!--end description-->
                    </div>
                    <!--end stage-->
                </div>
                <!--end col-md-3-->
                <div class="col-md-4 col-sm-3">
                    <div class="stage completed" data-scroll-reveal="enter left and move 20px after 0.2s">
                        <div class="icon">
                            <i class="fa fa-file-pdf-o"></i>
                        </div>
                        <!--end icon-->
                        <a href="{{url('/')}}/uploads/dummy.pdf" download="Santana & Partners Residential Fair">
                        <div class="description">
                            <h3>Project 2</h3>
                            <h2>Santana & Partners Residential Fair</h2>
                            <figure>Completed</figure>
                        </div>
                        </a>
                        <!--end description-->
                    </div>
                    <!--end stage-->
                </div>
                <!--end col-md-3-->
                <div class="col-md-4 col-sm-3">
                    <div class="stage in-progress" data-scroll-reveal="enter left and move 20px after 0.4s">
                        <div class="icon">
                            <i class="fa fa-file-pdf-o"></i>
                        </div>
                        <!--end icon-->
                        <a href="{{url('/')}}/uploads/dummy.pdf" download="Santana & Partners Villas Fair">
                        <div class="description">
                            <h3>Project 3</h3>
                            <h2>Santana & Partners Villas Fair</h2>
                            <figure>In progress</figure>
                        </div>
                        </a>
                        <!--end description-->
                    </div>
                    <!--end stage-->
                </div>
                <!--end col-md-3-->
                {{-- <div class="col-md-3 col-sm-3">
                    <div class="stage not-completed" data-scroll-reveal="enter left and move 20px after 0.6s">
                        <div class="icon">
                            <i class="icon_close"></i>
                        </div>
                        <!--end icon-->
                        <div class="description">
                            <h3>4. Stage</h3>
                            <h2>Project done</h2>
                            <figure>Not completed</figure>
                        </div>
                        <!--end description-->
                    </div>
                    <!--end stage-->
                </div> --}}
                <!--end col-md-3-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>
    <!--end block-->

    <div class="block">
        <div class="container">
            <div class="detail left-align">
                <div class="title">
                    <h3 class="framed">Architecture & Design</h3>
                </div>
                <!--end title-->
                <div class="row">
                    <div class="col-md-7 col-sm-7">
                        <div class="gallery" data-scroll-reveal="enter left and move 20px after">
                            <div class="owl-carousel one-item-carousel" data-owl-items="1" data-owl-margin="0" data-owl-nav="0" data-owl-dots="1">
                                <img style="min-height:300px;" src="{{asset('uploads/2-galeria-3.jpg')}}" alt="">
                                <img style="min-height:300px;" src="{{asset('uploads/3-galeria-3.jpg')}}" alt="">
                                <img style="min-height:300px;" src="{{asset('uploads/4-galeria-4.jpg')}}" alt="">
                            </div>
                        </div>
                        <!--end gallery-->
                    </div>
                    <!--end col-md-7-->
                    <div class="col-md-5 col-sm-5">
                        <div class="description" data-scroll-reveal="enter right and move 20px">
                            <h4>High quality materials</h4>
                            <p>Proin orci nisl, posuere viverra erat ut, pellentesque interdum urna. Curabitur
                                eu risus convallis, auctor augue id, pharetra neque. Morbi pretium neque ac varius
                                imperdiet. Aliquam sed sapien eget massa hendrerit aliquet. Integer auctor vel
                                ligula eget faucibus
                            </p>
                            <h4>Soundproof rooms</h4>
                            <p>Donec tincidunt fermentum purus, eu pharetra arcu scelerisque a. Maecenas felis eros,
                                volutpat ac justo non, imperdiet porttitor lorem. Nulla suscipit mi a arcu sollicitudin,
                                sit amet
                            </p>
                        </div>
                        <!--end description-->
                    </div>
                    <!--end col-md-5-->
                </div>
                <!--end row-->
            </div>
            <!--end detail-->
            <div class="detail right-align">
                <div class="title">
                    <h3 class="framed">Warm & Cozy Interior</h3>
                </div>
                <!--end title-->
                <div class="row">
                    <div class="col-md-5 col-sm-5">
                        <div class="description" data-scroll-reveal="enter left and move 20px after">
                            <h4>Feel your new home</h4>
                            <p>Proin orci nisl, posuere viverra erat ut, pellentesque interdum urna. Curabitur
                                eu risus convallis, auctor augue id, pharetra neque. Morbi pretium neque ac varius
                                imperdiet. Aliquam sed sapien eget massa hendrerit aliquet. Integer auctor vel
                                ligula eget faucibus. Donec tincidunt fermentum purus, eu pharetra arcu scelerisque a.
                                Maecenas felis eros, volutpat ac justo non, imperdiet porttitor
                            </p>
                        </div>
                        <!--end description-->
                    </div>
                    <!--end col-md-5-->
                    <div class="col-md-7 col-sm-7">
                        <div class="gallery" data-scroll-reveal="enter right and move 20px">
                            <div class="owl-carousel one-item-carousel" data-owl-items="1" data-owl-margin="0" data-owl-nav="0" data-owl-dots="1">
                                <img src="{{asset('themes/assets/img/gallery-02.jpg')}}" alt="">
                                <img src="{{asset('themes/assets/img/gallery-01.jpg')}}" alt="">
                                <img src="{{asset('themes/assets/img/image-video.jpg')}}" alt="">
                            </div>
                        </div>
                        <!--end gallery-->
                    </div>
                    <!--end col-md-7-->
                </div>
                <!--end row-->
            </div>
            <!--end detail-->
        </div>
        <!--end container-->
    </div>
    <!--end block-->

    <div class="block" id="gallery">
        <div class="container">
            <h2>Popular Properties.</h2>
        </div>
        <div class="owl-carousel big-gallery" data-owl-items="3" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="0" data-owl-center="1" data-owl-loop="1" data-owl-nav-container="#big-gallery-nav">
            <div class="slide">
                <div class="container">
                    <img src="{{asset('themes/assets/img/gallery-big-01.jpg')}}" alt="">
                    <div class="description">
                        <h3 class="framed">Front View</h3>
                    </div>
                </div>
                <!--end container-->
            </div>
            <!--end slide-->
            <div class="slide">
                <div class="container">
                    <img src="{{asset('themes/assets/img/gallery-big-02.jpg')}}" alt="">
                    <div class="description">
                        <h3 class="framed">Garage</h3>
                    </div>
                </div>
                <!--end container-->
            </div>
            <!--end slide-->
            <div class="slide">
                <div class="container">
                    <img src="{{asset('themes/assets/img/gallery-big-03.jpg')}}" alt="">
                    <div class="description">
                        <h3 class="framed">Back View</h3>
                    </div>
                </div>
                <!--end container-->
            </div>
            <!--end slide-->
        </div>
        <!--end big-gallery-->
        <div class="container">
            <div class="owl-nav-wrapper">
                <div class="owl-nav" id="big-gallery-nav"></div>
            </div>
            <!--end owl-nav-wrapper-->
        </div>
        <!--end container-->
    </div>
    <!--end block-->






    <div class="block" id="contact">
        <div class="container">
            <h2>Contact.</h2>
            <div class="contact map">
                <div class="row">
                    <div class="col-md-6 col-sm-6"  data-scroll-reveal="enter bottom and move 20px">
                        <h3>Map</h3>
                        <div class="map" id="map"></div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <h3>Address</h3>
                                <address>
                                    Your Company<br>
                                    4877 Spruce Drive<br>
                                    West Sample, PA 1625<br>
                                    <br>
                                    +351 932 239 257<br>
                                    <a href="#">hello@example.com</a>
                                </address>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <h3>Social</h3>
                                <div class="social">
                                    <a href="#" class="roll-effect"><i class="social_facebook_circle"></i>Facebook</a>
                                    <a href="#"><i class="social_twitter_circle"></i>Twitter</a>
                                    <a href="#"><i class="social_instagram_circle"></i>Instagram</a>
                                    <a href="#"><i class="social_skype_circle"></i>Skype</a>
                                </div>
                                <!--end social-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6" data-scroll-reveal="enter top and move 20px">
                        <h3>Contact form</h3>
                        <form id="form-contact" method="post" class="clearfix inputs-underline">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Your Name" required>
                                    </div>
                                    <!--end form-group -->
                                </div>
                                <!--end col-md-6 col-sm-6 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="Your Email" required>
                                    </div>
                                    <!--end form-group -->
                                </div>
                                <!--end col-md-6 col-sm-6 -->
                            </div>
                            <!--end row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="form-contact-message" rows="8" name="message" placeholder="Your Message" required></textarea>
                                    </div>
                                    <!--end form-group -->
                                </div>
                                <!--end col-md-12 -->
                            </div>
                            <!--end row -->
                            <div class="form-group clearfix">
                                <button type="submit" class="btn pull-right btn-primary btn-rounded" id="form-contact-submit">Send a Message</button>
                            </div>
                            <!--end form-group -->
                            <div id="form-contact-status"></div>
                        </form>
                        <!--end form-contact -->
                    </div>
                    <!--end col-md-6-->
                </div>
                <!--end row-->
            </div>
            <!--end contact map-->
        </div>
        <!--end container-->
    </div>
    <!--end block-->

    <div class="container">
        <hr>
    </div>
    <!--end container-->



</div>
@endsection
