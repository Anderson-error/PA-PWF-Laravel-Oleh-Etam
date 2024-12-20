<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Oleh Etam</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('user_assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/linericon/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_assets/css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_assets/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/lightbox/simpleLightbox.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/nice-select/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('user_assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_assets/css/responsive.css') }}" />
</head>

<body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light w-100">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{ url('/') }}">
                        <img src="{{ asset('user_assets/img/logo.png') }}" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
                        <div class="row w-100 mr-0">
                            <div class="col-lg-7 pr-0">
                                <ul class="nav navbar-nav center_nav pull-right">
                                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="nav-item {{ request()->is('shop') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ url('/shop') }}">Shop</a>
                                    </li>
                                    <li class="nav-item {{ request()->is('blog') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    @yield('content')

    <!--================ start footer Area  =================-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 mt-5 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/shop') }}">Shop</a></li>
                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 mt-5 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                required="" type="email">
                            <button class="click-btn btn btn-default">Subscribe</button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                    type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom row align-items-center">
                <p class="footer-text mb-3 m-0 col-lg-8 col-md-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | Created <i aria-hidden="true"></i> by <a
                        href="https://si.ft.unmul.ac.id/" target="_blank">SI UNMUL 22</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 mb-3 col-md-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('user_assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('user_assets/js/popper.js') }}"></script>
    <script src="{{ asset('user_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user_assets/js/stellar.js') }}"></script>
    <script src="{{ asset('user_assets/vendors/lightbox/simpleLightbox.min.js') }}"></script>
    <script src="{{ asset('user_assets/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('user_assets/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('user_assets/vendors/isotope/isotope-min.js') }}"></script>
    <script src="{{ asset('user_assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user_assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('user_assets/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('user_assets/vendors/counter-up/jquery.counterup.js') }}"></script>
    <script src="{{ asset('user_assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('user_assets/js/theme.js') }}"></script>
    <script src="{{ asset('user_assets/js/main.js') }}"></script>

</body>

</html>
