    <!-- Top Bar -->
    <div class="top-bar bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 is-hidden-sm-down">
                    <ul class="nav-top nav-top-left list-inline t-left">
                        <li><a href="terms_conditions.html"><i class="fa fa-question-circle"></i>Newcommer Guide</a>
                        </li>
                        <li><a href="faq.html"><i class="fa fa-support"></i>User Assistance</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-8">
                    <ul class="nav-top nav-top-right list-inline t-xs-center t-md-right">
                        {{--<li>--}}
                            {{--<a href="index.html#"><i class="fa fa-flag-usa"></i>English <i class="fa fa-caret-down"></i></a>--}}
                            {{--<ul>--}}
                                {{--<li><a href="index.html#"><i class="fa fa-flag-usa"></i>English</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="index.html#"><i class="fa fa-flag-fra"></i>France</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="index.html#"><i class="fa fa-flag-ger"></i>Germany</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="index.html#"><i class="fa fa-flag-rus"></i>Russia</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="index.html#"><i class="fa fa-usd"></i>USD <i class="fa fa-caret-down"></i></a>--}}
                            {{--<ul>--}}
                                {{--<li><a href="index.html#">USD - US Dollar</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="index.html#">EUR - Euro</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="index.html#">CNY - Chinese Yuan</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="index.html#">RUB - Russian Ruble</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        @if (Auth::guest())
                            <li><a href="{{url('/login')}}"><i class="fa fa-lock"></i>Sign In</a>
                            </li>
                            <li><a href="{{url('/register')}}"><i class="fa fa-user"></i>Sign Up</a>
                            </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Bar -->

    <!-- Header Header -->
    <div class="header-header bg-white">
        <div class="container">
            <div class="row row-rl-0 row-tb-20 row-md-cell">
                <div class="brand col-md-3 t-xs-center t-md-left valign-middle">
                    <h1>
                        <a href="{{url('/')}}" class="logo">
                        {{--<img src="{!! URL::asset('images/logo.png') !!}" alt="" width="250">--}}
                        BLOGGY
                        </a>
                    </h1>
                </div>
                <div class="header-search col-md-9">
                    <div class="row row-tb-10 ">
                        <div class="col-sm-8">
                            <form class="search-form" action="{{url('/search')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input name="search" type="text" class="form-control input-lg search-input" placeholder="Enter Keywords Here ..." required="required">
                                    <div class="input-group-btn">
                                        <div class="input-group">
                                            {{--<select class="form-control input-lg search-select">--}}
                                                {{--<option value="0">All</option>--}}
                                                {{--<option value="1">By author</option>--}}
                                                {{--<option value="2">By title</option>--}}
                                                {{--<option value="3">By content</option>--}}
                                            {{--</select>--}}
                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-lg btn-search btn-block">
                                                    <i class="fa fa-search font-16"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-4 t-xs-center t-md-right">
                            {{--<div class="header-cart">--}}
                                {{--<a href="cart.html">--}}
                                    {{--<span class="icon lnr lnr-cart"></span>--}}
                                    {{--<div><span class="cart-number">0</span>--}}
                                    {{--</div>--}}
                                    {{--<span class="title">History</span>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            @if( Auth::user() )
                                <div class="header-wishlist ml-20">
                                    <a href="wishlist.html">
                                        <span class="icon lnr lnr-heart font-30"></span>
                                        <span class="title">Favourites List</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Header -->

    <!-- Header Menu -->
    <div class="header-menu bg-blue">
        <div class="container">
            <nav class="nav-bar">
                <div class="nav-header">
                            <span class="nav-toggle" data-toggle="#header-navbar">
		                        <i></i>
		                        <i></i>
		                        <i></i>
		                    </span>
                </div>
                <div id="header-navbar" class="nav-collapse">
                    <ul class="nav-menu">
                        <li class="{{ Request::is('/') ? 'active' : '' }}">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        @if( Auth::user() )
                            {{--<li class="{{ Request::is('category') ? 'active' : '' }}">--}}
                                {{--<a href="{{url('/category')}}">Categories</a>--}}
                                {{--@if(!empty($cats))--}}
                                    {{--<ul>--}}
                                        {{--@foreach($cats as $cat)--}}
                                            {{--<li><a href="{{url('/category/' . $cat->id)}}">{{$cat->title}}</a>--}}
                                            {{--</li>--}}
                                        {{--@endforeach--}}
                                    {{--</ul>--}}
                                {{--@endif--}}
                            {{--</li>--}}
                            <li>
                                <a href="{{url('/profile')}}" class="{{ Request::is('/profile') ? 'active' : '' }}">Profile</a>
                                {{--<a href="{{url('/profile/' . Auth::user()->id)}}" class="{{ Request::is('/profile') ? 'active' : '' }}">Profile</a>--}}
                            </li>
                        {{--<li class="dropdown-mega-menu">--}}
                            {{--<a href="/">Profile</a>--}}
                            {{--<div class="mega-menu">--}}
                                {{--<div class="row row-v-10">--}}
                                    {{--<div class="col-md-3">--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="deals_grid.html">Grid View</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="deals_grid_sidebar.html">Grid With Sidebar</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="deals_list.html">List View</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="deal_single.html">Deal Single</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-3">--}}
                                        {{--<figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="{!! URL::asset('public/images/deals/deal_03.jpg') !!}">--}}
                                            {{--<div class="label-discount top-10 right-10">-15%</div>--}}
                                            {{--<div class="deal-about p-10 pos-a bottom-0 left-0">--}}
                                                {{--<div class="rating mb-10">--}}
                                                            {{--<span class="rating-stars rate-allow" data-rating="2">--}}
										                        {{--<i class="fa fa-star-o"></i>--}}
										                        {{--<i class="fa fa-star-o"></i>--}}
										                        {{--<i class="fa fa-star-o"></i>--}}
										                        {{--<i class="fa fa-star-o"></i>--}}
										                        {{--<i class="fa fa-star-o"></i>--}}
										                    {{--</span>--}}
                                                {{--</div>--}}
                                                {{--<h6 class="deal-title mb-10">--}}
                                                    {{--<a href="deal_single.html" class="color-lighter">Aenean ut orci vel massa</a>--}}
                                                {{--</h6>--}}
                                            {{--</div>--}}
                                        {{--</figure>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-3">--}}
                                        {{--<figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="{!! URL::asset('public/images/deals/deal_04.jpg') !!}">--}}
                                            {{--<div class="label-discount top-10 right-10">-60%</div>--}}
                                            {{--<div class="deal-about p-10 pos-a bottom-0 left-0">--}}
                                                {{--<div class="rating mb-10">--}}
                                                            {{--<span class="rating-stars rate-allow" data-rating="3">--}}
										                        {{--<i class="fa fa-star-o"></i>--}}
										                        {{--<i class="fa fa-star-o"></i>--}}
										                        {{--<i class="fa fa-star-o"></i>--}}
										                        {{--<i class="fa fa-star-o"></i>--}}
										                        {{--<i class="fa fa-star-o"></i>--}}
										                    {{--</span>--}}
                                                {{--</div>--}}
                                                {{--<h6 class="deal-title mb-10">--}}
                                                    {{--<a href="deal_single.html" class="color-lighter">Aenean ut orci vel massa</a>--}}
                                                {{--</h6>--}}
                                            {{--</div>--}}
                                        {{--</figure>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-3">--}}
                                        {{--<figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="{!! URL::asset('public/images/deals/deal_05.jpg') !!}">--}}
                                            {{--<div class="label-discount top-10 right-10">-60%</div>--}}
                                            {{--<div class="deal-about p-10 pos-a bottom-0 left-0">--}}
                                                {{--<div class="rating mb-10">--}}
                                                            {{--<span class="rating-stars rate-allow" data-rating="5">--}}
										                        {{--<i class="fa fa-star-o"></i>--}}
										                        {{--<i class="fa fa-star-o"></i>--}}
										                        {{--<i class="fa fa-star-o"></i>--}}
										                        {{--<i class="fa fa-star-o"></i>--}}
										                        {{--<i class="fa fa-star-o"></i>--}}
										                    {{--</span>--}}
                                                {{--</div>--}}
                                                {{--<h6 class="deal-title mb-10">--}}
                                                    {{--<a href="deal_single.html" class="color-lighter">Aenean ut orci vel massa</a>--}}
                                                {{--</h6>--}}
                                            {{--</div>--}}
                                        {{--</figure>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}

                            {{--<li>--}}
                                {{--<a href="{{url('post/create')}}">New Post</a>--}}
                                {{--<ul>--}}
                                    {{--@foreach($cats as $cat)--}}
                                        {{--<li>--}}
                                            {{--<a href="{{url('/category/' . $cat->id)}}">{{$cat->title}}</a>--}}
                                        {{--</li>--}}
                                    {{--@endforeach--}}
                                {{--<li><a href="blog_single_gallery.html">Gallery Post</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="blog_single_youtube.html">Youtube Video</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="blog_single_vimeo.html">Vimeo Video</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="blog_single_map.html">Google Map</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="blog_single_quote.html">Quote Post</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="blog_single_audio.html">Audio Post</a>--}}
                                {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            <li class="{{ Request::is('post') ? 'active' : '' }}">
                                <a >Blog</a>
                                <ul>
                                    <li>
                                        <a href="{{url('/post')}}">My Blog</a>
                                        {{--<ul>--}}
                                            {{--<li><a href="blog_classic_right_sidebar.html">Right Sidenar</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="blog_classic_left_sidebar.html">Left Sidebar</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="blog_classic_fullwidth.html">Full Width</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    </li>
                                    {{--<li>--}}
                                        {{--<a href="{{url('/post/all')}}">Most Popular Blog's</a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="blog_grid_3col.html">3 Columns</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="blog_grid_2col.html">2 Columns</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="blog_grid_right_sidebar.html">Right Sidebar</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="/post/create">New Post</a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="blog_list_right_sidebar.html">Right Sidenar</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="blog_list_left_sidebar.html">Left Sidebar</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="blog_list_fullwidth.html">Full Width</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    <li>
                                        <a href="{{url('post/create')}}">New Post</a>
                                        {{--<ul>--}}
                                            {{--<li><a href="blog_single_standard.html">Standard Post</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="blog_single_gallery.html">Gallery Post</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="blog_single_youtube.html">Youtube Video</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="blog_single_vimeo.html">Vimeo Video</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="blog_single_map.html">Google Map</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="blog_single_quote.html">Quote Post</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="blog_single_audio.html">Audio Post</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ Request::is('quote') ? 'active' : '' }}">
                                <a href="{{url('/quote')}}">Quotes</a>
                                <ul>
                                    <li><a href="{{url('/quote/create')}}">New Quote</a>
                                    </li>
                                    {{--<li><a href="{{url('/quote')}}">My Quotes</a>--}}
                                    {{--</li>--}}
                                    <li><a href="{{url('/quote')}}">All Quotes</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ Request::is('link') ? 'active' : '' }}">
                                <a href="{{url('/link')}}">Links</a>
                                <ul>
                                    <li><a href="{{url('/link/create')}}">New Link</a>
                                    </li>
                                    <li><a href="{{url('/link')}}">My Links</a>
                                    </li>
                                    <li><a href="{{url('/link/all')}}">All Links</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        <li class="{{ Request::is('contacts') ? 'active' : '' }}">
                            <a href="{{url('/contacts')}}">Contact Us</a>
                            {{--<ul>--}}
                                {{--<li><a href="contact_us_01.html">Contact Us 1</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="contact_us_02.html">Contact Us 2</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        </li>
                        {{--<li>--}}
                            {{--<a href="index.html#">Pages</a>--}}
                            {{--<ul>--}}
                                {{--<li><a href="https://friday-theme.firebaseapp.com/index-2.html">Home Default</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="signin.html">Sign In</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="signup.html">Sign Up</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="https://friday-theme.firebaseapp.com/404.html">404 Page</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="faq.html">FAQ Page</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="cart.html">Cart Page</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="checkout_method.html">Checkout</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="checkout_method.html">Checkout method</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="checkout_billing.html">Billing Information</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="checkout_payment.html">Payment Information</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="index.html#">Contact Us</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="contact_us_01.html">Contact Us 1</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="contact_us_02.html">Contact Us 2</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="index.html#">Deals Pages</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="deals_grid.html">Grid View</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="deals_list.html">List View</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="deal_single.html">Deal Single</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="index.html#">Coupons Pages</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="coupons_grid.html">Grid View</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="coupons_grid_sidebar.html">Grid With Sidebar</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="coupons_list.html">List View</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="terms_conditions.html">Terms &amp; conditions</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    </ul>
                </div>
                <div class="nav-menu nav-menu-fixed">
                    <a href="{{url('/quote/daily')}}">Get Quote</a>
                </div>
            </nav>
        </div>
    </div>
    <!-- End Header Menu -->