@extends('template.navbar')
@section('content')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        }

        .card-footer i {
            transition: 0.3s;
        }

        .card-footer i:hover {
            transform: scale(1.2);
        }
    </style>

    <!-- start banner Area -->
    <section class="banner-area relative " id="home" data-parallax="scroll"
        data-image-src={{ asset('assets/img/Raja_Ampat,_Mutiara_Indah_di_Timur_Indonesia.jpg') }}>
        <div class="overlay-bg overlay"></div>
        <div class="container">
            <div class="row fullscreen">
                <div class="banner-content d-flex align-items-center col-lg-12 col-md-12">
                    <h1>
                        A Discount Toner Cartridge <br>
                        Is Better Than Ever.
                    </h1>
                </div>
                <div class="head-bottom-meta d-flex justify-content-between align-items-end col-lg-12">
                    <div class="col-lg-6 flex-row d-flex meta-left no-padding">

                    </div>
                    <div class="col-lg-6 flex-row d-flex meta-right no-padding justify-content-end">
                        <div class="user-meta">
                            <h4 class="text-white">Naufal </h4>
                            <p>04 Feb, 2025 11:21 am</p>
                        </div>
                        <img class="img-fluid user-img" src="img/user.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <section class="category-popular">
        <div class="container">
            
        </div>
    </section>


    <!-- Start category Area -->
    <section class="category-area section-gap" id="news">
        <div class="container">
            <!-- Judul Section -->
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-40 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-3" data-aos="fade-up" data-aos-delay="400">Latest News from All Categories</h1>
                        <p data-aos="fade-up" data-aos-delay="500">
                            Temukan berita terbaru dan menarik dari berbagai kategori. Jangan lewatkan informasi terkini
                            yang bisa memperkaya wawasan Anda!
                        </p>
                    </div>
                </div>
            </div>

            <!-- Blog Wisata -->
            <div class="row text-center col-12" data-aos="fade-up" data-aos-delay="600">
                @if ($blogs->isEmpty())
                    <div class="col-12 d-flex justify-content-center align-items-center" style="height: 200px;">
                        <p class="text-muted fs-4 font-weight-bold">Belum ada Blog yang diposting</p>
                    </div>
                @else
                    @foreach ($blogs as $key => $item)
                        <div class="col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="{{ 600 + $key * 100 }}">
                            <div class="card border-0 shadow-sm h-100">
                                <a href="/detail/{{ $item->id }}">
                                    <img class="card-img-top rounded"
                                        style="height: 180px; object-fit: cover; object-position: top"
                                        src="{{ asset('storage/foto/' . $item->foto) }}" alt="">

                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="text-dark">{{ $item->title }}</a>
                                        </h5>
                                        <p class="text-muted small mb-2" style="font-size: 13px">
                                            <i class="fas fa-map-marker-alt mr-1"></i>{{ $item->location }}
                                        </p>
                                        <p class="text-muted small mb-2" style="font-size: 13px">
                                            <i class="fas fa-eye mr-1"></i>{{ $item->view_count }} views
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            <!-- Tautan Pagination -->
            <div class="row justify-content-center">
                {{ $blog->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </section>


    <!-- End category Area -->

    <!-- Start Topic Area -->
    <section class="travel-area section-gap" id="travel">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10" data-aos="fade-up" data-aos-delay="300">Hot topics from Travel Section</h1>
                        <p data-aos="fade-up" data-aos-delay="400">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @if ($topic->isEmpty())
                    <div class="col-12 d-flex justify-content-center align-items-center mt-5" data-aos="fade-up"
                        data-aos-delay="600" style="height: 200px;">
                        <p class="text-muted fs-4 font-weight-bold">Belum ada Blog yang diposting</p>
                    </div>
                @else
                    @foreach ($topic as $key => $item)
                        <div class="col-md-6 mb-4" style="margin-top: 7 0px">
                            <div class="card shadow-sm border-0 p-3 rounded-lg" data-aos="fade-up"
                                data-aos-delay="{{ 600 + $key * 100 }}" style="transition: 0.3s ease-in-out; ">

                                <div class="d-flex">
                                    <!-- Gambar -->
                                    <img class="img-fluid rounded flex-shrink-0 "
                                        style="width: 120px; height: 120px; object-fit: cover; object-position: top; border: 3px solid #f8f9fa; border: 3px solid #f8f9fa;"
                                        src="{{ asset('storage/foto/' . $item->foto) }}" alt="">

                                    <div class="card-body d-flex flex-column justify-content-between"
                                        style="margin-left: 15px;">
                                        <div>
                                            <!-- Judul dan Tanggal -->
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="mb-1">
                                                    <a href="#"
                                                        class="text-dark font-weight-bold">{{ $item->title }}</a>
                                                </h5>
                                                <small class="text-muted">
                                                    <i class="fas fa-calendar-alt mr-5"></i>
                                                    {{ \Carbon\Carbon::parse($item->date)->translatedFormat('d F Y') }}
                                                </small>
                                            </div>

                                            <!-- Deskripsi -->
                                            <p class="text-muted mt-2 mb-3" style="font-size: 14px;">
                                                {{ \Illuminate\Support\Str::limit($item->desc, 100, '...') }}
                                            </p>
                                        </div>

                                        <!-- Likes & Comments -->
                                        <div class="d-flex justify-content-between align-items-center text-muted">
                                            <p class="mb-0">
                                                <i class="fas fa-heart text-danger"></i> 15 Likes
                                            </p>
                                            <p class="mb-0">
                                                <i class="fas fa-comment text-primary"></i> 02 Comments
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            {{-- <a href="#" class="primary-btn load-more pbtn-2 text-uppercase mx-auto mt-60">Load More </a> --}}

        </div>
    </section>
    <!-- End travel Area -->

    <!-- Start fashion Area -->
    <section class="fashion-area section-gap mb-5 mt-0" id="fashion">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10" data-aos="fade-up" data-aos-delay="300">Fashion News This Week</h1>
                        <p data-aos="fade-up" data-aos-delay="400">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit,
                            sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @if ($fashions->isEmpty())
                    <div class="col-12 d-flex justify-content-center align-items-center mt-5" data-aos="fade-up"
                        data-aos-delay="600" style="height: 200px;">
                        <p class="text-muted fs-4 font-weight-bold">Belum ada Blog yang diposting</p>
                    </div>
                @else
                    @foreach ($fashions as $key => $item)
                        <a href="/detail/{{ $item->id }}">
                            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up"
                                data-aos-delay="{{ 600 + $key * 150 }}">
                                <div class="card border-0 shadow-sm rounded-lg h-100">
                                    <img class="card-img-top rounded-top"
                                        style="height: 250px; object-fit: cover; width: 100%;"
                                        src="{{ asset('storage/foto/' . $item->foto) }}" alt="Fashion Image">


                                    <div class="card-body text-center">
                                        <h5 class="card-title">
                                            <a href="#" class="text-dark font-weight-bold">{{ $item->title }}</a>
                                        </h5>
                                        <p class="text-muted small">{!! Str::limit($item->description, 70) !!}</p>
                                    </div>

                                    <div
                                        class="card-footer bg-white border-0 d-flex justify-content-between text-muted small">
                                        <div class="position-absolute top-0 right-0 m-2">
                                            <a href="javascript:void(0);" class="like-btn text-danger"
                                                data-id="{{ $item->id }}"
                                                style="background: transparent; text-decoration: none;">
                                                @if (Auth::check() && $item->likes->contains(Auth::user()->id))
                                                    <i class="fas fa-heart text-danger"></i> <span
                                                        class="likes-count">{{ $item->likes_count }} Like </span>
                                                @else
                                                    <i class="fas fa-heart text-danger"></i><span
                                                        class="likes-count">{{ $item->likes_count }} Like</span>
                                                @endif
                                            </a>
                                        </div>
                                        <p class="mb-0 d-flex align-items-center">
                                            <i class="fas fa-comment text-primary mr-1"></i> {{ $formatComments }}
                                            Comments
                                        </p>
                                        <p class="mb-0 d-flex align-items-center">
                                            <i class="fas fa-eye mr-1"></i> {{ $item->view_count }} Views
                                        </p>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <p class="text-muted small mb-1">
                                            {{ \Carbon\Carbon::parse($item->date)->translatedFormat('d F Y') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>

        </div>
    </section>
    <!-- End fashion Area -->

    <footer class="footer-area section-gap mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-12">
                    <div class="single-footer-widget">
                        <h6>Top Products</h6>
                        <ul class="footer-nav">
                            <li><a href="#">Managed Website</a></li>
                            <li><a href="#">Manage Reputation</a></li>
                            <li><a href="#">Power Tools</a></li>
                            <li><a href="#">Marketing Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6  col-md-12">
                    <div class="single-footer-widget newsletter">
                        <h6>Newsletter</h6>
                        <p>You can trust us. we only send promo offers, not a single spam.</p>
                        <div id="mc_embed_signup">
                            <form target="_blank" novalidate="true"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">

                                <div class="form-group row" style="width: 100%">
                                    <div class="col-lg-8 col-md-12">
                                        <input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                        <div style="position: absolute; left: -5000px;">
                                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1"
                                                value="" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-12">
                                        <button class="nw-btn primary-btn">Subscribe<span
                                                class="lnr lnr-arrow-right"></span></button>
                                    </div>
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-12">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Instragram Feed</h6>
                        <ul class="instafeed d-flex flex-wrap">
                            <li><img src="img/i1.jpg" alt=""></li>
                            <li><img src="img/i2.jpg" alt=""></li>
                            <li><img src="img/i3.jpg" alt=""></li>
                            <li><img src="img/i4.jpg" alt=""></li>
                            <li><img src="img/i5.jpg" alt=""></li>
                            <li><img src="img/i6.jpg" alt=""></li>
                            <li><img src="img/i7.jpg" alt=""></li>
                            <li><img src="img/i8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row footer-bottom d-flex justify-content-between">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <p class="col-lg-8 col-sm-12 footer-text">Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function shareToSocialMedia(blogId) {
            const url = `https://example.com/detail/${blogId}`;
            const text = `Check out this amazing blog post!`;
            if (navigator.share) {
                navigator.share({
                    title: 'Bagikan Blog',
                    text: text,
                    url: url
                }).then(() => {
                    console.log('Blog post shared successfully');
                }).catch((error) => {
                    console.error('Error sharing blog post:', error);
                });
            } else {
                alert('Browser Anda tidak mendukung fitur berbagi.');
            }
        }
    </script>

    <script>
        $(document).ready(function() {
            $('.like-btn').click(function() {
                var blogId = $(this).data('id');
                var likeBtn = $(this);

                $.ajax({
                    url: '/like/' + blogId,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        var likesCount = likeBtn.find('.likes-count');
                        likesCount.text(response.likes_count);

                        if (response.liked) {
                            likeBtn.html(
                                '<i class="fas fa-heart text-danger"></i> <span class="likes-count">' +
                                response.likes_count + '</span> Like ');
                        } else {
                            likeBtn.html(
                                '<i class="far fa-heart text-danger"></i> <span class="likes-count">' +
                                response.likes_count + '</span> Like');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            });
        });
    </script>



    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src={{ asset('templates/js/vendor/jquery-2.2.4.min.js') }}></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src={{ asset('templates/js/vendor/bootstrap.min.js') }}></script>
    <script src={{ asset('templates/js/jquery.ajaxchimp.min.js') }}></script>
    <script src={{ asset('templates/js/parallax.min.js') }}></script>
    <script src={{ asset('templates/js/owl.carousel.min.js') }}></script>
    <script src={{ asset('templates/js/jquery.magnific-popup.min.js') }}></script>
    <script src={{ asset('templates/js/jquery.sticky.js') }}></script>
    <script src={{ asset('templates/js/main.js') }}></script>
@endsection
