<main> 

    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="main-bennar">
                        <h2>GALERİ</h2>
                        <div class="breadcumb">
                            <ul>
                                <li>
                                    <a href="/">Anasayfa</a>
                                </li>
                                <li>GALERİ</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Banner Area End here -->
    <!-- Latest News Area Start Here -->
    <div class="latest-news-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title-area">
                        <h2>GALERİ</h2>
                        <p>Hukuk adalete yönelik iradedir. (Radbruch)</p>
                    </div>
                </div>
            </div>
            <div class="row">
    
                @foreach ($galery as $item)
                    
    
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-news-area">
         
                         
                            <a href="{{ asset('storage/galery') }}/{{ $item->image }}" class="fancybox"
                                rel="ligthbox">
                                <img src="{{ asset('storage/galery') }}/{{ $item->image }}"
                                    class="zoom img-fluid " alt="">

                            </a>
                    
            
                    </div>
                </div>
    
                @endforeach
            </div>
          
        </div>
    </div>

</main>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
    
            $(".zoom").hover(function() {
    
                $(this).addClass('transition');
            }, function() {
    
                $(this).removeClass('transition');
            });
        });
    </script>
    


<style>

   
img.zoom {
  
    border-radius:5px;
    object-fit:cover;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}
        
 
.transition {
    -webkit-transform: scale(1.2); 
    -moz-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}
    .modal-header {
   
     border-bottom: none;
}
    .modal-title {
        color:#000;
    }
    .modal-footer{
      display:none;  
    }

    </style>