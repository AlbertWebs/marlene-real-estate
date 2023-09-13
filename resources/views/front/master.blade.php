<!DOCTYPE html>

<html lang="en-US">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href="{{asset('themes/assets/fonts/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('themes/assets/fonts/elegant-fonts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('themes/assets/fonts.googleapis.com/csse3e5.css?family=Montserrat:400,700')}}" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('themes/assets/bootstrap/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('themes/assets/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('themes/assets/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('themes/assets/css/style.css')}}" type="text/css">

    <title>Propper - Architecture & Real Estate Onepage Landing page HTML Template</title>

</head>

<body class="has-loading-screen links-hover-effect" data-spy="scroll" data-target=".navigation">

<div class="page-wrapper" id="page-top">
    <header id="page-header">
        <nav class="navigation background-is-dark">
            <div class="container">
                <div class="wrapper">
                    <div class="left">
                        <a href="index-v1.html" class="brand"><img style="max-width:200px" src="{{asset('uploads/logo.png')}}" alt=""></a>
                    </div>
                    <!--end left-->
                    <div class="right">
                        <ul class="nav navigation-links animate">
                            <li><a href="#page-top" class="scroll">Home</a></li>
                            <li><a href="#about" class="scroll"> ECO Sustainability</a></li>
                            <li><a href="#gallery" class="scroll">Residential properties</a></li>
                            <li><a href="#pricing" class="scroll">Commercial properties</a></li>
                            <li><a href="#contact" class="scroll">Contact</a></li>
                        </ul>
                        <div class="nav-btn">
                            <figure></figure>
                            <figure></figure>
                            <figure></figure>
                        </div>
                    </div>
                    <!--end right-->
                </div>
            </div>
            <!--end container-->
        </nav>
        <!--end navigation-->
        <div class="hero-section background-is-dark">
            <div class="wrapper">
                <div class="hero-title">
                    <div class="container">
                        <h1 class="animate">Get Ready.
                            {{-- <br>We're finishing! --}}
                        </h1>
                        <form class="animate" id="form-hero">
                            <label for="form-hero-email">Enter your email for the latest properties</label>
                            <div class="row">
                                <div class="col-md-5 col-sm-5">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="form-hero-email" name="email" placeholder="Your email" required="">
                                        <span class="input-group-btn">
                                            <button class="btn" type="submit"><i class="arrow_right"></i></button>
                                        </span>
                                    </div><!-- /input-group -->
                                </div>
                            </div>
                        </form>
                        <!--end form-hero-->
                    </div>
                    <!--end container-->
                </div>
                <!--end hero-title-->
            </div>
            <!--end wrapper-->
            <div class="owl-carousel" data-owl-dots="0" data-owl-nav="1" data-owl-autoplay="1" data-owl-loop="1" data-owl-fadeout="1">
                <div class="hero-slide">
                    <div class="bg-transfer"><img src="{{asset('themes/assets/img/gallery-big-04.jpg')}}" alt=""></div>
                </div>
                <div class="hero-slide">
                    <div class="bg-transfer"><img src="{{asset('themes/assets/img/gallery-big-01.jpg')}}" alt=""></div>
                </div>
                <div class="hero-slide">
                    <div class="bg-transfer"><img src="{{asset('themes/assets/img/gallery-big-02.jpg')}}" alt=""></div>
                </div>
            </div>
            <!--end owl-carousel-->
        </div>
        <!--end hero-section-->
    </header>
    <!--end page-header-->

    @yield('content')
    <!--end page-content-->

    <footer id="page-footer" class="block background-is-dark">
        <div class="container">
            <a href="#" class="brand"><img src="{{asset('uploads/logo.png')}}" alt=""></a>
            <!--end brand-->
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <p>
                        Proin orci nisl, posuere viverra erat ut, pellentesque interdum urna. Curabitur eu risus convallis,
                        auctor augue id, pharetra neque.
                    </p>
                </div>
                <!--end col-md-4-->
                <div class="col-md-8 col-sm-8">
                    <div class="contact-data text-align-right">
                        <figure>+351 932 239 257</figure>
                        <a href="#">hello@example.com</a>
                    </div>
                </div>
                <!--end col-md-8-->
            </div>
            <!--end row-->
            <hr>
            <div class="note">(C) {{date('Y')}} All Rights Reserved</div>
            <!--end note-->
            <div class="numbers">
                <h2>Bonus numbers.</h2>
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <div class="number">
                            <figure>54</figure>
                            <p>Projects done</p>
                        </div>
                        <!--end number-->
                    </div>
                    <!--col-md-2-->
                    <div class="col-md-2 col-sm-2">
                        <div class="number">
                            <figure>21</figure>
                            <p>Employees</p>
                        </div>
                        <!--end number-->
                    </div>
                    <!--col-md-2-->
                    <div class="col-md-2 col-sm-2">
                        <div class="number">
                            <figure>48</figure>
                            <p>Satisfied Clients</p>
                        </div>
                        <!--end number-->
                    </div>
                    <!--col-md-2-->
                    <div class="col-md-2 col-sm-2">
                        <div class="number">
                            <figure>17</figure>
                            <p>Prices Won</p>
                        </div>
                        <!--end number-->
                    </div>
                    <!--col-md-2-->
                </div>
                <!--end row-->
            </div>
            <!--end numbers-->
            <div class="to-top">
                <a href="#page-top" class="arrow-up framed scroll">
                    <i class="arrow_up"></i>
                </a>
            </div>
        </div>
        <!--end container-->
        <div class="background-wrapper">
            <div class="bg-transfer opacity-30">
                <img src="{{asset('themes/assets/img/footer-bg.jpg')}}" alt="">
            </div>
            <div class="background-color background-color-black"></div>
        </div>
        <!--end background-wrapper-->
    </footer>
    <!--end page-footer-->

</div>
<!--end page-wrapper-->

<div class="modal fade apartment-selector" id="floor-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon_close"></i></button>
        <div class="modal-content">
            <div class="modal-header">
                <div class="title">
                    <h4>Building A</h4>
                    <h3>Floor 3</h3>
                    <h1 class="modal-title">Apartment 01</h1>
                    <h2>$69,000</h2>
                </div>
            </div>
            <!--end modal-header-->
            <div class="modal-body">
                <div class="left">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#modal-floor-plan-1" aria-controls="modal-floor-plan-1" role="tab" data-toggle="tab">Floor plan</a></li>
                        <li role="presentation"><a href="#modal-gallery-1" aria-controls="modal-gallery-1" role="tab" data-toggle="tab">Gallery</a></li>
                    </ul>
                    <!--end nav-tabs-->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="modal-floor-plan-1">
                            <a href="{{asset('themes/assets/img/floor-plan.jpg')}}" class="image-popup"><img src="{{asset('themes/assets/img/floor-plan.jpg')}}" alt=""></a>
                            <div class="note">Click to zoom</div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="modal-gallery-1">
                            <div class="gallery">
                                <div class="one-item-carousel" data-owl-items="1" data-owl-margin="0" data-owl-nav="0" data-owl-dots="1">
                                    <img src="{{asset('themes/assets/img/gallery-01.jpg')}}" alt="">
                                    <img src="{{asset('themes/assets/img/image-video.jpg')}}" alt="">
                                    <img src="{{asset('themes/assets/img/gallery-02.jpg')}}" alt="">
                                </div>
                            </div>
                            <!--end gallery-->
                            <a href="http://vimeo.com/24506451" class="video-tour video-popup"><i class="play-icon arrow_triangle-right"></i>Click to take a video tour</a>
                        </div>
                    </div>
                    <!--end tab-content-->
                </div>
                <!--end left-->
                <div class="right">
                    <h3>Parameters</h3>
                    <dl>
                        <dt>Kitchen</dt>
                        <dd>24m<sup>2</sup></dd>
                        <dt>Master bedroom</dt>
                        <dd>58m<sup>2</sup></dd>
                        <dt>Balcony</dt>
                        <dd>67m<sup>2</sup></dd>
                        <dt>Toilet</dt>
                        <dd>20m<sup>2</sup></dd>
                        <dt>Living room</dt>
                        <dd>77m<sup>2</sup></dd>
                        <dt>Passage</dt>
                        <dd>48m<sup>2</sup></dd>
                    </dl>
                    <h3>Description</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula mauris at finibus efficitur.
                        Nulla facilisi. Proin sodales nibh id consequat mattis. Phasellus eu consequat nunc.
                    </p>
                    <hr>
                    <figure><a href="#" class="icon"><i class="fa fa-file-pdf-o"></i>Download PDF</a></figure>
                    <figure><a href="#" class="icon"><i class="fa fa-file-image-o"></i>Download Brochure</a></figure>
                </div>
                <!--end right-->
            </div>
            <!--end modal-body-->
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>
<!--end modal-->

<!--end outer-wrapper-->
<script type="text/javascript" src="{{asset('themes/assets/js/jquery-2.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
<script type="text/javascript" src="{{asset('themes/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/assets/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/assets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/assets/js/scrollReveal.min.js')}}"></script>
<!--<script type="text/javascript" src="{{asset('themes/assets/js/jquery.appear.js')}}"></script>-->
<!--<script type="text/javascript" src="{{asset('themes/assets/js/waypoints.min.js')}}"></script>-->
<script type="text/javascript" src="{{asset('themes/assets/js/readmore.min.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/assets/js/pace.min.js')}}"></script>

<script type="text/javascript" src="{{asset('themes/assets/js/custom.js')}}"></script>

<script type="text/javascript">
    var latitude = 34.038405;
    var longitude = -117.946944;
    var markerImage = "assets/img/map-marker.png')}}";
    var mapTheme = "light";
    google.maps.event.addDomListener(window, 'load', simpleMap(latitude, longitude, markerImage, mapTheme));
</script>


</body>
