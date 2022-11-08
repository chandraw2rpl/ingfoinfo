<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Event Information - Privasi</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}"rel="stylesheet">
    <link href="{{ asset('frontend/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('img/logo.png') }}">
</head>

<body>

    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light extra-page"
        aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <a href="index"><img src="{{ asset('img/logo.png') }}" class="img-thumbnail rounded-circle" width='70px'
                    alt="alternative"></a>

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text" href="index">Ev.Inf</a>

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index#pricing">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown"
                            aria-expanded="false">Drop</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="article">Article Details</a></li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li><a class="dropdown-item" href="terms">Terms Conditions</a></li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li><a class="dropdown-item" href="privacy">Privacy Policy</a></li>
                            <li><div class="dropdown-divider"></div></li>
                            <li><a class="dropdown-item" href="profile">Team Profile</a></li>

                        </ul>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-solid-sm" href="login">Login</a>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Profile</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Basic -->
    <!-- <div class="ex-basic-1 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">

                <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Ariel Susantio</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div> -->
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
                                        <img class="quotes" src="{{ asset('frontend/images/quotes.svg') }}"
                                            alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Jalan manapun yang kau tempuh, kau harus tetap
                                                menjalaninya. Karena sekali kau menjalaninya kau tidak bisa mundur lagi.
                                                Hanya bisa terus maju kedepan, karena rintang apapun yang kamu hadapi
                                                kamu harus tetap melewati rintangan itu. Meskipun samapai titik
                                                penghabisan darah terakhir.</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="{{ asset('img/meme1.jpg') }}"
                                                    alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Ariel Susantio</div>
                                                    <div class="occupation">Anggota</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="quotes" src="{{ asset('frontend/images/quotes.svg') }}"
                                            alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Lebih baik menjadi pecundang dari pada
                                                pengecut, Pecundang itu penakut tetapi ia berani maju sedangkan pengecut
                                                ia penakut tapi ia tidak berani maju dari ketakutan itu! Pecundang
                                                memang sampah tapi pengecut lebih dari sampah!</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="{{ asset('img/ayu.jpg') }}"
                                                    alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Ayu Sutirah</div>
                                                    <div class="occupation">Anggota</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="quotes" src="{{ asset('frontend/images/quotes.svg') }}"
                                            alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">tetaplah dijalan yang benar.</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="{{ asset('img/aze.jpg') }}"
                                                    alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Azerrin Putri Patricia</div>
                                                    <div class="occupation">Anggota</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="quotes" src="{{ asset('frontend/images/quotes.svg') }}"
                                            alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Sejauh apapun kaki-mu melangkah, jangalah
                                                mengatakan bahwa "Diri ini lelah." tetapi katakanlah "Diri ini janganlah
                                                mundur." pada diri mu sendiri, buatlah kaki-mu berat di belakang agar
                                                kaki-mu tetap melangkah maju ke depan dan bukan ke belakang.</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="{{ asset('img/chandra.jpg') }}"
                                                    alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Chandra Wijaya</div>
                                                    <div class="occupation">Ketua</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="quotes" src="{{ asset('frontend/images/quotes.svg') }}"
                                            alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">hiduplah dengan berprinsip yang menjadikan mu
                                                seseorang yang hebat.</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="{{ asset('img/ancun.jpg') }}"
                                                    alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Hanson Villenueve</div>
                                                    <div class="occupation">Anggota</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="quotes" src="{{ asset('frontend/images/quotes.svg') }}"
                                            alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Lebih baik maju walaupun diteriaki pengecut
                                                dari pada mundur tetapi diteriaki pengecut, karena kalau sudah begitu,
                                                kita tidak akan menjadi apa-apa dab tidak akan menghasilkan apa-apa,
                                                hanya membuat kita terlihat bodoh saja.</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="{{ asset('img/ipan.jpg') }}"
                                                    alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Ivan Kenedy</div>
                                                    <div class="occupation">Anggota</div>
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



    <!-- Footer -->
    <div class="footer bg-gray">
        <img class="decoration-city" src="{{ asset('frontend/images/decoration-city.svg') }}" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>"Anda tidak akan pernah mengubah kehidupan sampai anda mengubah apa yang anda lakukan setiap
                        hari. Rahasia sukses anda ditemukan di dalam kegiatan anda sehari-hari."</h4>
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
                    <p class="p-small statement">Copyright © <a href="#">Siswa SMK </a></p>
                </div> <!-- end of col -->
                <div class="col-lg-3">
                    <p class="p-small statement">Distributed By: <a href="https://themewagon.com/"
                            target="_blank">cintakasihtzuchi</a></p>
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
