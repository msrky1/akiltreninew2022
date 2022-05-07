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
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  Banner Area End here -->
<!-- Blog Area Start -->
<div class="total-blog-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                <div class="single-blog-post">
                    <div class="blog-image">
                        <a href="#">
                            <img src="{{ asset('storage/blog') }}/{{ $blog->image }}" alt="family">
                        </a>
                    </div>
                    <h2>{{ $blog->title }}</h2>
                        <p>{!! $blog->description !!}</p>
                </div>

            </div>
            <livewire:project.category.category-component />
        </div>
    </div>
</div>
