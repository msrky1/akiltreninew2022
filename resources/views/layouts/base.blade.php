<!doctype html>
<html class="no-js" lang="Tr/tr">

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Akıl Treni Koleji">
    <!-- description -->
    <meta name="description" content="Akıl Treni Koleji">
    <!-- keywords -->
    <meta name="keywords" content="Akıl Treni Koleji">
    <!-- Page Title -->
    <title>Akıl Treni Koleji</title>
    <link href="{{asset('assets')}}/kids//images/favicon.ico" rel="icon">
    <link rel="stylesheet" href="{{asset('assets')}}/css/bundle.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/kids//css/tooltipster.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/revolution-settings.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/kids//css/revolution/navigation.css">
    <link href="{{asset('assets')}}/css/LineIcons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets')}}/kids//css/custom.css">
    <link rel="stylesheet" href="{{asset('assets')}}/kids//css/style.css">
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Y2BNC5WD90');
</script>
        @livewireStyles
    </head>

    <body>

        <livewire:project.menu-component />
       
        <!-- Header Area End Here -->

{{ $slot }}


 <livewire:project.footer-component /> 
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
        @livewireScripts
    </body>

</html>
