<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Event Information</title>

    <!-- Styles -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('img/logo.png') }}">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarExample">

    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <a href="index"><img src="{{ asset('img/logo.png') }}" class="img-thumbnail rounded-circle" width ='70px' alt="alternative"></a>
             <a class="navbar-brand logo-text" href="index">Ev.Inf</a>

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#header">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Drop</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="article">Article Details</a></li>
                            <li><div class="dropdown-divider"></div></li>
                            <li><a class="dropdown-item" href="terms">Terms Conditions</a></li>
                            <li><div class="dropdown-divider"></div></li>
                            <li><a class="dropdown-item" href="privacy">Privacy Policy</a></li>
                            <li><div class="dropdown-divider"></div></li>
                            <li><a class="dropdown-item" href="profile">Team Profile</a></li>
                        </ul>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-solid-sm" href="login">login</a>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <div class="section-title">Welcome to <strong>Event Information</strong> <i>SMK Cinta Kasih</i></div>
                        <h1 class="h1-large">Laman Event Information untuk SMK Cinta Kasih Tzu Chi</h1>
                        <p class="p-large"></p>
                        <a class="btn-solid-lg" href="#services">Offered services</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('frontend/images/header-illustration.svg') }}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon blue">
                            <span class="far fa-file-alt"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Landing page</h5>
                            <p>Lorem ipsum dolor sit amet, consect adipiscing elit nulla id nisl blah nor</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Ut tincidunt vitae enim non vehi</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Phasellus vitae metus in felis</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Fusce pulvinar eu mi ac molestie</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Curabitur consequat nisl eget</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon yellow">

                            <span class="fas fa-solar-panel"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Corporate site</h5>
                            <p>Nam eu erat tellused vivamus vitae sem in tortor pharetra vehicula orn</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Vivaus dignissim sit amet nisi</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Aliqam a tristique nibh in pretium</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Nunc commodo magna quis blah</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check"></i>
                                    <div class="flex-grow-1">Lacus fermentum tincidunt</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end of card -->


                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Details 1 -->
    <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
            <img class="img-fluid" src="{{ asset('frontend/images/details-1.svg') }}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2><span>Perfect solution</span><br> for your small business</h2>
                        <p>Maecenas fringilla quam posuere, pellentesque est nec, gravida turpis. Integer vitae mollis felis. Integer id quam id tellus hendrerit laciniad binfer</p>
                        <p>Sed id dui rutrum, dictum urna eu, accumsan turpis. Fusce id auctor velit, sed viverra dui rem dina</p>
                        <a class="btn-solid-reg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Modal</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->


    <!-- Details Modal -->
    <div id="staticBackdrop" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="col-lg-8">
                        <div class="image-container">
                            <img class="img-fluid" src="images/details-modal.jpg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-4">
                        <h3>Goals Setting</h3>
                        <hr>
                        <p>In gravida at nunc sodales pretium. Vivamus semper, odio vitae mattis auctor, elit elit semper magna ac tum nico vela spider</p>
                        <h4>User Feedback</h4>
                        <p>Sapien vitae eros. Praesent ut erat a tellus posuere nisi more thico cursus pharetra finibus posuere nisi. Vivamus feugiat</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Tincidunt sem vel brita bet mala</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Sapien condimentum sacoz sil necr</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Fusce interdum nec ravon fro urna</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Integer pulvinar biolot bat tortor</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Id ultricies fringilla fangor raq trinit</div>
                            </li>
                        </ul>
                        <a id="modalCtaBtn" class="btn-solid-reg" href="#">Details</a>
                        <button type="button" class="btn-outline-reg" data-bs-dismiss="modal">Close</button>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of modal-content -->
        </div> <!-- end of modal-dialog -->
    </div> <!-- end of modal -->
    <!-- end of details modal -->


    <!-- Details 2 -->
    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2><span>Awesome websites</span><br> built with tons of love</h2>
                        <p>In gravida vitae nulla vitae tincidunt imperdiet ante. Pellentesque aliquet mi eu tortor dictum, non imperdiet ante viverra. Phasellus eget enim orci flig rine bilo</p>

                        <!-- Counter -->
                        <div class="counter-container">
                            <div class="counter-cell">
                                <div data-purecounter-start="0" data-purecounter-end="1250" data-purecounter-duration="2" class="purecounter">1</div>
                                <div class="counter-info">Happy Customers</div>
                            </div> <!-- end of counter-cell -->
                            <div class="counter-cell red">
                                <div data-purecounter-start="0" data-purecounter-end="1380" data-purecounter-duration="2" class="purecounter">1</div>
                                <div class="counter-info">Issues Solved</div>
                            </div> <!-- end of counter-cell -->
                        </div> <!-- end of counter-container -->
                        <!-- end of counter -->

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('frontend/images/details-2.svg') }}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of details 2 -->





    <!-- Testimonials -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="quotes" src="{{ asset('frontend/images/quotes.svg') }}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Fusce tincidunt dui nec diam varius venenatis. Nullam tristique rutrum odio, ut tincidunt erat dictum in. Etiam et aliquet mi, et vehicula elit fusce porta ullamcorper</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="images/testimonial-1.jpg" alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Samantha Bloom</div>
                                                    <div class="occupation">Team Leader - Syncnow</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="quotes" src="{{ asset('frontend/images/quotes.svg') }}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Mauris ut mattis nisl. Nunc ultrices nisi eget nisl pulvinar iaculis vitae ac nulla. Nullam fringilla varius blandit. Nam sit amet eleifend justo blogo rovan de chichis kokos venir dab</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="images/testimonial-2.jpg" alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Mike Page</div>
                                                    <div class="occupation">Developer - Chainlink</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="quotes" src="{{ asset('frontend/images/quotes.svg') }}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Nam sit amet eleifend justo. Aliquam sit amet lacinia enim, eget facilisis ex. Ut pretium cursus eleifend. Integer feugiat malesuada quam vel basil venis proca jilo</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="images/testimonial-3.jpg" alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Mary Longhorn</div>
                                                    <div class="occupation">Manager - Firstdev</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="quotes" src="{{ asset('frontend/images/quotes.svg') }}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur ing elit. Nulla id nisl tempus risus facilisis efficr ut tincidunt vitae enim non vehicula. Phases vitae metus in felis gravida ultrices zimbo</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="images/testimonial-4.jpg" alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Ronny Drummer</div>
                                                    <div class="occupation">Designer - Sawdust</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->
    <!-- Invitation -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h4>"Anda tidak akan pernah mengubah kehidupan sampai anda mengubah apa yang anda lakukan setiap hari. Rahasia sukses anda ditemukan di dalam kegiatan anda sehari-hari."</h4>
                        <p class="p-large">- Kata Perenungan Master</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of invitation -->

    <!-- Contact -->
    <div id="contact" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading"><span><b>Kontak kami</b></span><br> </h2>
                    <p class="p-heading"></p>
                    <ul class="list-unstyled li-space-lg">
                        <li><i class="fas fa-map-marker-alt"></i> &nbsp;<b>Jl. Kamal Raya Outer Ring Road No.20, RT.7/RW.14, Cengkareng, Kota Jakarta Barat</b> </li>

                        <li><i class="fas fa-phone"></i> &nbsp;<a href="tel:(021)54397462"><b> +(021)54397462</b></a></li>

                        <li><i class="fas fa-envelope"></i> &nbsp;<a href="mailto:smkcintakasihtzuchi@gmail.com"><b>smkcintakasihtzuchi@gmail.com</b></a> </li>

                        <li><i class="fas fa-link"></i> &nbsp;<a href="https://smk.cintakasihtzuchi.sch.id/"><b>smkcintakasihtzuchi</b></a> </li>


                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of contact -->





   <!-- Footer -->
   <div class="footer bg-gray">
        <img class="decoration-city" src="{{ asset('frontend/images/decoration-city.svg') }}" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>"Anda tidak akan pernah mengubah kehidupan sampai anda mengubah apa yang anda lakukan setiap hari. Rahasia sukses anda ditemukan di dalam kegiatan anda sehari-hari."</h4>
                    <p><i>- Kata Perenungan Master Cheng Yen -</i></p>

                    <div class="social-container">
                        <span class="fa-stack">
                            <a href="https://www.facebook.com/profile.php?id=100071491673873">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://twitter.com/tzuchi_smk?lang=en">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://smk.cintakasihtzuchi.sch.id/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fa fa-globe fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/smkcintakasihtzuchi/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.youtube.com/channel/UCpQ1qF3JzBCGRC9_ep5uy2w">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of social-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled li-space-lg p-small">
                        <li><a href="https://smk.cintakasihtzuchi.sch.id/">SMK Cinta Kasih Tzu Chi</a></li>
                        <li></li>
                        <li><a href="https://cintakasihtzuchi.sch.id/">Sekolah Cinta Kasih Tzu Chi</a></li>

                    </ul>
                </div> <!-- end of col -->
                <div class="col-lg-3">
                    <p class="p-small statement">Copyright © <a href="profile">Siswa SMK </a></p>
                </div> <!-- end of col -->
                <div class="col-lg-3">
                    <p class="p-small statement">Distributed By: <a href="https://themewagon.com/" target="_blank">cintakasihtzuchi</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->

    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="{{ asset('frontend/images/up-arrow.png') }}" alt="alternative">
    </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('frontend/js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('frontend/js/purecounter.min.js') }}"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script> <!-- Isotope for filter -->
    <script src="{{ asset('frontend/js/scripts.js') }}"></script> <!-- Custom scripts -->

</body>
</html>
