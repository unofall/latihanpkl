<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet"> --}}

    <!-- Core Style -->
    <link rel="stylesheet" href={{ asset('assets/style.css') }}>

    <!-- Font Icons -->
    <link rel="stylesheet" href={{ asset('assets/css/font-icons.css') }}>

    <!-- Plugins/Components CSS -->
    <link rel="stylesheet" href={{ asset('assets/css/swiper.css') }}>

    <!-- Custom CSS -->
    <link rel="stylesheet" href={{ asset('assets/css/custom.css') }}>
    <title>Document</title>
</head>
<body>
    <header id="header" class="full-header">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row">

                    <!-- Logo
  ============================================= -->
                    <div id="logo">
                        <a href="index.html">
                            <img class="logo-default" src={{ asset('assets/images/logo@2x.png') }}
                                alt="Canvas Logo">
                            <img class="logo-dark" src={{ asset('assets/images/logo-dark@2x.png') }}
                                alt="Canvas Logo">
                        </a>
                    </div><!-- #logo end -->

                    <div class="header-misc">

                        <!-- Top Search
   ============================================= -->
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

                    <!-- Primary Navigation
  ============================================= -->
                    <nav class="primary-menu">

                        <ul class="menu-container one-page-menu" data-easing="easeInOutExpo" data-speed="1500">
                            <li class="menu-item"><a class="menu-link" href="#" data-href="#home">
                                    <div>Home</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="#"
                                    data-href="#section-about">
                                    <div>About</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="#" data-href="#section-work">
                                    <div>Work</div>
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

    <div class="container pb-5">
        @yield('content')
    </div>

    
    <!-- JavaScripts
 ============================================= -->
 <script src={{ asset('assets/js/plugins.min.js') }}></script>
 <script src={{ asset('assets/js/functions.bundle.js') }}></script>
</body>
</html>