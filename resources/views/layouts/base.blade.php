<!doctype html>
<html class="no-js" lang="Tr/tr">

    <head>

     

        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Çağraş Hukuk & Arabuluculuk Bürosu</title>
                <meta name="description" content="Çağraş hukuk ve Arabuluculuk Bürosu; 2002 yılında Av. Eylem Çağraş tarafından Kahramanmaraş’ta kuruldu. Büromuzda özellikle bankacılık sektörünü kapsayan dava, hukuki danışmanlık ve icra takibi işleri yürütülmektedir. Deneyimli ve konusunda uzman; üç avukat, bir stajyer avukat ve onbir büro çalışanından oluşan ekibimiz dinamik yapısıyla tüm hizmetleri eksiksiz olarak sunmaktadır.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="keywords" content="Kahramanmaraş Hukuk ve Arabuluculuk Bürosu, Çağraş Hukuk Bürosu, Hukuk, İcra Bürosu, Eylem Çağraş, Kahramanamraş Arabuluculuk, Adliye, İcra Takibi, 
        
         Arabuluculuk, İcra ve İflas Hukuku, Tazminat Davaları, İş Hukuku ve İşveren Davaları, Aile Hukuku ve Boşanma Davaları,
         Bankacılık ve Finans Hukuku, Aile Hukuku ve Boşanma Davaları, Bankacılık ve Finans Davaları, 
         Ceza Hukuku ve Ceza Davaları, Miras Hukuku ve Miraz Davaları, Taşınmaz Hukuku ve Gayrimenkul, Tüketici Hakları Davaları,
         Ticaret ve Şirketler Hukuku, Sigorta Hukuku, Kira Hukuku ve Tahliye Davaları, 
         İdare Hukuku ve Vergi Davaları 

        "> 
        <!-- favicon

        

            	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets')}}/img/favicon.png">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
        <!-- Bootstrap CSS      
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css">
        <!-- nivo slider CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/custom-slider/css/nivo-slider.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('assets')}}/custom-slider/css/preview.css" type="text/css" media="screen">
        <!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.css">
        <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.css">
        <link rel="stylesheet" href="{{asset('assets')}}/css/owl.transitions.css">
        <!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/jquery-ui.css">
        <!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/meanmenu.min.css">
        <!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/animate.css">
        <!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/normalize.css">
        <!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/main.css">
        <!-- nivo slider CSS
        ============================================ -->
        <link rel="stylesheet" href="{{asset('assets')}}/custom-slider/css/nivo-slider.css" type="text/css">
        <link rel="stylesheet" href="{{asset('assets')}}/custom-slider/css/preview.css" type="text/css" media="screen">
        <!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets')}}/style.css">
        <!-- Responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
        <!-- modernizr JS
		============================================ -->
        <script src="{{asset('assets')}}/js/vendor/modernizr-2.8.3.min.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y2BNC5WD90"></script>
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
        <!-- Footer Area End Here -->
        <!-- Preloader Start Here -->
        <div id="preloader"></div>
        <!-- Preloader End Here -->
        <!-- jquery
		============================================ -->
        <script src="{{asset('assets')}}/js/vendor/jquery-1.11.3.min.js"></script>

        
        <!-- bootstrap JS
		============================================ -->
        <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
        <!-- wow JS
		============================================ -->
        <script src="{{asset('assets')}}/js/wow.min.js"></script>
        <!-- price-slider JS
		============================================ -->
        <script src="{{asset('assets')}}/js/jquery-price-slider.js"></script>
        <!-- meanmenu JS
		============================================ -->
        <script src="{{asset('assets')}}/js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
		============================================ -->
        <script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
        <!-- scrollUp JS
		============================================ -->
        <script src="{{asset('assets')}}/js/jquery.scrollUp.min.js"></script>
        <!-- plugins JS
		============================================ -->
        <script src="{{asset('assets')}}/js/plugins.js"></script>
        <!-- Nivo slider js
        ============================================ -->
        <script src="{{asset('assets')}}/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="{{asset('assets')}}/custom-slider/home.js" type="text/javascript"></script>
        <!-- main JS
		============================================ -->
        <script src="{{asset('assets')}}/js/main.js"></script>

        @livewireScripts
    </body>

</html>
