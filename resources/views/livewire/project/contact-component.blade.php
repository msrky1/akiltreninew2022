<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="main-bennar">
                    <h2>İLETİŞİM</h2>
                    <div class="breadcumb">
                        <ul>
                            <li>
                                <a href="/">Anasayfa</a>
                            </li>
                            <li>İLETİŞİM</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  Banner Area End here -->
<!-- Main Contact page Start here -->
<div class="contact-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="contact-form-area">
                    <h2>Lütfen Formu Doldurun!</h2>
                    <form action="/" method="GET">
                        <fieldset class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Adı : </label>
                                    <input type="text" name="name" class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>E-Mail Adresi : </label>
                                    <input type="email" name="email" class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Telefon Numarası: </label>
                                    <input type="tel" name="telephone" class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Mesajınız : </label>
                                    <textarea cols="40" rows="5" name="message" class="textarea form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button class="btn-send submit-buttom" type="submit">Mesajı Gönder</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                @foreach ($setting as $item)
                    
              
                <div class="office-address">
                    <h2>OFİS ADRESİ</h2>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-map-marker"></i>
                                <span>{{$item->address}}</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-phone"></i>
                                <span>{{$item->contact}}</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-envelope-o"></i>
                                <span>{{$item->email}}</span>
                            </a>
                        </li>
                        <li>
                           
                        </li>
                    </ul>
                </div>
                @endforeach
        <div class="google-map-area">
                    <div id="googleMap" style="width:350px;height:200px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3161.1175248178565!2d36.83464131531247!3d37.59939297979175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152ddb6b2b807d11%3A0x629ce061401199eb!2zw4dhxJ9yYcWfIEh1a3VrIELDvHJvc3U!5e0!3m2!1str!2str!4v1648730226959!5m2!1str!2str" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
                </div> 
            </div>
           
        </div>
    </div>
</div>
<!-- Main Contact page End here -->
