<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/hc/assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="/assets/hc/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/hc/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/hc/assets/css/slicknav.css">
    <link rel="stylesheet" href="/assets/hc/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/hc/assets/css/gijgo.css">
    <link rel="stylesheet" href="/assets/hc/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/hc/assets/css/animated-headline.css">
    <link rel="stylesheet" href="/assets/hc/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/hc/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/hc/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/hc/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/hc/assets/css/nice-select.css">
    <link rel="stylesheet" href="/assets/hc/assets/css/style.css">
</head>
<body>
    @include('sweetalert::alert')
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="/assets/hc/assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <h1><img src="/assets/hc/assets/img/logo/logo.png" style="width: 30px;" alt="">{{ env('APP_NAME', 'Kesehatan') }}</h1>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/about">About</a></li>
                                            <li><a href="/jantung">Pitung</a></li>
                                            <li><a href="/home/artikel">Artikel</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-15">
                                    <a href="/dashboard" class="btn header-btn">{{ (auth()->check()) ? 'Dashboard' : 'Login' }}</a>
                                </div>
                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    @yield('content')
<footer>
    <div class="footer-wrappr section-bg3" data-background="/assets/hc/assets/img/gallery/footer-bg.png">
        <div class="footer-area footer-padding ">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo mb-25">
                                <h1>{{ env('APP_NAME', 'Kesehatan') }}</h1>
                            </div>
                            <div class="header-area">
                                <div class="main-header main-header2">
                                    <div class="menu-main d-flex align-items-center justify-content-start">
                                        <!-- Main-menu -->
                                        <div class="main-menu main-menu2">
                                            <nav> 
                                                <ul>
                                                    <li><a href="/">Home</a></li>
                                                    <li><a href="/about">About</a></li>
                                                    <li><a href="/jantung">Pitung</a></li>
                                                    <li><a href="/home/artikel">Artikel</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social mt-50">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="footer-tittle mb-50">
                                <h4>{{ env('APP_URL', 'ERROR...') }}</h4>
                            </div>
                            
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Dibuat dengan laravel 10.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row">
                        <div class="col-xl-10 ">
                            <div class="footer-copy-right">
                             <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="/assets/hc/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="/assets/hc/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="/assets/hc/assets/js/popper.min.js"></script>
<script src="/assets/hc/assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="/assets/hc/assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="/assets/hc/assets/js/owl.carousel.min.js"></script>
<script src="/assets/hc/assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="/assets/hc/assets/js/wow.min.js"></script>
<script src="/assets/hc/assets/js/animated.headline.js"></script>
<script src="/assets/hc/assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="/assets/hc/assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="/assets/hc/assets/js/jquery.nice-select.min.js"></script>
<script src="/assets/hc/assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="/assets/hc/assets/js/jquery.counterup.min.js"></script>
<script src="/assets/hc/assets/js/waypoints.min.js"></script>
<script src="/assets/hc/assets/js/jquery.countdown.min.js"></script>
<script src="/assets/hc/assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="/assets/hc/assets/js/contact.js"></script>
<script src="/assets/hc/assets/js/jquery.form.js"></script>
<script src="/assets/hc/assets/js/jquery.validate.min.js"></script>
<script src="/assets/hc/assets/js/mail-script.js"></script>
<script src="/assets/hc/assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="/assets/hc/assets/js/plugins.js"></script>
<script src="/assets/hc/assets/js/main.js"></script>

</body>
</html>