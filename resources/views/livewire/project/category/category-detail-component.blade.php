<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="main-bennar">
                    <h2>Blog</h2>
                    <div class="breadcumb">
                        <ul>
                            <li>
                                <a href="/">Anasayfa</a>
                            </li>
                            <li>{{$category_name}}</li>
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
                    <h2>KATEGORİ</h2>
                    <h3>{{$category_name}}</h3>
                    <p>Hukuk adalete yönelik iradedir. (Radbruch)</p>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($blogs as $item)
                

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-news-area">
                    <div class="news-featured-image">
                        <a href="{{route('blog.detail' , [$item->slug])}}">
                            <img src="{{asset('storage/blog')}}/{{$item->image}}" alt="image">
                        </a>
                        <ul>
                            <li class="active">{{$item->created_at->diffForHumans()}}</li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-user"> </i> admin</a>
                            </li>
                          
                        </ul>
                    </div>
                    <h3>
                        <a href="{{route('blog.detail' , [$item->slug])}}">{{$item->title}}</a>
                    </h3>
                    <p>{!! $item->description = Str::limit($item->description, 100) !!}</p>
                </div>
            </div>

            @endforeach
        </div>
        <div class="pagination-area">
            <div class="row">
                
            </div>
        </div>
    </div>
</div>