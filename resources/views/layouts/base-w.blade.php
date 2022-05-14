<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Themes Industry">
    <!-- description -->
    <meta name="description" content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose studio and portfolio HTML5 template with 8 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="Creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, studio, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq">
    <!-- Page Title -->
    <title>Akıl Treni Koleji</title>
    {{-- <link href="{{asset('assets')}}/images/favicon.ico" rel="icon"> --}}
    <link href="{{asset('assets')}}/kids//images/favicon.ico" rel="icon">
    <link rel="stylesheet" href="{{asset('assets')}}/css/bundle.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/kids/css/tooltipster.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/revolution-settings.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/kids/css/revolution/navigation.css">
    <link href="{{asset('assets')}}/css/LineIcons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets')}}/kids/css/custom.css">
    <link rel="stylesheet" href="{{asset('assets')}}/kids/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/kids/css2.css">
    <link rel="stylesheet" href="{{asset('assets')}}/kids/css.css">

</head>
    <body>
        <!--PreLoader-->
        <div class="loader">
            <div class="loader-spinner"></div>
        </div>

        <header class="site-header" id="header">
            <nav class="navbar navbar-expand-lg transparent-bg static-nav">
                <div class="container">
                    <a class="navbar-brand" href="index-logistic.html">
                        <img src="{{asset('assets')}}/kids/images/logo-white.png" alt="logo" class="logo-default">
                    <img src="{{asset('assets')}}/kids/images/logo-white.png" alt="logo" class="logo-scrolled">
                    </a>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Anasayfa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/basvurular">Başvuru</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="/duyurular">Duyurular</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/galeri">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/hakkimizda">Hakkımızda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/iletisim">İletişim</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--side menu open button-->
                <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
                    <span></span> <span></span> <span></span>
                </a>
            </nav>
            <!-- side menu -->
            <div class="side-menu opacity-0 bg-yellow">
                <div class="overlay"></div>
                <div class="inner-wrapper">
                    <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
                    <nav class="side-nav w-100">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Anasayfa</a>
                            </li>
                          
                            <li class="nav-item">
                                <a class="nav-link" href="/hakkimizda">Hakkımızda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/duyurular">Duyurular</a>
                            </li>
                          
                            <li class="nav-item">
                                <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavPages2">
                                    Site <i class="fas fa-chevron-down"></i>
                                </a>
                                <div id="sideNavPages2" class="collapse sideNavPages">
                                    <ul class="navbar-nav">
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="/blog">Blog</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/galeri">Galeri</a>
                            </li>
                          

                            <li class="nav-item">
                                <a class="nav-link" href="/iletisim">İletişim</a>
                            </li>
                          
                          
                        </ul>
                    </nav>
                    <div class="side-footer w-100">
                        <ul class="social-icons-simple white top40">
                            <li><a href="javascript:void(0)" class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                            <li><a href="javascript:void(0)" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
                            <li><a href="javascript:void(0)" class="insta"><i class="fab fa-instagram"></i> </a> </li>
                        </ul>
                        <p class="whitecolor">&copy; Akil Treni Koleji</p>
                    </div>
                </div>
            </div>
            <div id="close_side_menu" class="tooltip"></div>
            <!-- End side menu -->
        </header>
   

        {{$slot}}


        <livewire:project.footer-component /> 
    <!--Footer ends-->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('assets')}}/js/bundle.min.js"></script>
    <!--to view items on reach-->
    <script src="{{asset('assets')}}/js/jquery.appear.js"></script>
    <!--Owl Slider-->
    <script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
    <!--Parallax Background-->
    <script src="{{asset('assets')}}/js/parallaxie.min.js"></script>
    <!--Cubefolio Gallery-->
    <script src="{{asset('assets')}}/js/jquery.cubeportfolio.min.js"></script>
    <!--Fancybox js-->
    <script src="{{asset('assets')}}/js/jquery.fancybox.min.js"></script>
    <!--wow js-->
    <script src="{{asset('assets')}}/js/wow.min.js"></script>
    <!--number counters-->
    <script src="{{asset('assets')}}/kids//js/jquery-countTo.js"></script>
    <!--tooltip js-->
    <script src="{{asset('assets')}}/kids//js/tooltipster.min.js"></script>
    {{-- <script src="{{asset('assets')}}/js/slider.js"></script> --}}
    <!-- REVOLUTION JS FILES -->
    <script src="{{asset('assets')}}/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION EXTENSIONS -->
    <script src="{{asset('assets')}}/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="{{asset('assets')}}/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="{{asset('assets')}}/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="{{asset('assets')}}/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="{{asset('assets')}}/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="{{asset('assets')}}/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="{{asset('assets')}}/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="{{asset('assets')}}/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="{{asset('assets')}}/js/extensions/revolution.extension.video.min.js"></script>
    <!--custom functions and script-->
    <script src="{{asset('assets')}}/kids//js/functions.js"></script>

</body>
</html>