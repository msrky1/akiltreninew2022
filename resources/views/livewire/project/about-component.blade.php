<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="main-bennar">
                    <h2>Hakkımızda</h2>
                    <div class="breadcumb">
                        <ul>
                            <li>
                                <a href="/">Anasayfa</a>
                            </li>
                            <li>Hakkımızda</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  Banner Area End here -->
<!-- About Page Lawyer Section Area Start here -->
<div class="about-page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                @foreach ($about as $item)
                    
                
                <div class="about-page-content">
                    <h2> {{$item->title}}                 
                    </h2>

                <h5><span> {{$item->title_one}} </span> </h5>
                    <p class="text-blod"> {{$item->description}}</p>
                    <div class="slider-area">
                        <div class="bend niceties preview-2">
                            <div id="ensign-nivoslider" class="slides">
                                @foreach ($galery as $s)
                                    <img width="300px" src="{{ asset('storage/galery') }}/{{ $s->image }}" alt="image"
                                        title="#slider-direction-{{ $s->id }}">
                                @endforeach
                
                            </div>
                            <!-- direction 1 -->
                
                
                        
                            <!-- direction 2 -->
                
                        </div>
                    </div>
                  
                   

                   
                </div>
               
            </div>
            
           
            
            @endforeach
            
                    <!-- direction 1 -->
        
                  
                    <!-- slider end-->
                    <!-- direction 2 -->
        
                </div>
            </div>
            <!-- slider end-->
        </div>
    </div>
</div>
<div class="about-page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">


            </div>

        </div>

    </div>

</div>

<div class="our-wining-awards-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wining-section-area">
                    <h2>KULLANDIĞIMIZ YAZILIMLAR</h2>
                 
                </div>
            </div>
        </div>
        <div class="wining-section">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-wining-section">
                        <div class="image">
                            <a href="#">
                                <img src="{{asset('assets/img/yazilimlar')}}/01.png" alt="images">
                            </a>
                        </div>
                       
                    </div>
                <h4>BUYAPAR </h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-wining-section">
                        <div class="image">
                            <a href="#">
                                <img src="{{asset('assets/img/yazilimlar')}}/02.png" alt="images">
                            </a>
                        </div>
                    
                    </div>
                    <h4>UYAP KATİBİM </h4>
                </div>
            
              
              
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-wining-section">
                        <div class="image">
                            <a href="#">
                                <img src="{{asset('assets/img/yazilimlar')}}/04.png" alt="images">
                            </a>
                        </div>
            
                    </div>
                    <h4>ÇAĞRI KATİBİM /TAA CALL SOLUTİON </h4>
                </div>
               
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-wining-section">
                        <div class="image">
                            <a href="#">
                                <img src="{{asset('assets/img/yazilimlar')}}/03.png" alt="images">
                            </a>
                        </div>
            
                    </div>
                    <h4>İCRA PRO </h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-wining-section">
                        <div class="image">
                            <a href="#">
                                <img src="{{asset('assets/img/yazilimlar')}}/05.png" alt="images">
                            </a>
                        </div>
            
                    </div>
                    <h4>SİNERJİ HUKUK YAZILIMLARI </h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-wining-section">
                        <h4 class="bold-h">LEGANOVA </h4>
            
                    </div>
                 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-wining-section">
                        <h4 class="bold-h">YTS 3G (2G) </h4>
            
                    </div>
                 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-wining-section">
                        <h4 class="bold-h">İNTER YASAL TAKİP </h4>
            
                    </div>
                 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-wining-section">
                        <h4 class="bold-h">ACTİO </h4>
            
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
</div>

<style>

 .bold-h {
     

    font-family: 'Montserrat';
    font-size: 30px;
    color: #6A5ACD;

 }

</style> 