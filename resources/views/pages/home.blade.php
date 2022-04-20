@extends('layouts.app')
@section('content')

<div id="carousel-home">
    <div class="owl-carousel owl-theme">
            <div class="owl-slide cover" style="background-image: url(img/slides/tugu.jpg);">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-lg-12 static">
                            <div class="slide-text text-center white">
                                <h2 class="owl-slide-animated owl-slide-title">Dolan Salatiga</h2>
                                <p class="owl-slide-animated owl-slide-subtitle">
                                    Jelajahi berbagai destinasi di kota salatiga.
                                </p>
                                <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="all_tours_list.html" role="button">Selengkapnya</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-slide cover" style="background-image: url(img/makana.jpg);">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-lg-12 static">
                            <div class="slide-text text-right white">
                                <h2 class="owl-slide-animated owl-slide-title">Kuliner Salatiga</h2>
                                <p class="owl-slide-animated owl-slide-subtitle">
                                    Sebagai kota gastronomi, Salatiga memiliki banyak destinasi kuliner.
                                </p>
                                <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="all_tours_list.html" role="button">Selengkapnya</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-slide cover" style="background-image: url(img/tari9.jpg);">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-lg-12 static">
                            <div class="slide-text text-left white">
                                <h2 class="owl-slide-animated owl-slide-title">Keberagaman Budaya</h2>
                                <p class="owl-slide-animated owl-slide-subtitle">
                                    Kota kecil ini memiliki kebudayaan yang cukup beragam.
                                </p>
                                <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="all_tours_list.html" role="button">Selengkapnya</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/owl-slide-->
    </div>
    <div id="icon_drag_mobile"></div>
</div>
<!--/carousel-->

<div class="white_bg">
<div class="container margin_60">
    <div class="row small-gutters categories_grid">
        <div class="col-sm-12 col-md-6">
            <a href="/destinasi">
                @foreach ($destinasiIcon as $destinasiIcon)
                <img src="{{URL::to('/')}}/img/destinasi/{{$destinasiIcon->foto}}" style="width: 550px;height: 475px;object-fit: cover;" alt="Icon" class="img-fluid">
                @endforeach
                <div class="wrapper">
                    <h2>Destinasi</h2>
                    <p>{{ $destinasiSize }} Destinasi</p>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="row small-gutters mt-md-0 mt-sm-2">
                <div class="col-sm-6">
                    <a href="/akomodasi">
                        <img src="img/img_cat_home_2.jpg" alt="" class="img-fluid">
                        <div class="wrapper">
                            <h2>Akomodasi</h2>
                            <p>{{ $akomodasiSize }} Tempat</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="/kuliner">
                        <img src="img/img_cat_home_3.jpg" alt="" class="img-fluid">
                        <div class="wrapper">
                            <h2>Kuliner</h2>
                            <p>Tradisional & Modern</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 mt-sm-2">
                    <a href="/acara">
                        <img src="img/img_cat_home_4.jpg" alt="" class="img-fluid">
                        <div class="wrapper">
                            <h2>Acara</h2>
                            <p>4 Acara Tahunan</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--/categories_grid-->
</div>
<!-- /container -->
</div>
<!-- /white_bg -->

<div class="container margin_60">

    <div class="main_title">
        <h2>Nikmati beragam destinasi <span>menarik</span> </h2>
        <p>Subtitle</p>
        <!-- <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p> -->
    </div>

    <div class="owl-carousel owl-theme list_carousel add_bottom_30">
        @foreach ($destinasi as $destinasi)
        <div class="item">
            <div class="tour_container">
                <div class="ribbon_3 popular"><span>Terbaik</span></div>
                <div class="img_container">
                    <a href="{{ route('destinasi.show',$destinasi->id) }}">
                        <img src="{{URL::to('/')}}/img/destinasi/{{$destinasi->foto}}" width="800" height="533" class="img-fluid" alt="image">
                        <div class="short_info">
                            <i class="icon_set_1_icon-44"></i>Bangunan Sejarah
                            <!-- <span class="price">
                                <sup>$</sup>39
                            </span> -->
                        </div>
                    </a>
                </div>
                <div class="tour_title">
                    <h3><strong>{{ $destinasi->name }}</strong></h3>
                    
                    <h6>{{ $destinasi->address }}</h6>
                    <!-- end rating -->
                    <div class="wishlist">
                        <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                    </div>
                    <!-- End wish list-->
                </div>
            </div>
            <!-- End box tour -->
        </div>
        @endforeach
        <!-- /item -->
        
    </div>
    <!-- /carousel -->
    
    <p class="text-center add_bottom_30">
        <a href="destinasi" class="btn_1">View all Tours</a>
    </p>

    <hr class="mt-5 mb-5">

    <div class="main_title">
        <h2>Akomodasi <span>Terbaik</span> Salatiga</h2>
        <p>Subtitle</p>
        <!-- <p>Alam nya yang sejuk, membuat anda nyaman untuk menginap diberbagai sudut kota ini.</p> -->
    </div>

    <div class="owl-carousel owl-theme list_carousel add_bottom_30">
        @foreach ($akomodasi as $akomodasi)
        <div class="item">
            <div class="hotel_container">
                <div class="ribbon_3 popular"><span>Popular</span></div>
                <div class="img_container">
                    <a href="single_hotel.html">
                        <img src="img/hotel_1.jpg" width="800" height="533" class="img-fluid" alt="image">
                        <!-- <div class="score"><span>7.5</span>Good</div> -->
                        <div class="short_info hotel">
                            Modern, tengah 
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Park Hyatt</strong> Hotel</h3>
                    <h3>Argomulyo, Salatiga</h3>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                        <small>4 Star Hotel</small>
                    </div>
                    <!-- end rating -->
                    <div class="wishlist">
                        <a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                    </div>
                    <!-- End wish list-->
                </div>
            </div>
            <!-- End box -->
        </div>
        @endforeach
        <!-- /item -->
    </div>
    <!-- /carousel -->
    
    <p class="text-center nopadding">
        <a href="all_hotels_list.html" class="btn_1">View all Hotels</a>
    </p>
    
</div>
<!-- End container -->

<div class="white_bg">
    <div class="container margin_60">
        <div class="main_title">
            <h2>Plan <span>Your Tour</span> Easly</h2>
            <p>
                Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
            </p>
        </div>
        <div class="row feature_home_2">
            <div class="col-md-4 text-center">
                <img src="img/adventure_icon_1.svg" alt="" width="75" height="75">
                <h3>Itineraries studied in detail</h3>
                <p>Suscipit invenire petentium per in. Ne magna assueverit vel. Vix movet perfecto facilisis in, ius ad maiorum corrumpit, his esse docendi in.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="img/adventure_icon_2.svg" alt="" width="75" height="75">
                <h3>Room and food included</h3>
                <p> Cum accusam voluptatibus at, et eum fuisset sententiae. Postulant tractatos ius an, in vis fabulas percipitur, est audiam phaedrum electram ex.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="img/adventure_icon_3.svg" alt="" width="75" height="75">
                <h3>Everything organized</h3>
                <p>Integre vivendo percipitur eam in, graece suavitate cu vel. Per inani persius accumsan no. An case duis option est, pro ad fastidii contentiones.</p>
            </div>
        </div>

        <div class="banner_2">
            <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)" style="background-color: rgba(0, 0, 0, 0.3);">
                <div>
                    <h3>Your Perfect<br>Tour Experience</h3>
                    <p>Activities and accommodations</p>
                    <a href="all_tours_list.html" class="btn_1">Read more</a>
                </div>
            </div>
            <!-- /wrapper -->
        </div>
        <!-- /banner_2 -->

    </div>
    <!-- End container -->
</div>
<!-- End white_bg -->

<div class="container margin_60">
    <div class="main_title">
        <h2>Lates <span>Blog</span> News</h2>
        <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
    </div>

    <div class="row">
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure><img src="img/news_home_1.jpg" alt="">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>Mark Twain</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Pri oportere scribentur eu</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure><img src="img/news_home_2.jpg" alt="">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>Jhon Doe</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Duo eius postea suscipit ad</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure><img src="img/news_home_3.jpg" alt="">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>Luca Robinson</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Elitr mandamus cu has</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure><img src="img/news_home_4.jpg" alt="">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>Paula Rodrigez</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Id est adhuc ignota delenit</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
        </div>
        <!-- /row -->
        <p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">View all news</a></p>
</div>
<!-- End container -->
@stop