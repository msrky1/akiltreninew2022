<header>
    <div class="header-area-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-sm-12">
                    <div class="header-top-left">
                        <p>
                            <i class="fa fa-map-marker"></i>Kahramanmaraş/Onikişubat
                        </p>
                    </div>
                </div>


                <nav>



                    <!--       @foreach ($setting as $s)
<a target="_blank" class="param"
                                        href="https://wa.me/{{ $s->whatsapp }}">
                                        <svg id = "whatsapp-js" xmlns="http://www.w3.org/2000/svg" width="50" height="30"
                                            fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path
                                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                        </svg> </a>
@endforeach
                                    -->

                    <style>
                        .text-editon {

                            font-family: 'Montserrat';
                            font-size: 18px;

                            transition: 0.5ms ease;
                            top: 24%;


                        }

                        .text-editon-mobile {

                            font-family: 'Montserrat';
                            font-size: 16px;
                            padding: 0px 0px 0px 0px;
                           
                            transition: 0.5ms ease;
                            top: 10%;


                        }

                    </style>


                    <script>
                        var i = 0;

                        function change() {
                            var doc = document.getElementById("colorTime");
                            var color = ["white", "#FF0000", "#6f0"];
                            doc.style.color = color[i];
                            i = (i + 1) % color.length;
                        }
                        setInterval(change, 800);
                    </script>

                </nav>



            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="main-header-area" id="ust">
        <div class="container">

            <div class="row">




                <div class="col-lg-2 col-md-2 col-sm-12 col-sm-12">
                    <div class="logo-area">
                        <a href="/">
                            <img src="{{ asset('assets') }}/img/logo001.png" alt="logo">
                        </a>
                    </div>


                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-sm-12">
                    <div class="main-menu-area">
                        <nav>
                            <ul>
                                <li class="current">
                                    <a href="/">
                                        <i class="fa fa-home"></i>
                                    </a>

                                </li>
                                <li>
                                    <a href="/hakkimizda">Hakkımızda</a>
                                </li>
                                <li>
                                    <a href="#">FAALİYET ALANLARIMIZ</a>
                                    <ul>
                                        @foreach ($whatdo as $item)
                                            <li>
                                                <a href="{{ route('whatdo.detail', $item->slug) }}">{{ $item->title }}
                                                </a>
                                            </li>
                                        @endforeach





                                    </ul>
                                </li>
                                <li>
                                    <a href="/is-ortaklarimiz">İŞ ORTAKLARIMIZ</a>
                                </li>

                                <li>
                                    <a href="#">Sayfalar</a>
                                    <ul>
                                        <li>
                                            <a href="/ekibimiz">Ekibimiz</a>
                                        </li>
                                        <li>
                                            <a href="/blog">Blog </a>
                                        </li>
                                        <li>
                                            <a href="/sss">Sık Sorulan Sorular </a>
                                        </li>
                                        <li>
                                            <a href="/galeri">Galeri</a>
                                        </li>
                                        <li>
                                            <a href="/iletisim">İletişim</a>

                                        </li>
                                    </ul>
                                </li>



                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-sm-12">
                    <div class="header-top-right">

                        <div class="online-bar"> 

                            <a target="_blank" class="param"
                                href="https://pos.param.com.tr/Tahsilat/Default.aspx?k=56aa4a87-b0c3-4713-8722-0afae9cbaac3">
                                <h1 class="text-editon" id="colorTime">


                                    Online Ödeme Sistemi </h1>    </a>


                        </div>

                        <!--    <div class="col-lg-2 col-md-2 col-sm-2 hidden-sm col-sm-12">
                    <div class="search-area">
                        <span>
                            <i class="fa fa-search"></i>
                            <i class="fa-brands fa-whatsapp"></i>
                        </span>
                        <input type="text" placeholder="Blogda ara">
                    </div>
                </div> -->
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li class="current">
                                            <a href="/">
                                                <i class="fa fa-home"></i>
                                            </a>

                                        </li>
                                        <li>
                                            <a href="/hakkimizda">Hakkımızda</a>
                                        </li>
                                        <li>
                                            <a href="#">FAALİYET ALANLARIMIZ</a>
                                            <ul>
                                                @foreach ($whatdo as $item)
                                                    <li>
                                                        <a href="{{ route('whatdo.detail', $item->slug) }}">{{ $item->title }}
                                                        </a>
                                                    </li>
                                                @endforeach





                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/is-ortaklarimiz">İŞ ORTAKLARIMIZ</a>
                                        </li>
                                        <li>
                                            <a href="/ekibimiz">EKİBİMİZ</a>
                                        </li>
                                        <li>
                                            <a href="#">Sayfalar</a>
                                            <ul>
                                                <li>
                                                    <a href="/blog">Blog </a>
                                                </li>
                                                <li>
                                                    <a href="/sss">Sık Sorulan Sorular </a>
                                                </li>
                                                <li>
                                                    <a href="/galeri">Galeri</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="/iletisim">İLETİŞİM</a>

                                        </li>




                                    </ul>
                                    <div class="online-bar-mobile">         

                                        <a target="_blank" class="param"
                                            href="https://pos.param.com.tr/Tahsilat/Default.aspx?k=56aa4a87-b0c3-4713-8722-0afae9cbaac3">
                                            <h4 class="text-editon-mobile" id="colorTime">


                                                Online Ödeme Sistemi </h4>
                                        </a>

                                    </div>


                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- mobile-menu-area end -->
</header>




<script>
    const ust = document.querySelector('#ust');

    window.addEventListener("scroll", function() {


        // console.log(window.scrollY);

        if (window.scrollY > 50) {

            ust.style.position = "fixed";
            ust.style.width = "100%";
            ust.style.top = "0px";
            ust.style.background = "white";



        } else {

            ust.style.position = "static";
            ust.style.background = "white";
        }

    })
</script>
