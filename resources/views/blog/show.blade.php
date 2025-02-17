<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="author" content="SemiColonWeb">
    <meta name="description"
        content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet"> --}}

    <!-- Core Style -->
    <link rel="stylesheet" href={{ asset('assets/style.css') }}>

    <!-- Font Icons -->
    <link rel="stylesheet" href={{ asset('assets/css/font-icons.css') }}>

    <!-- Plugins/Components CSS -->
    <link rel="stylesheet" href={{ asset('assets/css/swiper.css') }}>

    <!-- Custom CSS -->
    <link rel="stylesheet" href={{ asset('assets/css/custom.css') }}>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .portfolio-image img {
            transition: transform 0.5s ease-in-out;
        }

        .portfolio-image:hover img {
            transform: scale(1.1);
        }

        .bg-overlay-bg {
            background-color: transparent !important;
            /* Mengubah warna latar belakang menjadi transparan */
            transition: none !important;
            /* Menghapus transisi */
        }
    </style>

    <!-- Document Title -->
    <title>Home - One Page Layout | Canvas</title>

</head>

<body class="stretched" style="font-family: Poppins">

    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper">
        <div id="home" class="page-section"
            style="position:absolute;top:0;left:0;width:100%;height:200px;z-index:-2;"></div>

        <section id="slider"
            class="slider-element slider-parallax min-vh-60 min-vh-md-100 with-header swiper_wrapper">
            <div class="slider-inner">

                <div class="swiper swiper-parent">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide dark">
                            <div class="container">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-animate="fadeInUp">Welcome to Canvas</h2>
                                    <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Create just
                                        what you need for your Perfect Website. Choose from a wide range of Elements
                                        &amp; simply put them on our Canvas.</p>
                                </div>
                            </div>
                            <div class="swiper-slide-bg" style="background-image: url('assets/img/Raja_Ampat.jpg');">
                            </div>
                        </div>
                        <div class="swiper-slide dark">
                            <div class="container">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-animate="fadeInUp">Beautifully Flexible</h2>
                                    <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Looks
                                        beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with
                                        Responsive functionality that can be adapted to any screen size.</p>
                                </div>
                            </div>
                            <div class="video-wrap no-placeholder">
                                <video poster="images/videos/deskwork.jpg" preload="auto" loop autoplay muted
                                    playsinline>
                                    <source src='images/videos/deskwork.mp4' type='video/mp4'>
                                    <source src='images/videos/deskwork.webm' type='video/webm'>
                                </video>
                                <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="slider-caption">
                                    <h2 data-animate="fadeInUp">Great Performance</h2>
                                    <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">You'll be
                                        surprised to see the Final Results of your Creation &amp; would crave for more.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide-bg"
                                style="background-image: url('images/slider/swiper/3.jpg'); background-position: center top;">
                            </div>
                        </div>
                    </div>
                    <div class="slider-arrow-left"><i class="uil uil-angle-left-b"></i></div>
                    <div class="slider-arrow-right"><i class="uil uil-angle-right-b"></i></div>
                    <div class="slide-number">
                        <div class="slide-number-current"></div><span>/</span>
                        <div class="slide-number-total"></div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Header-->
        <header id="header" class="full-header">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">
                        <div id="logo">
                            <a href="index.html">
                                <img class="logo-default" src={{ asset('assets/images/logo@2x.png') }}
                                    alt="Canvas Logo">
                                <img class="logo-dark" src={{ asset('assets/images/logo-dark@2x.png') }}
                                    alt="Canvas Logo">
                            </a>
                        </div><!-- #logo end -->

                        <div class="header-misc">
                            <div id="top-search" class="header-misc-icon">
                                <a href="#" id="top-search-trigger"><i class="uil uil-search"></i><i
                                        class="bi-x-lg"></i></a>
                            </div><!-- #top-search end -->

                        </div>

                        <div class="primary-menu-trigger">
                            <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                                <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                            </button>
                        </div>
                        <nav class="primary-menu">

                            <ul class="menu-container one-page-menu" data-easing="easeInOutExpo" data-speed="1500">
                                <li class="menu-item"><a class="menu-link" href="#" data-href="#home">
                                        <div>Home</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#"
                                        data-href="#section-about">
                                        <div>Travel</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#" data-href="#section-work">
                                        <div>Topic</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#" data-href="#section-team">
                                        <div>Team</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#"
                                        data-href="#section-services">
                                        <div>Services</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#"
                                        data-href="#section-pricing">
                                        <div>Pricing</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="blog.html">
                                        <div>Blog</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#"
                                        data-href="#section-testimonials" data-offset="60">
                                        <div>Testimonials</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="/logout" {{-- data-href="#section-contact" --}}>
                                        <div>Contact</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                        <form class="top-search-form" action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value=""
                                placeholder="Type &amp; Hit Enter.." autocomplete="off">
                        </form>

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        <!-- Content
  ============================================= -->
        <section id="content">
            <div class="content-wrap">

                <section id="section-about" class="page-section">

                    <div class="container-fluid">

                        <div class="heading-block text-center">
                            <h2>We are <span>Canvas</span></h2>
                            <span>One of the most Versatile Theme on Themeforest</span>
                        </div>

                        <div id="portfolio" class="portfolio row portfolio-overlay-open g-0 text-center">
                            @foreach ($blogs as $key => $item)
                                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-4 pf-media pf-icons">
                                    <div class="grid-inner">
                                        <div class="portfolio-image">
                                            <a href="/detail/{{ $item->id }}">
                                                <img style="width: 100%; height: 250px; ob"
                                                    src={{ asset('storage/foto/' . $item->foto) }}
                                                    alt="Beach Activities">
                                                <div class="bg-overlay">
                                                    <div class="bg-overlay-content dark flex-column">
                                                        <div class="portfolio-desc pt-0">
                                                            <h3 style="font-family: Poppins">{{ $item->title }}</h3>
                                                        </div>
                                                    </div>
                                                    <div class="bg-overlay-bg dark op-ts op-05"
                                                        data-hover-animate="op-1" data-hover-animate-out="op-05">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            @endforeach

                        </div>
                    </div>
                </section>


                <section id="section-work" class="page-section mt-6">



                    <div class="container">
                        <div class="row col-mb-50 justify-content-center">

                            <div class="heading-block text-center mt-5">
                                <h2>Our Works</h2>
                                <span>Some of the Awesome Projects we've worked on.</span>
                            </div>

                            <div class="clear"></div>

                            @foreach ($topic as $key => $item)
                                <div class="col-xl-4 col-md-6">
                                    <div class="card border-0 dark shadow-sm h-shadow shadow-ts p-3"
                                        style="background: url({{ asset('storage/foto/' . $item->foto) }}) no-repeat center center / cover;">
                                        <div class="card-body">
                                            <h6 class="fw-normal text-uppercase ls-2 text-white-50 mb-2">Topic</h6>
                                            <h3 class="card-title h2 fw-bold mb-4 text-white">{{$item->title}}</h3>
                                            <p class="card-text mb-5">{!! Str::limit($item->description, 100, '...') !!}</p>
                                            <a href="#"><i
                                                    class="bi-arrow-right h4 icon-stacked text-center rounded-circle bg-white text-dark"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>


                </section>

                <section id="section-team" class="page-section mt-6">

                    <div class="heading-block text-center">
                        <h2>Our Team</h2>
                        <span>People who have contributed enormously to our Company.</span>
                    </div>

                    <div class="container">

                        <div class="row col-mb-50 mb-0">
                            <div class="col-lg-6">

                                <div class="team team-list row align-items-center">
                                    <div class="team-image col-sm-6">
                                        <img src="images/team/3.jpg" alt="John Doe" class="rounded-6">
                                    </div>
                                    <div class="team-desc col-sm-6">
                                        <div class="team-title">
                                            <h4>John Doe</h4><span>CEO</span>
                                        </div>
                                        <div class="team-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Quaerat assumenda similique unde mollitia.</div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <a href="#"
                                                class="social-icon si-small rounded-circle text-white bg-facebook">
                                                <i class="fa-brands fa-facebook-f"></i>
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                            <a href="#"
                                                class="social-icon si-small rounded-circle text-white bg-x-twitter">
                                                <i class="fa-brands fa-x-twitter"></i>
                                                <i class="fa-brands fa-x-twitter"></i>
                                            </a>
                                            <a href="#"
                                                class="social-icon si-small rounded-circle text-white bg-google">
                                                <i class="fa-brands fa-google"></i>
                                                <i class="fa-brands fa-google"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="team team-list row align-items-center">
                                    <div class="team-image col-sm-6">
                                        <img src="images/team/4.jpg" alt="Nix Maxwell" class="rounded-6">
                                    </div>
                                    <div class="team-desc col-sm-6">
                                        <div class="team-title">
                                            <h4>Nix Maxwell</h4><span>Co-Founder</span>
                                        </div>
                                        <div class="team-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Quaerat assumenda similique unde mollitia.</div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <a href="#"
                                                class="social-icon si-small rounded-circle text-white bg-forrst">
                                                <i class="fa-solid fa-tree"></i>
                                                <i class="fa-solid fa-tree"></i>
                                            </a>
                                            <a href="#"
                                                class="social-icon si-small rounded-circle text-white bg-skype">
                                                <i class="fa-brands fa-skype"></i>
                                                <i class="fa-brands fa-skype"></i>
                                            </a>
                                            <a href="#"
                                                class="social-icon si-small rounded-circle text-white bg-flickr">
                                                <i class="fa-brands fa-flickr"></i>
                                                <i class="fa-brands fa-flickr"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="w-100"></div>

                            <div class="col-lg-6">

                                <div class="team team-list row align-items-center">
                                    <div class="team-image col-sm-6">
                                        <img src="images/team/2.jpg" alt="Josh Clark" class="rounded-6">
                                    </div>
                                    <div class="team-desc col-sm-6">
                                        <div class="team-title">
                                            <h4>Josh Clark</h4><span>Developer</span>
                                        </div>
                                        <div class="team-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Quaerat assumenda similique unde mollitia.</div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <a href="#"
                                                class="social-icon si-small rounded-circle text-white bg-dribbble">
                                                <i class="fa-brands fa-dribbble"></i>
                                                <i class="fa-brands fa-dribbble"></i>
                                            </a>
                                            <a href="#"
                                                class="social-icon si-small rounded-circle text-white bg-x-twitter">
                                                <i class="fa-brands fa-x-twitter"></i>
                                                <i class="fa-brands fa-x-twitter"></i>
                                            </a>
                                            <a href="#"
                                                class="social-icon si-small rounded-circle text-white bg-github">
                                                <i class="fa-brands fa-github"></i>
                                                <i class="fa-brands fa-github"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="team team-list row align-items-center">
                                    <div class="team-image col-sm-6">
                                        <img src="images/team/8.jpg" alt="Mary Jane" class="rounded-6">
                                    </div>
                                    <div class="team-desc col-sm-6">
                                        <div class="team-title">
                                            <h4>Mary Jane</h4><span>Support</span>
                                        </div>
                                        <div class="team-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Quaerat assumenda similique unde mollitia.</div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <a href="#"
                                                class="social-icon si-small rounded-circle text-white bg-facebook">
                                                <i class="fa-brands fa-facebook-f"></i>
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                            <a href="#"
                                                class="social-icon si-small rounded-circle text-white bg-linkedin">
                                                <i class="fa-brands fa-linkedin"></i>
                                                <i class="fa-brands fa-linkedin"></i>
                                            </a>
                                            <a href="#"
                                                class="social-icon si-small rounded-circle text-white bg-x-twitter">
                                                <i class="fa-brands fa-x-twitter"></i>
                                                <i class="fa-brands fa-x-twitter"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="fancy-title title-border title-center mt-4">
                            <h4>Skills we are Perfect in</h4>
                        </div>

                        <div class="row col-mb-50">
                            <div class="col-sm-6 col-lg-3 text-center">
                                <div class="rounded-skill" data-color="#D01C1C" data-size="150" data-percent="90"
                                    data-width="2" data-animate="3000">
                                    <div class="counter counter-inherit"><span data-from="1" data-to="90"
                                            data-refresh-interval="50" data-speed="3000"></span>%</div>
                                </div>
                                <h5>HTML5</h5>
                            </div>

                            <div class="col-sm-6 col-lg-3 text-center">
                                <div class="rounded-skill" data-color="#1770A4" data-size="150" data-percent="75"
                                    data-width="2" data-animate="3000">
                                    <div class="counter counter-inherit"><span data-from="1" data-to="75"
                                            data-refresh-interval="50" data-speed="3000"></span>%</div>
                                </div>
                                <h5>CSS3</h5>
                            </div>

                            <div class="col-sm-6 col-lg-3 text-center">
                                <div class="rounded-skill" data-color="#6A89AA" data-size="150" data-percent="85"
                                    data-width="2" data-animate="3000">
                                    <div class="counter counter-inherit"><span data-from="1" data-to="85"
                                            data-refresh-interval="50" data-speed="3000"></span>%</div>
                                </div>
                                <h5>PHP</h5>
                            </div>

                            <div class="col-sm-6 col-lg-3 text-center">
                                <div class="rounded-skill" data-color="#248673" data-size="150" data-percent="80"
                                    data-width="2" data-animate="3000">
                                    <div class="counter counter-inherit"><span data-from="1" data-to="80"
                                            data-refresh-interval="50" data-speed="3000"></span>%</div>
                                </div>
                                <h5>jQuery</h5>
                            </div>
                        </div>

                    </div>

                    <div class="section parallax scroll-detect py-6">
                        <img src="images/parallax/3.jpg" class="parallax-bg">
                        <div class="heading-block text-center border-bottom-0 mb-0">
                            <h2>"Everything is designed, but some things are designed well."</h2>
                        </div>
                    </div>

                </section>

                <section id="section-services" class="page-section mt-6">

                    <div class="heading-block text-center mb-6">
                        <h2>Services</h2>
                        <span>List of some features included in Canvas.</span>
                    </div>

                    <div class="container">

                        <div class="row justify-content-center col-mb-50">
                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-center fbox-effect border-bottom-0"
                                    data-animate="fadeIn">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="bi-phone"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Responsive Layout</h3>
                                        <p>Powerful Layout with Responsive functionality that can be adapted to any
                                            screen size.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-center fbox-effect border-bottom-0" data-animate="fadeIn"
                                    data-delay="200">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="bi-eye"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Retina Ready Graphics</h3>
                                        <p>Looks beautiful &amp; ultra-sharp on Retina Displays with Retina Icons, Fonts
                                            &amp; Images.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-center fbox-effect border-bottom-0" data-animate="fadeIn"
                                    data-delay="400">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="bi-star"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Powerful Performance</h3>
                                        <p>Optimized code that are completely customizable and deliver unmatched fast
                                            performance.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-center fbox-effect border-bottom-0" data-animate="fadeIn"
                                    data-delay="600">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="bi-camera-video"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>HTML5 Video</h3>
                                        <p>Canvas provides support for Native HTML5 Videos that can be added to a Full
                                            Width Background.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-center fbox-effect border-bottom-0" data-animate="fadeIn"
                                    data-delay="800">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="bi-mouse"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Parallax Support</h3>
                                        <p>Display your Content attractively using Parallax Sections that have unlimited
                                            customizable areas.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-center fbox-effect border-bottom-0" data-animate="fadeIn"
                                    data-delay="1000">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="bi-fire"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Endless Possibilities</h3>
                                        <p>Complete control on each &amp; every element that provides endless
                                            customization possibilities.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-center fbox-effect border-bottom-0" data-animate="fadeIn"
                                    data-delay="1200">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="bi-lightbulb"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Light &amp; Dark Color Schemes</h3>
                                        <p>Change your Website's Primary Scheme instantly by simply adding the dark
                                            class to the body.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-center fbox-effect border-bottom-0" data-animate="fadeIn"
                                    data-delay="1400">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="bi-heart"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Boxed &amp; Wide Layouts</h3>
                                        <p>Stretch your Website to the Full Width or make it boxed to surprise your
                                            visitors.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-center fbox-effect border-bottom-0" data-animate="fadeIn"
                                    data-delay="1600">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="bi-card-text"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Extensive Documentation</h3>
                                        <p>We have covered each &amp; everything in our Documentation including Videos
                                            &amp; Screenshots.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="divider divider-sm divider-center mt-6"><i class="bi-star-fill"></i></div>

                </section>

                <section id="section-pricing" class="page-section mt-6">

                    <div class="heading-block text-center">
                        <h2>Pricing</h2>
                        <span>We offer Flexible Pricing Options.</span>
                    </div>

                    <div class="container">

                        <div class="row pricing col-mb-30 mb-4">
                            <div class="col-md-6 col-lg-4">

                                <div class="pricing-box pricing-simple px-5 py-4 bg-light text-center text-md-start">
                                    <div class="pricing-title">
                                        <span>Try Now</span>
                                        <h3>Personal</h3>
                                    </div>
                                    <div class="pricing-price">
                                        <span class="price-unit">&euro;</span>0<span
                                            class="price-tenure">monthly</span>
                                    </div>
                                    <div class="pricing-features">
                                        <ul class="iconlist">
                                            <li><i class="fa-solid fa-check text-smaller"></i>
                                                <span><strong>Full</strong> Access</span>
                                            </li>
                                            <li><i class="fa-solid fa-check text-smaller"></i>
                                                <span><strong>100</strong> User Accounts</span>
                                            </li>
                                            <li><i class="fa-solid fa-check text-smaller"></i> <span><strong>1
                                                        Year</strong> License</span></li>
                                            <li><i class="fa-solid fa-check text-smaller"></i>
                                                <span><strong>24/7</strong> Support</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-action">
                                        <a href="#" class="btn btn-primary btn-lg">Get Started</a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6 col-lg-4">

                                <div class="pricing-box pricing-simple px-5 py-4 bg-light text-center text-md-start">
                                    <div class="pricing-title">
                                        <span class="text-danger">Most Popular</span>
                                        <h3>Professional</h3>
                                    </div>
                                    <div class="pricing-price">
                                        <span class="price-unit">&euro;</span>19<span
                                            class="price-tenure">monthly</span>
                                    </div>
                                    <div class="pricing-features">
                                        <ul class="iconlist">
                                            <li><i class="fa-solid fa-check text-smaller"></i>
                                                <span><strong>Premium</strong> Plugins</span>
                                            </li>
                                            <li><i class="fa-solid fa-check text-smaller"></i>
                                                <span><strong>SEO</strong> Features</span>
                                            </li>
                                            <li><i class="fa-solid fa-check text-smaller"></i>
                                                <span><strong>Full</strong> Access</span>
                                            </li>
                                            <li><i class="fa-solid fa-check text-smaller"></i>
                                                <span><strong>100</strong> User Accounts</span>
                                            </li>
                                            <li><i class="fa-solid fa-check text-smaller"></i> <span><strong>1
                                                        Year</strong> License</span></li>
                                            <li><i class="fa-solid fa-check text-smaller"></i>
                                                <span><strong>24/7</strong> Support</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-action">
                                        <a href="#" class="btn btn-danger btn-lg">Get Started</a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6 col-lg-4">

                                <div class="pricing-box pricing-simple px-5 py-4 bg-light text-center text-md-start">
                                    <div class="pricing-title">
                                        <span>Full Featured</span>
                                        <h3>Enterprise</h3>
                                    </div>
                                    <div class="pricing-price">
                                        <span class="price-unit">&euro;</span>49<span
                                            class="price-tenure">monthly</span>
                                    </div>
                                    <div class="pricing-features">
                                        <ul class="iconlist">
                                            <li><i class="fa-solid fa-check text-smaller"></i>
                                                <span><strong>55+</strong> Niche Demos</span>
                                            </li>
                                            <li><i class="fa-solid fa-check text-smaller"></i>
                                                <span><strong>Drag-n-Drop</strong> Builder</span>
                                            </li>
                                            <li><i class="fa-solid fa-check text-smaller"></i>
                                                <span><strong>Premium</strong> Plugins</span>
                                            </li>
                                            <li><i class="fa-solid fa-check text-smaller"></i>
                                                <span><strong>SEO</strong> Features</span>
                                            </li>
                                            <li><i class="fa-solid fa-check text-smaller"></i>
                                                <span><strong>Full</strong> Access</span>
                                            </li>
                                            <li><i class="fa-solid fa-check text-smaller"></i>
                                                <span><strong>100</strong> User Accounts</span>
                                            </li>
                                            <li><i class="fa-solid fa-check text-smaller"></i> <span><strong>1
                                                        Year</strong> License</span></li>
                                            <li><i class="fa-solid fa-check text-smaller"></i>
                                                <span><strong>24/7</strong> Support</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-action">
                                        <a href="#" class="btn btn-success btn-lg">Get Started</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </section>

                <section id="section-testimonials" class="page-section section parallax scroll-detect dark"
                    style="padding: 200px 0;">
                    <img src="images/about/me-parallax.jpg" class="parallax-bg">
                    <div class="container">

                        <div class="row col-mb-50">
                            <div class="col-md-6">&nbsp;</div>

                            <div class="col-md-6">

                                <div class="heading-block text-center">
                                    <h4>What Clients say?</h4>
                                    <span>Some of our Clients love us &amp; so we do!</span>
                                </div>

                                <div class="fslider testimonial testimonial-full bg-transparent text-center border-0 shadow-none p-0"
                                    data-arrows="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide">
                                                <p class="mb-4 fs-5 fw-light font-secondary ls-1">Similique fugit
                                                    repellendus expedita excepturi iure perferendis provident quia eaque
                                                    vero numquam?</p>
                                                <h4 class="fs-6 mb-0 fw-medium">Steve Jobs</h4>
                                                <small class="text-muted">Apple Inc.</small>
                                            </div>
                                            <div class="slide">
                                                <p class="mb-4 fs-5 fw-light font-secondary ls-1">Natus voluptatum enim
                                                    quod necessitatibus quis expedita harum provident eos obcaecati id
                                                    culpa corporis molestias.</p>
                                                <h4 class="fs-6 mb-0 fw-medium">Collis Ta'eed</h4>
                                                <small class="text-muted">Envato Inc.</small>
                                            </div>
                                            <div class="slide">
                                                <p class="mb-4 fs-5 fw-light font-secondary ls-1">Incidunt deleniti
                                                    blanditiis quas aperiam recusandae consequatur ullam quibusdam cum
                                                    libero illo rerum!</p>
                                                <h4 class="fs-6 mb-0 fw-medium">John Doe</h4>
                                                <small class="text-muted">XYZ Inc.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </section>

                <section id="section-contact" class="page-section">

                    <div class="heading-block text-center">
                        <h2>Get in Touch with us</h2>
                        <span>Still have Questions? Contact Us using the Form below.</span>
                    </div>

                    <div class="container">

                        <div class="row align-items-stretch col-mb-50 mb-0">
                            <!-- Contact Form -->
                            <div class="col-lg-6">

                                <div class="fancy-title title-border">
                                    <h3>Send us an Email</h3>
                                </div>

                                <div class="form-widget">
                                    <div class="form-result"></div>

                                    <form class="mb-0" id="template-contactform" name="template-contactform"
                                        action="include/form.php" method="post">
                                        <div class="form-process">
                                            <div class="css3-spinner">
                                                <div class="css3-spinner-scaler"></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="template-contactform-name">Name <small>*</small></label>
                                                <input type="text" id="template-contactform-name"
                                                    name="template-contactform-name" value=""
                                                    class="form-control required">
                                            </div>

                                            <div class="col-md-4 form-group">
                                                <label for="template-contactform-email">Email <small>*</small></label>
                                                <input type="email" id="template-contactform-email"
                                                    name="template-contactform-email" value=""
                                                    class="required email form-control">
                                            </div>

                                            <div class="col-md-4 form-group">
                                                <label for="template-contactform-phone">Phone</label>
                                                <input type="text" id="template-contactform-phone"
                                                    name="template-contactform-phone" value=""
                                                    class="form-control">
                                            </div>

                                            <div class="w-100"></div>

                                            <div class="col-md-8 form-group">
                                                <label for="template-contactform-subject">Subject
                                                    <small>*</small></label>
                                                <input type="text" id="template-contactform-subject"
                                                    name="subject" value="" class="required form-control">
                                            </div>

                                            <div class="col-md-4 form-group">
                                                <label for="template-contactform-service">Services</label>
                                                <select id="template-contactform-service"
                                                    name="template-contactform-service" class="form-select">
                                                    <option value="">-- Select One --</option>
                                                    <option value="Wordpress">Wordpress</option>
                                                    <option value="PHP / MySQL">PHP / MySQL</option>
                                                    <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                                                    <option value="Graphic Design">Graphic Design</option>
                                                </select>
                                            </div>

                                            <div class="w-100"></div>

                                            <div class="col-12 form-group">
                                                <label for="template-contactform-message">Message
                                                    <small>*</small></label>
                                                <textarea class="required form-control" id="template-contactform-message" name="template-contactform-message"
                                                    rows="6" cols="30"></textarea>
                                            </div>

                                            <div class="col-12 form-group d-none">
                                                <input type="text" id="template-contactform-botcheck"
                                                    name="template-contactform-botcheck" value=""
                                                    class="form-control">
                                            </div>

                                            <div class="col-12 form-group">
                                                <button class="button button-3d m-0" type="submit"
                                                    id="template-contactform-submit"
                                                    name="template-contactform-submit" value="submit">Send
                                                    Message</button>
                                            </div>
                                        </div>

                                        <input type="hidden" name="prefix" value="template-contactform-">

                                    </form>
                                </div>

                            </div><!-- Contact Form End -->

                            <!-- Google Map -->
                            <div class="col-lg-6 min-vh-40">
                                <div class="gmap h-100" data-address="Melbourne, Australia"
                                    data-markers='[{address: "Melbourne, Australia", html: "<div class=\"p-2\" style=\"width: 300px;\"><h4 class=\"mb-2\">Hi! We are <span>Envato!</span></h4><p class=\"mb-0\" style=\"font-size:1rem;\">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day.</p></div>", icon:{ image: "images/icons/map-icon-red.png", iconsize: [32, 39], iconanchor: [32,39] } }]'
                                    data-scrollwheel="false"></div>
                            </div><!-- Google Map End -->
                        </div>

                        <!-- Contact Info -->
                        <div class="w-100">

                            <div class="row col-mb-50">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="uil uil-map-marker"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Our Headquarters<span class="subtitle">Melbourne, Australia</span></h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3">
                                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="bi-telephone"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Speak to Us<span class="subtitle">(123) 456 7890</span></h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3">
                                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="bi-skype"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Make a Video Call<span class="subtitle">CanvasOnSkype</span></h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3">
                                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Follow on Twitter<span class="subtitle">2.3M Followers</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- Contact Info End -->

                    </div>
                </section>

            </div>
        </section><!-- #content end -->

        <!-- Footer
  ============================================= -->
        <footer id="footer" class="dark">
            <div class="container">

                <!-- Footer Widgets
    ============================================= -->
                <div class="footer-widgets-wrap">

                    <div class="row col-mb-50">
                        <div class="col-lg-8">

                            <div class="row col-mb-50">
                                <div class="col-md-4">

                                    <div class="widget">

                                        <img src="images/footer-widget-logo.png" alt="Image" class="footer-logo">

                                        <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp;
                                            <strong>Flexible</strong> Design Standards.
                                        </p>

                                        <div
                                            style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                                            <address>
                                                <strong>Headquarters:</strong><br>
                                                795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                            </address>
                                            <abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547
                                            632521<br>
                                            <abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
                                            <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="widget widget_links">

                                        <h4>Blogroll</h4>

                                        <ul>
                                            <li><a href="https://codex.wordpress.org/">Documentation</a></li>
                                            <li><a
                                                    href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a>
                                            </li>
                                            <li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
                                            <li><a href="https://wordpress.org/support/">Support Forums</a></li>
                                            <li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
                                            <li><a href="https://wordpress.org/news/">Canvas Blog</a></li>
                                            <li><a href="https://planet.wordpress.org/">Canvas Planet</a></li>
                                        </ul>

                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="widget">
                                        <h4>Recent Posts</h4>

                                        <div class="posts-sm row col-mb-30" id="post-list-footer">
                                            <div class="entry col-12">
                                                <div class="grid-inner row">
                                                    <div class="col">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Lorem ipsum dolor sit amet,
                                                                    consectetur</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="entry col-12">
                                                <div class="grid-inner row">
                                                    <div class="col">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Elit Assumenda vel amet dolorum
                                                                    quasi</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="entry col-12">
                                                <div class="grid-inner row">
                                                    <div class="col">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Debitis nihil placeat, illum est
                                                                    nisi</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4">

                            <div class="row col-mb-50">
                                <div class="col-md-4 col-lg-12">
                                    <div class="widget">

                                        <div class="row col-mb-30">
                                            <div class="col-lg-6">
                                                <div class="counter counter-small"><span data-from="50"
                                                        data-to="15065421" data-refresh-interval="80"
                                                        data-speed="3000" data-comma="true"></span></div>
                                                <h5 class="mb-0">Total Downloads</h5>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="counter counter-small"><span data-from="100"
                                                        data-to="18465" data-refresh-interval="50" data-speed="2000"
                                                        data-comma="true"></span></div>
                                                <h5 class="mb-0">Clients</h5>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-5 col-lg-12">
                                    <div class="widget subscribe-widget">
                                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing
                                            Offers &amp; Inside Scoops:</h5>
                                        <div class="widget-subscribe-form-result"></div>
                                        <form id="widget-subscribe-form" action="include/subscribe.php"
                                            method="post" class="mb-0">
                                            <div class="input-group mx-auto">
                                                <div class="input-group-text"><i class="bi-envelope-plus"></i></div>
                                                <input type="email" id="widget-subscribe-form-email"
                                                    name="widget-subscribe-form-email"
                                                    class="form-control required email"
                                                    placeholder="Enter your Email">
                                                <button class="btn btn-success" type="submit">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-3 col-lg-12">
                                    <div class="widget">

                                        <div class="row col-mb-30">
                                            <div class="col-6 col-md-12 col-lg-6 d-flex align-items-center">
                                                <a href="#"
                                                    class="social-icon text-white border-transparent bg-facebook me-2 mb-0 float-none">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                                <a href="#" class="ms-1"><small class="d-block"><strong>Like
                                                            Us</strong><br>on Facebook</small></a>
                                            </div>
                                            <div class="col-6 col-md-12 col-lg-6 d-flex align-items-center">
                                                <a href="#"
                                                    class="social-icon text-white border-transparent bg-rss me-2 mb-0 float-none">
                                                    <i class="fa-solid fa-rss"></i>
                                                    <i class="fa-solid fa-rss"></i>
                                                </a>
                                                <a href="#" class="ms-1"><small
                                                        class="d-block"><strong>Subscribe</strong><br>to RSS
                                                        Feeds</small></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div><!-- .footer-widgets-wrap end -->

            </div>

            <!-- Copyrights
   ============================================= -->
            <div id="copyrights">
                <div class="container">

                    <div class="row col-mb-30">

                        <div class="col-md-6 text-center text-md-start">
                            Copyrights &copy; 2023 All Rights Reserved by Canvas Inc.<br>
                            <div class="copyright-links"><a href="#">Terms of Use</a> / <a
                                    href="#">Privacy Policy</a></div>
                        </div>

                        <div class="col-md-6 text-center text-md-end">
                            <div class="d-flex justify-content-center justify-content-md-end mb-2">
                                <a href="#" class="social-icon border-transparent si-small h-bg-facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>

                                <a href="#" class="social-icon border-transparent si-small h-bg-x-twitter">
                                    <i class="fa-brands fa-x-twitter"></i>
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>

                                <a href="#" class="social-icon border-transparent si-small h-bg-google">
                                    <i class="fa-brands fa-google"></i>
                                    <i class="fa-brands fa-google"></i>
                                </a>

                                <a href="#" class="social-icon border-transparent si-small h-bg-pinterest">
                                    <i class="fa-brands fa-pinterest-p"></i>
                                    <i class="fa-brands fa-pinterest-p"></i>
                                </a>

                                <a href="#" class="social-icon border-transparent si-small h-bg-vimeo">
                                    <i class="fa-brands fa-vimeo-v"></i>
                                    <i class="fa-brands fa-vimeo-v"></i>
                                </a>

                                <a href="#" class="social-icon border-transparent si-small h-bg-github">
                                    <i class="fa-brands fa-github"></i>
                                    <i class="fa-brands fa-github"></i>
                                </a>

                                <a href="#" class="social-icon border-transparent si-small h-bg-yahoo">
                                    <i class="fa-brands fa-yahoo"></i>
                                    <i class="fa-brands fa-yahoo"></i>
                                </a>

                                <a href="#" class="social-icon border-transparent si-small me-0 h-bg-linkedin">
                                    <i class="fa-brands fa-linkedin"></i>
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </div>

                            <i class="bi-envelope"></i> info@canvas.com <span class="middot">&middot;</span> <i
                                class="fa-solid fa-phone"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i
                                class="bi-skype"></i> CanvasOnSkype
                        </div>

                    </div>

                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
 ============================================= -->
    <div id="gotoTop" class="uil uil-angle-up"></div>

    <!-- JavaScripts
 ============================================= -->
    <script src={{ asset('assets/js/plugins.min.js') }}></script>
    <script src={{ asset('assets/js/functions.bundle.js') }}></script>

</body>

</html>
