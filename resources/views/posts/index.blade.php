@extends('layouts.master')

@section('content')
    <!-- Page Container -->
    <div class="page-container ptb-60">
        <div class="container">
            <div class="row row-rl-10 row-tb-20">
                <div class="page-sidebar col-md-4 col-sm-5 col-xs-12">
                    <!-- Blog Sidebar -->
                    <aside class="sidebar blog-sidebar">
                        <div class="row row-tb-10">
                            <div class="col-xs-12">
                                <!-- Search Form -->
                                <div class="widget search-form panel ptb-30 prl-20">
                                    <div class="widget-body">
                                        <form method="post" action="blog_classic_left_sidebar.html#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search for..." required="required">
                                                <span class="input-group-btn">
                    <button class="btn" type="submit"><i class="fa fa-search font-16"></i></button>
                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Search Form -->
                            </div>
                            <div class="col-xs-12">
                                <!-- Recent Posts -->
                                <div class="widget recent-posts panel pt-20 prl-20">
                                    <h3 class="widget-title h-title">Recent Posts</h3>
                                    <div class="widget-body ptb-30">

                                        @if(!empty($user->posts))
                                            @foreach($user->posts as $item)
                                                <div class="recent-post media">
                                                    <div class="post-thumb media-left">
                                                        <a href="blog_classic_left_sidebar.html#">
                                                            <img class="media-object" src="{{URL::asset($item->picture)}}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="font-15 mb-10">
                                                            <a href="{{url('/post/' . $item->id)}}">{{$item->title}}</a>
                                                        </h5>
                                                        <ul class="post-meta list-inline">
                                                            <li> <i class="ico fa fa-user mr-5"></i>{{Auth::user()->name}}</li>
                                                            {{--<li><i class="ico fa fa-calendar mr-5"></i>19 Mar 2017</li>--}}
                                                            <li><i class="ico fa fa-calendar mr-5"></i>{{getdate(strtotime($item->created_at))['mday']}} {{substr(getdate(strtotime($item->created_at))['month'], 0, 3)}}  {{getdate(strtotime($item->created_at))['year']}}</li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        {{--<div class="recent-post media">--}}
                                            {{--<div class="post-thumb media-left">--}}
                                                {{--<a href="blog_classic_left_sidebar.html#">--}}
                                                    {{--<img class="media-object" src="assets/images/blog/thumb_2.jpg" alt="">--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<h5 class="font-15 mb-10">--}}
                                                    {{--<a href="blog_classic_left_sidebar.html#">Lorem ipsum dolor sit amet consetetur</a>--}}
                                                {{--</h5>--}}
                                                {{--<ul class="post-meta list-inline">--}}
                                                    {{--<li> <i class="ico fa fa-user mr-5"></i>John Doe</li>--}}
                                                    {{--<li><i class="ico fa fa-calendar mr-5"></i>25 Mar 2017</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="recent-post media">--}}
                                            {{--<div class="post-thumb media-left">--}}
                                                {{--<a href="blog_classic_left_sidebar.html#">--}}
                                                    {{--<img class="media-object" src="assets/images/blog/thumb_3.jpg" alt="">--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<h5 class="font-15 mb-10">--}}
                                                    {{--<a href="blog_classic_left_sidebar.html#">Lorem ipsum dolor sit amet consetetur</a>--}}
                                                {{--</h5>--}}
                                                {{--<ul class="post-meta list-inline">--}}
                                                    {{--<li> <i class="ico fa fa-user mr-5"></i>John Doe</li>--}}
                                                    {{--<li><i class="ico fa fa-calendar mr-5"></i>17 Mar 2017</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="recent-post media">--}}
                                            {{--<div class="post-thumb media-left">--}}
                                                {{--<a href="blog_classic_left_sidebar.html#">--}}
                                                    {{--<img class="media-object" src="assets/images/blog/thumb_4.jpg" alt="">--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<h5 class="font-15 mb-10">--}}
                                                    {{--<a href="blog_classic_left_sidebar.html#">Lorem ipsum dolor sit amet consetetur</a>--}}
                                                {{--</h5>--}}
                                                {{--<ul class="post-meta list-inline">--}}
                                                    {{--<li> <i class="ico fa fa-user mr-5"></i>John Doe</li>--}}
                                                    {{--<li><i class="ico fa fa-calendar mr-5"></i>12 Mar 2017</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="recent-post media">--}}
                                            {{--<div class="post-thumb media-left">--}}
                                                {{--<a href="blog_classic_left_sidebar.html#">--}}
                                                    {{--<img class="media-object" src="assets/images/blog/thumb_5.jpg" alt="">--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<h5 class="font-15 mb-10">--}}
                                                    {{--<a href="blog_classic_left_sidebar.html#">Lorem ipsum dolor sit amet consetetur</a>--}}
                                                {{--</h5>--}}
                                                {{--<ul class="post-meta list-inline">--}}
                                                    {{--<li> <i class="ico fa fa-user mr-5"></i>John Doe</li>--}}
                                                    {{--<li><i class="ico fa fa-calendar mr-5"></i>10 Mar 2017</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                                <!-- End Recent Posts -->
                            </div>
                            <div class="col-xs-12">
                                <!-- Categories Widget -->
                                <div class="widget categories-widget panel pt-20 prl-20">
                                    <div class="widget-header">
                                        <h3 class="widget-title h-title">Blog Categories</h3>
                                    </div>
                                    <div class="widget-body ptb-20">
                                        @if (!empty($cats))
                                            <ul>
                                                @foreach($cats as $cat)
                                                    <li>
                                                        <a href="{{url('/category/' . $cat->id)}}">{{$cat->title}}<span>{{count($cat->posts)}}</span></a>
                                                    </li>
                                                @endforeach
                                            {{--<li>--}}
                                                {{--<a href="blog_classic_left_sidebar.html#">Shopping <span>780</span></a>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<a href="blog_classic_left_sidebar.html#">Sport <span>670</span></a>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<a href="blog_classic_left_sidebar.html#">Travel <span>520</span></a>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<a href="blog_classic_left_sidebar.html#">Coupon Code <span>350</span></a>--}}
                                            {{--</li>--}}
                                        </ul>
                                        @endif
                                    </div>
                                </div>
                                <!-- End Categories Widget -->
                            </div>
                            <div class="col-xs-12">
                                <div class="widget archive-widget panel pt-20 prl-20">
                                    <h3 class="widget-title h-title">Blog Archive</h3>
                                    <div class="widget-content ptb-20">
                                        <ul>
                                            <li>
                                                <a href="blog_classic_left_sidebar.html#">August 2017</a>
                                            </li>
                                            <li>
                                                <a href="blog_classic_left_sidebar.html#">June 2017</a>
                                            </li>
                                            <li>
                                                <a href="blog_classic_left_sidebar.html#">May 2017</a>
                                            </li>
                                            <li>
                                                <a href="blog_classic_left_sidebar.html#">April 2017</a>
                                            </li>
                                            <li>
                                                <a href="blog_classic_left_sidebar.html#">March 2017</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <!-- Popular Tags -->
                                <div class="widget popular-tags panel pt-20 prl-20">
                                    <h3 class="widget-title h-title">Popular Tags</h3>
                                    <div class="widget-body pt-30 pb-20">

                                        <div class="tags">
                                            <a href="blog_classic_left_sidebar.html#" class="badge">Offers</a>
                                            <a href="blog_classic_left_sidebar.html#" class="badge">Stores</a>
                                            <a href="blog_classic_left_sidebar.html#" class="badge">Shop</a>
                                            <a href="blog_classic_left_sidebar.html#" class="badge">Sale</a>
                                            <a href="blog_classic_left_sidebar.html#" class="badge">Discount</a>
                                            <a href="blog_classic_left_sidebar.html#" class="badge">Health</a>
                                            <a href="blog_classic_left_sidebar.html#" class="badge">Cloths</a>
                                            <a href="blog_classic_left_sidebar.html#" class="badge">Travel</a>
                                            <a href="blog_classic_left_sidebar.html#" class="badge">Hotels</a>
                                            <a href="blog_classic_left_sidebar.html#" class="badge">Deals</a>
                                            <a href="blog_classic_left_sidebar.html#" class="badge">Coupons</a>
                                        </div>

                                    </div>
                                </div>
                                <!-- End Popular Tags -->
                            </div>
                            {{--<div class="col-xs-12">--}}
                                {{--<!-- Instagram Widget -->--}}
                                {{--<div class="widget instagram-widget panel pt-20 prl-20">--}}
                                    {{--<h3 class="widget-title h-title">Instagram</h3>--}}
                                    {{--<div class="widget-body ptb-30">--}}

                                        {{--<div class="row row-tb-5 row-rl-5">--}}


                                            {{--<div class="instagram-widget__item col-xs-4">--}}
                                                {{--<img src="assets/images/instagram/instagram_01.jpg" alt="">--}}
                                            {{--</div>--}}


                                            {{--<div class="instagram-widget__item col-xs-4">--}}
                                                {{--<img src="assets/images/instagram/instagram_02.jpg" alt="">--}}
                                            {{--</div>--}}


                                            {{--<div class="instagram-widget__item col-xs-4">--}}
                                                {{--<img src="assets/images/instagram/instagram_03.jpg" alt="">--}}
                                            {{--</div>--}}


                                            {{--<div class="instagram-widget__item col-xs-4">--}}
                                                {{--<img src="assets/images/instagram/instagram_04.jpg" alt="">--}}
                                            {{--</div>--}}


                                            {{--<div class="instagram-widget__item col-xs-4">--}}
                                                {{--<img src="assets/images/instagram/instagram_05.jpg" alt="">--}}
                                            {{--</div>--}}


                                            {{--<div class="instagram-widget__item col-xs-4">--}}
                                                {{--<img src="assets/images/instagram/instagram_06.jpg" alt="">--}}
                                            {{--</div>--}}


                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- End Instagram Widget -->--}}
                            {{--</div>--}}
                            <div class="col-xs-12">
                                <!-- Subscribe Widget -->
                                <div class="widget subscribe-widget panel pt-20 prl-20">
                                    <h3 class="widget-title h-title">Subscribe to mail</h3>
                                    <div class="widget-content ptb-30">

                                        <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                                        <form method="post" action="{{url('/subscribe')}}">
                                            {{ csrf_field() }}
                                            <div class="input-group">
                                                <input id="email" name="email" type="email" class="form-control" placeholder="Your Email Address" required="required">
                                                <span class="input-group-btn">
                    <button class="btn" type="submit">Sign Up</button>
                </span>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <!-- End Subscribe Widget -->
                            </div>
                            <div class="col-xs-12">

                                <!-- Instagram Widget -->
                                {{--<div class="widget subscribe-widget panel pt-20 prl-20">--}}
                                    {{--<h3 class="widget-title h-title">Latest tweets</h3>--}}
                                    {{--<div class="widget-body ptb-20">--}}

                                        {{--<ul class="twitter-list">--}}
                                            {{--<li class="twitter-list__item">--}}
                                                {{--<p>--}}
                                                    {{--<i class="twitter-icon fa fa-twitter"></i>--}}
                                                    {{--<a href="blog_classic_left_sidebar.html#">@masum_rana :</a>--}}
                                                    {{--<span class="tweet-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</span>--}}
                                                {{--</p>--}}
                                            {{--</li>--}}
                                            {{--<li class="twitter-list__item">--}}
                                                {{--<p>--}}
                                                    {{--<i class="twitter-icon fa fa-twitter"></i>--}}
                                                    {{--<a href="blog_classic_left_sidebar.html#">@masum_rana :</a>--}}
                                                    {{--<span class="tweet-text">Recusandae sed, aperiam earum sapiente rem neque officiis quaerat.</span>--}}
                                                {{--</p>--}}
                                            {{--</li>--}}
                                            {{--<li class="twitter-list__item">--}}
                                                {{--<p>--}}
                                                    {{--<i class="twitter-icon fa fa-twitter"></i>--}}
                                                    {{--<a href="blog_classic_left_sidebar.html#">@masum_rana :</a>--}}
                                                    {{--<span class="tweet-text">Sed quaerat, error harum sunt, sapiente voluptas temporibus porro quam, magnam dolores recusandae.</span>--}}
                                                {{--</p>--}}
                                            {{--</li>--}}
                                            {{--<li class="twitter-list__item">--}}
                                                {{--<p>--}}
                                                    {{--<i class="twitter-icon fa fa-twitter"></i>--}}
                                                    {{--<a href="blog_classic_left_sidebar.html#">@masum_rana :</a>--}}
                                                    {{--<span class="tweet-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</span>--}}
                                                {{--</p>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                                <!-- End Instagram Widget -->
                            {{--</div>--}}
                            <div class="col-xs-12">
                                <!-- Contact Us Widget -->
                                <div class="widget contact-us-widget panel pt-20 prl-20">
                                    <h3 class="widget-title h-title">Got any questions?</h3>
                                    <div class="widget-body ptb-30">
                                        <p class="mb-20 color-mid">If you are having any questions, please feel free to ask.</p>
                                        <a href="{{url('/contacts')}}" class="btn btn-block"><i class="mr-10 font-15 fa fa-envelope-o"></i>Drop Us a Line</a>
                                    </div>
                                </div>
                                <!-- End Contact Us Widget -->
                            </div>
                            {{--<div class="col-xs-12">--}}
                                <!-- Trending Stores -->
                                {{--<div class="widget trend-store-widget panel pt-20 prl-20">--}}
                                    {{--<h3 class="widget-title h-title">Trending Stores</h3>--}}
                                    {{--<div class="widget-body ptb-30">--}}


                                        {{--<div class="trend-store-item media">--}}
                                            {{--<div class="post-thumb media-left">--}}
                                                {{--<a href="blog_classic_left_sidebar.html#">--}}
                                                    {{--<img class="media-object pr-10" width="90" src="assets/images/brands/brand_01.jpg" alt="">--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<h5 class="mb-5">--}}
                                                    {{--<a href="store_single_01.html">Amazon</a>--}}
                                                    {{--<span class="rating">--}}
                        {{--<span class="rating-stars" data-rating="4">--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                        {{--</span>--}}
                    {{--</span>--}}
                                                {{--</h5>--}}
                                                {{--<p class="color-mid">Upto 70% Rewards Lorem ipsum dolor sit amet.</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}


                                        {{--<div class="trend-store-item media">--}}
                                            {{--<div class="post-thumb media-left">--}}
                                                {{--<a href="blog_classic_left_sidebar.html#">--}}
                                                    {{--<img class="media-object pr-10" width="90" src="assets/images/brands/brand_02.jpg" alt="">--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<h5 class="mb-5">--}}
                                                    {{--<a href="store_single_01.html">Ashford</a>--}}
                                                    {{--<span class="rating">--}}
                        {{--<span class="rating-stars" data-rating="4">--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                        {{--</span>--}}
                    {{--</span>--}}
                                                {{--</h5>--}}
                                                {{--<p class="color-mid">Upto 70% Rewards Lorem ipsum dolor sit amet.</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}


                                        {{--<div class="trend-store-item media">--}}
                                            {{--<div class="post-thumb media-left">--}}
                                                {{--<a href="blog_classic_left_sidebar.html#">--}}
                                                    {{--<img class="media-object pr-10" width="90" src="assets/images/brands/brand_03.jpg" alt="">--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<h5 class="mb-5">--}}
                                                    {{--<a href="store_single_01.html">DELL</a>--}}
                                                    {{--<span class="rating">--}}
                        {{--<span class="rating-stars" data-rating="4">--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                        {{--</span>--}}
                    {{--</span>--}}
                                                {{--</h5>--}}
                                                {{--<p class="color-mid">Upto 70% Rewards Lorem ipsum dolor sit amet.</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}


                                    {{--</div>--}}
                                {{--</div>--}}
                                <!-- End Trending Stores -->
                            {{--</div>--}}
                            {{--<div class="col-xs-12">--}}
                                <!-- Latest Reviews -->
                                {{--<div class="widget posted-reviews-widget panel pt-20 prl-20">--}}
                                    {{--<h3 class="widget-title h-title">Recent Reviews</h3>--}}
                                    {{--<div class="widget-body ptb-30">--}}
                                        {{--<!-- Review -->--}}
                                        {{--<div class="review media">--}}
                                            {{--<div class="media-left pr-10">--}}
                                                {{--<a href="blog_classic_left_sidebar.html#">--}}
                                                    {{--<img class="media-object img-circle" src="assets/images/avatars/avatar_01.jpg" alt="Thumb" width="80">--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<h5 class="mb-5">--}}
                                                    {{--<a href="blog_classic_left_sidebar.html#">John Doe</a>--}}
                                                    {{--<span class="rating">--}}
                        {{--<span class="rating-stars" data-rating="3">--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                        {{--</span>--}}
                    {{--</span>--}}
                                                {{--</h5>--}}
                                                {{--<p class="color-mid">Vivamus sem massa, cursus at mollis eu, euismod id risus. Ve...</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<!-- End Review -->--}}
                                        {{--<!-- Review -->--}}
                                        {{--<div class="review media">--}}
                                            {{--<div class="media-left pr-10">--}}
                                                {{--<a href="blog_classic_left_sidebar.html#">--}}
                                                    {{--<img class="media-object img-circle" src="assets/images/avatars/avatar_02.jpg" alt="Thumb" width="80">--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<h5 class="mb-5">--}}
                                                    {{--<a href="blog_classic_left_sidebar.html#">John Doe</a>--}}
                                                    {{--<span class="rating">--}}
                        {{--<span class="rating-stars" data-rating="3">--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                        {{--</span>--}}
                    {{--</span>--}}
                                                {{--</h5>--}}
                                                {{--<p class="color-mid">Nullam porttitor porta augue vel iaculis. Pellentesque a pre...</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<!-- End Review -->--}}
                                        {{--<!-- Review -->--}}
                                        {{--<div class="review media">--}}
                                            {{--<div class="media-left pr-10">--}}
                                                {{--<a href="blog_classic_left_sidebar.html#">--}}
                                                    {{--<img class="media-object img-circle" src="assets/images/avatars/avatar_03.jpg" alt="Thumb" width="80">--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<h5 class="mb-5">--}}
                                                    {{--<a href="blog_classic_left_sidebar.html#">John Doe</a>--}}
                                                    {{--<span class="rating">--}}
                        {{--<span class="rating-stars" data-rating="3">--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                        {{--</span>--}}
                    {{--</span>--}}
                                                {{--</h5>--}}
                                                {{--<p class="color-mid">Ut consequat eget nulla eu ultrices. Curabitur ac pellentesq...</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<!-- End Review -->--}}
                                        {{--<!-- Review -->--}}
                                        {{--<div class="review media">--}}
                                            {{--<div class="media-left pr-10">--}}
                                                {{--<a href="blog_classic_left_sidebar.html#">--}}
                                                    {{--<img class="media-object img-circle" src="assets/images/avatars/avatar_04.jpg" alt="Thumb" width="80">--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<h5 class="mb-5">--}}
                                                    {{--<a href="blog_classic_left_sidebar.html#">John Doe</a>--}}
                                                    {{--<span class="rating">--}}
                        {{--<span class="rating-stars" data-rating="3">--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                            {{--<i class="fa fa-star-o"></i>--}}
                        {{--</span>--}}
                    {{--</span>--}}
                                                {{--</h5>--}}
                                                {{--<p class="color-mid">Duis eu lectus dictum, placerat quam sed, ornare urna....</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<!-- End Review -->--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <!-- End Latest Reviews -->
                            {{--</div>--}}
                        </div>
                    </aside>
                    <!-- End Blog Sidebar -->
                </div>
                <div class="page-content col-xs-12 col-sm-7 col-md-8">

                    <!-- Blog Area -->
                    <div class="blog-area blog-classic right-sidebar">

                        <div class="row row-tb-20">

                            @if(!empty($user->posts))
                                @foreach($user->posts as $post)
                                    <!-- Blog Post -->
                                    <div class="blog-post col-xs-12">
                                        <article class="entry panel">
                                            <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{URL::asset($post->picture)}}">
                                                <div class="entry-date">
                                                    {{--<h4>{{$stamp['mday']}}</h4>--}}
                                                    {{--<h6>{{$stamp['month']}}</h6>--}}
                                                    {{--dd(getdate($post->created_at))--}}
                                                    {{--<h6>{{getdate($post->created_at)}}</h6>--}}
                                                    <h4>{{strtoupper(getdate(strtotime($post->created_at))['mday'])}}</h4>
                                                    <h6>{{strtoupper(substr(getdate(strtotime($post->created_at))['month'], 0, 3))}}</h6>
                                                </div>
                                            </figure>
                                            <div class="entry-wrapper prl-20 prl-md-30 pt-20 pt-md-30 pb-15">
                                                <header class="entry-header">
                                                    <h4 class="entry-title mb-10 mb-md-15 t-uppercase">
                                                        <a href="blog_single_standard.html">{{$post->title}}</a>
                                                    </h4>
                                                    <div class="entry-meta mb-10">
                                                        <ul class="tag-info list-inline">
                                                            <li><i class="icon fa fa-user"></i> By : {{$user->name}}</li>
                                                            <li><i class="icon fa fa-comments"></i> 14 Comments</li>
                                                        </ul>
                                                    </div>
                                                </header>
                                                <div class="entry-content">
                                                    <p class="entry-summary">{{substr($post->content, 0, 500)}}...</p>
                                                </div>
                                                <footer class="entry-footer text-right">
                                                    <a href="{{url('/post/' . $post->id)}}" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                                </footer>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- End Blog Post -->
                                @endforeach
                            @else
                                <h3>No posts here.</h3>
                            @endif

                            {{--<!-- Blog Post -->--}}
                            {{--<div class="blog-post col-xs-12">--}}
                                {{--<article class="entry panel">--}}
                                    {{--<figure class="entry-media embed-responsive embed-responsive-16by9">--}}
                                        {{--<iframe src="https://player.vimeo.com/video/28786762?portrait=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--}}
                                        {{--<div class="entry-date">--}}
                                            {{--<h4>13</h4>--}}
                                            {{--<h6>JUN</h6>--}}
                                        {{--</div>--}}
                                    {{--</figure>--}}
                                    {{--<div class="entry-wrapper prl-20 prl-md-30 pt-20 pt-md-30 pb-15">--}}
                                        {{--<header class="entry-header">--}}
                                            {{--<h4 class="entry-title mb-10 mb-md-15 t-uppercase">--}}
                                                {{--<a href="blog_single_vimeo.html">Amazing Classic Interior Design With Perfect Lighting</a>--}}
                                            {{--</h4>--}}
                                            {{--<div class="entry-meta mb-10">--}}
                                                {{--<ul class="tag-info list-inline">--}}
                                                    {{--<li><i class="icon fa fa-user"></i> By : John Doe</li>--}}
                                                    {{--<li><i class="icon fa fa-comments"></i> 14 Comments </li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</header>--}}
                                        {{--<div class="entry-content">--}}
                                            {{--<p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet imperdiet volutpat. Sed vitae quam congue, tincidunt nisi et, volutpat lacus. Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semper laoreet dapibus. Sed sit amet convallis enim. Phasellus maximus gravida augue, in sollicitudin odio lacinia ac. Morbi cursus ante massa, et accumsan nisl mollis et. Nam venenatis et felis quis port...</p>--}}
                                        {{--</div>--}}
                                        {{--<footer class="entry-footer text-right">--}}
                                            {{--<a href="blog_single_vimeo.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>--}}
                                        {{--</footer>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            {{--<!-- End Blog Post -->--}}

                            {{--<!-- Blog Post -->--}}
                            {{--<div class="blog-post col-xs-12">--}}
                                {{--<article class="entry panel">--}}
                                    {{--<figure class="entry-media embed-responsive embed-responsive-16by9">--}}
                                        {{--<iframe src="https://www.youtube.com/embed/mcixldqDIEQ?v=mcixldqDIEQ" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--}}
                                        {{--<div class="entry-date">--}}
                                            {{--<h4>13</h4>--}}
                                            {{--<h6>JUN</h6>--}}
                                        {{--</div>--}}
                                    {{--</figure>--}}
                                    {{--<div class="entry-wrapper prl-20 prl-md-30 pt-20 pt-md-30 pb-15">--}}
                                        {{--<header class="entry-header">--}}
                                            {{--<h4 class="entry-title mb-10 mb-md-15 t-uppercase">--}}
                                                {{--<a href="blog_single_youtube.html">English Breakfast Tea With Tasty Donut Desserts</a>--}}
                                            {{--</h4>--}}
                                            {{--<div class="entry-meta mb-10">--}}
                                                {{--<ul class="tag-info list-inline">--}}
                                                    {{--<li><i class="icon fa fa-user"></i> By : John Doe</li>--}}
                                                    {{--<li><i class="icon fa fa-comments"></i> 14 Comments </li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</header>--}}
                                        {{--<div class="entry-content">--}}
                                            {{--<p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet imperdiet volutpat. Sed vitae quam congue, tincidunt nisi et, volutpat lacus. Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semper laoreet dapibus. Sed sit amet convallis enim. Phasellus maximus gravida augue, in sollicitudin odio lacinia ac. Morbi cursus ante massa, et accumsan nisl mollis et. Nam venenatis et felis quis port...</p>--}}
                                        {{--</div>--}}
                                        {{--<footer class="entry-footer text-right">--}}
                                            {{--<a href="blog_single_youtube.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>--}}
                                        {{--</footer>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            {{--<!-- End Blog Post -->--}}

                            {{--<!-- Blog Post -->--}}
                            {{--<div class="blog-post col-xs-12">--}}
                                {{--<article class="entry panel">--}}
                                    {{--<figure class="entry-media embed-responsive embed-responsive-16by9">--}}
                                        {{--<iframe class="embed-responsive-item" src="http://maps.google.com/maps?q=56.7638955,-120.0681474&amp;z=4&amp;output=embed"></iframe>--}}
                                        {{--<div class="entry-date">--}}
                                            {{--<h4>13</h4>--}}
                                            {{--<h6>JUN</h6>--}}
                                        {{--</div>--}}
                                    {{--</figure>--}}
                                    {{--<div class="entry-wrapper prl-20 prl-md-30 pt-20 pt-md-30 pb-15">--}}
                                        {{--<header class="entry-header">--}}
                                            {{--<h4 class="entry-title mb-10 mb-md-15 t-uppercase">--}}
                                                {{--<a href="blog_single_map.html">Two Smart Kids Reading Magazine Before Sleeping</a>--}}
                                            {{--</h4>--}}
                                            {{--<div class="entry-meta mb-10">--}}
                                                {{--<ul class="tag-info list-inline">--}}
                                                    {{--<li><i class="icon fa fa-user"></i> By : John Doe</li>--}}
                                                    {{--<li><i class="icon fa fa-comments"></i> 14 Comments </li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</header>--}}
                                        {{--<div class="entry-content">--}}
                                            {{--<p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet imperdiet volutpat. Sed vitae quam congue, tincidunt nisi et, volutpat lacus. Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semper laoreet dapibus. Sed sit amet convallis enim. Phasellus maximus gravida augue, in sollicitudin odio lacinia ac. Morbi cursus ante massa, et accumsan nisl mollis et. Nam venenatis et felis quis port...</p>--}}
                                        {{--</div>--}}
                                        {{--<footer class="entry-footer text-right">--}}
                                            {{--<a href="blog_single_map.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>--}}
                                        {{--</footer>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            {{--<!-- End Blog Post -->--}}

                            {{--<!-- Blog Post -->--}}
                            {{--<div class="blog-post col-xs-12">--}}
                                {{--<article class="entry panel">--}}
                                    {{--<figure class="entry-media">--}}
                                        {{--<blockquote class="blog-quote-section">--}}
                                            {{--<p>--}}
                                                {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati est dolores possimus, recusandae cupiditate rerum ut sapiente quae! Libero dignissimos exercitationem, incidunt dolores id ab cupiditate repudiandae ratione earum veniam.--}}
                                            {{--</p>--}}
                                        {{--</blockquote>--}}
                                    {{--</figure>--}}
                                    {{--<div class="entry-wrapper prl-20 prl-md-30 pt-20 pt-md-30 pb-15">--}}
                                        {{--<header class="entry-header">--}}
                                            {{--<h4 class="entry-title mb-10 mb-md-15 t-uppercase">--}}
                                                {{--<a href="blog_single_quote.html">We Help You Create Clean & Modern Interior Design</a>--}}
                                            {{--</h4>--}}
                                            {{--<div class="entry-meta mb-10">--}}
                                                {{--<ul class="tag-info list-inline">--}}
                                                    {{--<li><i class="icon fa fa-user"></i> By : Sara Doe</li>--}}
                                                    {{--<li><i class="icon fa fa-comments"></i> 14 Comments </li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</header>--}}
                                        {{--<div class="entry-content">--}}
                                            {{--<p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet imperdiet volutpat. Sed vitae quam congue, tincidunt nisi et, volutpat lacus. Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semper laoreet dapibus. Sed sit amet convallis enim. Phasellus maximus gravida augue, in sollicitudin odio lacinia ac. Morbi cursus ante massa, et accumsan nisl mollis et. Nam venenatis et felis quis port...</p>--}}
                                        {{--</div>--}}
                                        {{--<footer class="entry-footer text-right">--}}
                                            {{--<a href="blog_single_quote.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>--}}
                                        {{--</footer>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            {{--<!-- End Blog Post -->--}}

                            {{--<!-- Blog Post -->--}}
                            {{--<div class="blog-post col-xs-12">--}}
                                {{--<article class="entry panel">--}}
                                    {{--<figure class="entry-media">--}}
                                        {{--<div class="entry-date">--}}
                                            {{--<h4>13</h4>--}}
                                            {{--<h6>JUN</h6>--}}
                                        {{--</div>--}}
                                        {{--<div class="owl-slider" data-loop="true" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="1000" data-nav-speed="false" data-nav="true" data-xxs-items="1" data-xxs-nav="true" data-xs-items="1" data-xs-nav="true" data-sm-items="1" data-sm-nav="true" data-md-items="1" data-md-nav="true" data-lg-items="1" data-lg-nav="true">--}}
                                            {{--<figure class="item">--}}
                                                {{--<img src="assets/images/blog/blog_01.jpg" alt="">--}}
                                            {{--</figure>--}}
                                            {{--<figure class="item">--}}
                                                {{--<img src="assets/images/blog/blog_02.jpg" alt="">--}}
                                            {{--</figure>--}}
                                            {{--<figure class="item">--}}
                                                {{--<img src="assets/images/blog/blog_03.jpg" alt="">--}}
                                            {{--</figure>--}}
                                            {{--<figure class="item">--}}
                                                {{--<img src="assets/images/blog/blog_04.jpg" alt="">--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                    {{--</figure>--}}
                                    {{--<div class="entry-wrapper prl-20 prl-md-30 pt-20 pt-md-30 pb-15">--}}
                                        {{--<header class="entry-header">--}}
                                            {{--<h4 class="entry-title mb-10 mb-md-15 t-uppercase">--}}
                                                {{--<a href="blog_single_gallery.html">Co-founder Trying To Explain His Idea To His Employers</a>--}}
                                            {{--</h4>--}}
                                            {{--<div class="entry-meta mb-10">--}}
                                                {{--<ul class="tag-info list-inline">--}}
                                                    {{--<li><i class="icon fa fa-user"></i> By : Sara Doe</li>--}}
                                                    {{--<li><i class="icon fa fa-comments"></i> 14 Comments </li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</header>--}}
                                        {{--<div class="entry-content">--}}
                                            {{--<p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet imperdiet volutpat. Sed vitae quam congue, tincidunt nisi et, volutpat lacus. Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semper laoreet dapibus. Sed sit amet convallis enim. Phasellus maximus gravida augue, in sollicitudin odio lacinia ac. Morbi cursus ante massa, et accumsan nisl mollis et. Nam venenatis et felis quis port...</p>--}}
                                        {{--</div>--}}
                                        {{--<footer class="entry-footer text-right">--}}
                                            {{--<a href="blog_single_gallery.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>--}}
                                        {{--</footer>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            {{--<!-- End Blog Post -->--}}

                            {{--<!-- Blog Post -->--}}
                            {{--<div class="blog-post col-xs-12">--}}
                                {{--<article class="entry panel">--}}
                                    {{--<figure class="entry-media soundcloud-embed">--}}
                                        {{--<iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/19048953&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>--}}
                                        {{--<div class="entry-date">--}}
                                            {{--<h4>13</h4>--}}
                                            {{--<h6>JUN</h6>--}}
                                        {{--</div>--}}
                                    {{--</figure>--}}
                                    {{--<div class="entry-wrapper prl-20 prl-md-30 pt-20 pt-md-30 pb-15">--}}
                                        {{--<header class="entry-header">--}}
                                            {{--<h4 class="entry-title mb-10 mb-md-15 t-uppercase">--}}
                                                {{--<a href="blog_single_audio.html">Restaurant Employer Read Clients Orders On His iPad</a>--}}
                                            {{--</h4>--}}
                                            {{--<div class="entry-meta mb-10">--}}
                                                {{--<ul class="tag-info list-inline">--}}
                                                    {{--<li><i class="icon fa fa-user"></i> By : John Doe</li>--}}
                                                    {{--<li><i class="icon fa fa-comments"></i> 14 Comments </li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</header>--}}
                                        {{--<div class="entry-content">--}}
                                            {{--<p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet imperdiet volutpat. Sed vitae quam congue, tincidunt nisi et, volutpat lacus. Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semper laoreet dapibus. Sed sit amet convallis enim. Phasellus maximus gravida augue, in sollicitudin odio lacinia ac. Morbi cursus ante massa, et accumsan nisl mollis et. Nam venenatis et felis quis port...</p>--}}
                                        {{--</div>--}}
                                        {{--<footer class="entry-footer text-right">--}}
                                            {{--<a href="blog_single_audio.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>--}}
                                        {{--</footer>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            {{--<!-- End Blog Post -->--}}

                        </div>

                        <!-- Blog Pagination -->
                        <div class="page-pagination text-center mt-30 p-10 panel">
                            <nav>
                                <!-- Page Pagination -->
                                <ul class="page-pagination">
                                    <li><a class="page-numbers previous" href="blog_classic_left_sidebar.html#">Previous</a>
                                    </li>
                                    <li><a href="blog_classic_left_sidebar.html#" class="page-numbers">1</a>
                                    </li>
                                    <li><span class="page-numbers current">2</span>
                                    </li>
                                    <li><a href="blog_classic_left_sidebar.html#" class="page-numbers">3</a>
                                    </li>
                                    <li><a href="blog_classic_left_sidebar.html#" class="page-numbers">4</a>
                                    </li>
                                    <li><span class="page-numbers dots">...</span>
                                    </li>
                                    <li><a href="blog_classic_left_sidebar.html#" class="page-numbers">20</a>
                                    </li>
                                    <li><a href="blog_classic_left_sidebar.html#" class="page-numbers next">Next</a>
                                    </li>
                                </ul>
                                <!-- End Page Pagination -->
                            </nav>
                        </div>
                        <!-- End Blog Pagination -->

                    </div>
                    <!-- End Blog Area -->

                </div>
            </div>
        </div>
    </div>
    <!-- End Page Container -->
@stop