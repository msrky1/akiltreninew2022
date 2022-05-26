<section id="main-banner-page" class="position-relative page-header contact-header section-nav-smooth parallax">
    <div class="container">
        <div class="row" style="background-image: url({{asset('assets/image/0012.jpg')}});">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding"><br>
          
                      <h3 class="font-bold"  style="background-color: rgba(19, 25, 62, 0.656); "> Hakkımızda
                    </h3>
           
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap mt-n5">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Hakkımızda</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="/">Anasayfa</a></li>
                        <li class="breadcrumb-item hover-light">Hakkımızda</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="aboutus" class="padding_top padding_bottom">
    @foreach ($about as $item)
        
 
    <div class="container aboutus">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-5 padding_bottom_half">
                <div class="image"><img alt="SEO" src="{{asset('assets')}}/image/about.jpg"></div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-6 padding_bottom_half text-center text-md-left">
                <h2 class="darkcolor font-normal bottom30">{{$item->title}} <span class="defaultcolor">{{$item->title_one}}</span> </h2>
                <p class="bottom35">{{$item->description}} </p>
                
            </div>
           
        
      
    </div>

    @endforeach
</section>
<!-- About us ends -->
<!-- WOrk Process-->
