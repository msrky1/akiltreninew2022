<main>

    <!-- slider -->
    <div class="slider-area">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                @foreach ($slider as $s)
                    <img src="{{ asset('storage/image') }}/{{ $s->image }}" alt="image"
                        title="#slider-direction-{{ $s->id }}">
                @endforeach

            </div>
            <!-- direction 1 -->


            @foreach ($slider as $item)
                <div id="slider-direction-{{ $item->id }}" class="t-cn slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-cn s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <div data-wow-delay="0.2s" data-wow-duration="2s"
                                class="tp-caption big-title rs-title customin customout bg-sld-cp-primary wow zoomIn"
                                style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: zoomIn;">


                                <span class="title-builder"> {{ $item->title }} </span>

                            </div>
                            <div data-wow-delay="0.3s" data-wow-duration="3s"
                                class="tp-caption small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme rs-parallaxlevel-0 wow zoomIn"
                                style="visibility: visible; animation-duration: 3s; animation-delay: 0.3s; animation-name: zoomIn;">
                                {!! $item->description !!}
                            </div>
                        </div>
                        <div data-wow-delay="0.4s" data-wow-duration="4s" class="button wow fadeIn"
                            style="visibility: visible; animation-duration: 4s; animation-delay: 0.4s; animation-name: fadeIn;">
                            <a target="_blank" href="{{ $item->link }}" class="btn btn-success">Detaylara Göz Atın</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- direction 2 -->

        </div>
    </div>
    <!-- slider end-->
    
    <div class="our-wining-awards-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wining-section-area">
                        <h2>FAALİYET ALANLARIMIZ</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="wining-section">
                <div class="row">

            
                    @foreach ($whatdo as $wh)
                        
             
                    <div class="col-sm-4">
                        <div class="single-wining-section">
                            <div class="image">
                                <a href="{{route('whatdo.detail' , $wh->slug )}}" >
                                 <h1>   {!! $wh->icon !!} </h1>
                                </a>
                            </div>
                        
                            <div class="contact-buttom">
                                <h5 style="font-weight:bold;">{!!  $wh->title = Str::limit($wh->title) !!} </h5>
                            </div>
                     
                            <a href="{{route('whatdo.detail' , $wh->slug )}}"> 
                              <button style="background-color: #004a93; color:white; border-radius:4px; 
                                
                                 padding:10pxpx;
                                
                                " >DETAY</button></a>
                            
                        </div>
                        
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Buttom Area Start Here -->
    <div class="slider-buttom-area">
        <div class="container-fluid acurate">
            <div class="row acurate">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 acurate">
                    <div class="single-slider-buttom-area slider-button-one">
                        <div class="slider-buttom-overlay"></div>
                        <div class="content-area">
                            <div class="first-box-content">
                                <h3>Acil Durumlar</h3>
                                <p>Acil Dumlar İçin Bizi Arayın!</p>
                                <p class="call-now">Şimdi Arayın</p>
                                <p class="phone-number">
                                    <a href="tel:+4411122233344">
                                        @foreach ($setting as $s)
                                            {{ $s->contact }}
                                        @endforeach
                                    </a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 acurate">
                    <div class="single-slider-buttom-area slider-button-two">
                        <div class="slider-buttom-overlay"></div>
                        <div class="content-area">
                            <h3>Hukuki Yardıma mı ihtiyacınız var?</h3>
                            <p>Bizlere WhatsApp tan ulaşabilirsiniz.
                            </p>
                            <a style="background-color: green; color: white " href="https://wa.me/{{ $s->whatsapp }}"
                                class="call-us-buttom">WhatsApp</a>

                        </div>
                    </div>

                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 acurate">
                    <div class="single-slider-buttom-area slider-button-three">
                        <div class="slider-buttom-overlay"></div>
                        <div class="content-area">
                            <h3>Çalışma Saatleri</h3>
                            <ul>
                                <li>Pazartesi – Cuma

                                    <span> Sabah 8.00 - Akşam 18.00 </span>


                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Buttom Area End Here -->
    <!-- About Lawyer Area Start Here -->
    <div class="about-lawyer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="about-lawyer-featured-image">
                        <a href="/hakkimizda">
                            <img  width="100%" src="{{ asset('assets') }}/img/image/ekip.jpg" alt="ofis">
                        </a>
                    </div>
                </div>
                @foreach ($about as $a)
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="about-content-area">
                            <h1>ÇAĞRAŞ </h1>

                            <h2>HUKUK & ARABULUCULUK BÜROSU </h2>

                            <p>{{ $a->title_one }}</p>
                            <ul>
                                <li>Uzman Avukat Kadrosu</li>
                                <li>Hızlı Destek</li>
                                <li>Çözüm Odaklı Çalışmalar</li>

                            </ul>
                            ve daha fazlası için bize ulaşın...
                            <div class="read-more-button">
                                <a href="/iletisim">İLETİŞİM</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- About Lawyer Area End Here -->
    <!-- Our Practice Area Start Here -->

    <!-- Our Practice Area End Here -->
    <!-- Advertise Banner Area Start -->
    <div class="advertise-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="bennar">
                        <h2 style="margin-left: 20px;">ACİZLER İÇİN İMKÂNSIZ, KORKAKLAR  İÇİN

                            <br>
                            İNANILMAZ GÖZÜKEN ŞEYLER  KAHRAMANLAR İÇİN İDEALDİR.<br>
                           
                        </h2>
                        <h3 style="margin-left: 50%; font-style: italic; font-size: 30px; color:white;"  >Mustafa Kemal Atatürk</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Advertise Banner Area End -->
    <!-- Happy Client Area Start Here -->

    <!-- Happy Client Area End Here -->
    <!-- Our Attorney Start Here -->
    <div class="our-attorney-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title-area">
                        <h2>EKİBİMİZ</h2>
                        <p>Alanında Uzman Çalışma Arkadaşlarım</p>
                    </div>
                </div>
            </div>
            <div class="our-attorney">


                @foreach ($team as $item)
                    <div class="single-attorney">
                        <div class="attorney-picture">
                            <a href="#">
                                <img src="{{ asset('storage/team') }}/{{ $item->image }}" alt="">
                            </a>
                            <div class="overlay">
                                <h2>
                                    <a href="/ekibimiz">Görüntüle</a>
                                </h2>

                            </div>
                        </div>
                        <div class="attorney-content">
                            <h3>
                                <a href="#">{{ $item->pozition }}</a>
                            </h3>
            
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div>
    <!-- Our Attorney End Here -->
    <!-- Latest News Area Start Here -->
    <div class="latest-news-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title-area">
                        <h2>BLOG YAZILARIMIZ</h2>
                        <p>Son Blog Yazılarım</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blog as $b)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-news-area">
                            <div class="news-featured-image">
                                <a href="/blog/{{ $b->slug }}">
                                    <img src="{{ asset('storage/blog') }}/{{ $b->image }}" alt="image">
                                </a>
                                <ul>
                                    <li class="active">{{ $b->created_at->diffForHumans() }}</li>
                                    <li>
                                        <a href="/blog/{{ $b->slug }}">
                                            <i class="fa fa-user"> </i> Eylem Çağraş</a>
                                    </li>

                                </ul>
                            </div>
                            <h3>
                                <a href="/blog/{{ $b->slug }}">{{ $b->title }}</a>
                            </h3>
                            <p>{!! $b->description = Str::limit($b->description, 100) !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <!-- Latest News Area End Here -->
    <!-- Partner Logo Area Start Here -->

    <!-- Partner Logo Area End Here -->
    <!-- Get Free Consultation Start Here -->
    <div class="get-free-consultation-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="consultation-text">
                        <h3>İhtiyacınız olduğunda her an yanınızdayız!</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="contact-buttom">
                        <a href="/contact">İLETİŞİM</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
