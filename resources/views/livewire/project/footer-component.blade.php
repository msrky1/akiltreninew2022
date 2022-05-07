

<footer>
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="footer footer-one">
                        <h2>Hakkımızda</h2>
                        @foreach ($about as $s)
                            
             
                        <p>{{$s->title}}</p>
                   
                        <div class="social-media">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-skype"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="footer footer-two">
                        <h2>FAALİYET ALANLARIMIZ</h2>
                        <ul>
                            @foreach ($whatdo as $item)
                            <li>
                                <a href="{{ route('whatdo.detail', $item->slug) }}">{{$item->title}}</a>
                            </li>
                            @endforeach
                         
                       
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="footer footer-three">
                        <h2>İLETİŞİMİ KOPARMAYIN</h2>
                        <ul>
                            @foreach ($setting as $item)
                                
                           
                            <li>
                                <i class="fa fa-clock-o"></i>Pazartesi - Cuma</li>
                            <li>
                                <i class="fa fa-map-marker"></i> {{$item->address}}</li>
                            <li>
                                <i class="fa fa-phone"></i> {{$item->contact}}</li>
                            <li>
                                <i class="fa fa-envelope-o"></i>{{$item->email}}</li>
                     

                                @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="footer footer-four">
                        <h2>GALERİMİZ</h2>
                        <ul>
                            @foreach ($galery as $item)
                                
              
                            <li>
                                <a href="/galeri">
                                    <img src="{{asset('storage/galery')}}/{{$item->image}}" alt="{{$item->image}}"> </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-buttom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-buttom">
                        <div class="scrollup">
                            <a href="#">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                        <p>eylemcagras.av.tr © Tüm Hakları Saklıdır</p>
                    </div>
                </div>
            </div>
        </div>
         
        @foreach ($setting as $s)
            

<a href="https://wa.me/{{ $s->whatsapp }}" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
    @endforeach
    </div>
</footer>


