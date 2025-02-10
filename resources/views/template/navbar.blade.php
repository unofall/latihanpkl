<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Blogger</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
        CSS
        ============================================= -->
    <link rel="stylesheet" href={{ asset('templates/css/linearicons.css') }}>
    <link rel="stylesheet" href={{ asset('templates/css/font-awesome.min.css') }}>
    <link rel="stylesheet" href={{ asset('templates/css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ asset('templates/css/owl.carousel.css') }}>
    <link rel="stylesheet" href={{ asset('templates/css/main.css') }}>
</head>

<body>

    <!-- Start Header Area -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('templates/img/logo.png') }}" alt="Logo" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">

                    <li class="nav-item me-3">
                        @if (Auth::user()->role === 'Admin')
                            <a class="nav-link" href="/admin">Home</a>
                    </li>
                @else
                    <a class="nav-link" href="/show">Home</a></li>
                    @endif
                    <li class="nav-item me-3"><a class="nav-link" href="#news">News</a></li>
                    <li class="nav-item me-3"><a class="nav-link" href="#travel">Travel</a></li>
                    <li class="nav-item me-3"><a class="nav-link" href="#fashion">Fashion</a></li>
                    <li class="nav-item me-3"><a class="nav-link" href="#team">Team</a></li>
                </ul>
                <ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="" id="profileDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('assets/img/Meme.jpg') }}" alt="User"
                                    class="rounded-circle col-md-7" height="25" width="50">
                                <span class="ms-2"
                                    style="font-size: 12px; font-weight: 400">{{ Auth::user()->role }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="/profile">My Profile</a></li>
                                <li><a class="dropdown-item" href="/settings">Settings</a></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header Area -->



    <div class="container-fluid pb-5">
        @yield('content')
    </div>

</body>
