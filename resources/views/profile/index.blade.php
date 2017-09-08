@extends('layouts.master')

@section('content')
    <!-- Page Container -->
    <div class="page-container ptb-60">
        <div class="container">
            <div class="row row-rl-10 row-tb-20">
                <div class="page-sidebar col-sm-4 col-md-3">
                    <aside class="store-header-area panel t-center">
                        <div class="row">
                            <div class="col-xs-12 avatar-wrapper">
                                <figure class="pt-10 pl-10">
                                    <img style="width: 100%;" src="assets/images/brands/store_logo.jpg" alt="">
                                </figure>
                            </div>
                            {{--<div class="col-xs-12">--}}
                                {{--<div class="store-about ptb-30 prl-10">--}}
                                    {{--<h3 class="mb-10">Amazon Store</h3>--}}
                                    {{--<div class="rating mb-10">--}}
                                    {{--<span class="rating-stars rate-allow" data-rating="3">--}}
                                        {{--<i class="fa fa-star-o"></i>--}}
                                        {{--<i class="fa fa-star-o"></i>--}}
                                        {{--<i class="fa fa-star-o star-active"></i>--}}
                                        {{--<i class="fa fa-star-o"></i>--}}
                                        {{--<i class="fa fa-star-o"></i>--}}
                                    {{--</span>--}}
                                        {{--<span class="rating-reviews">--}}
                                        {{--( <span class="rating-count">205</span> rates )--}}
                                                {{--</span>--}}
                                    {{--</div>--}}
                                    {{--<p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio officiis at accusantium ducimus excepturi cumque ad commodi libero nihil rem voluptatibus veniam ipsa ullam esse quia quae fuga, quidem iusto.</p>--}}
                                    {{--<button class="btn btn-info">FOLLOW</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="col-xs-12">
                                <div class="store-splitter-left">
                                    <h3>{{Auth::user()->name}}</h3>
                                    <header class="left-splitter-header prl-10 ptb-20 bg-lighter">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <a href="">
                                                    {{--{{dd(Auth::user()->avatar)}}--}}
                                                    {{--<img id="avatar" src="{{URL::asset('images/users/3.jpg')}}" alt="avatar"/>--}}
                                                    {{--<img id="avatar" src="{{URL::asset('images/deals/avatar_01.jpg')}}" alt="avatar"/>--}}
                                                    {{--<img id="avatar" src="https://i.ytimg.com/vi/a0CDJZu4M5I/movieposter.jpg" alt="avatar"/>--}}
                                                    <img id="avatar" src="@if (empty(Auth::user()->avatar)) {{'https://i.ytimg.com/vi/a0CDJZu4M5I/movieposter.jpg'}} @else {{  url(Auth::user()->avatar) }} @endif" alt="avatar"/>
                                                </a>
                                                <hr />
                                            </div>
                                            <div class="col-xs-4">
                                                <h2>{{count($user->posts)}}</h2>
                                                <p>Posts</p>
                                            </div>
                                            <div class="col-xs-4">
                                                <h2>{{count($user->quotes)}}</h2>
                                                <p>Quotes</p>
                                            </div>
                                            <div class="col-xs-4">
                                                <h2>{{count($user->links)}}</h2>
                                                <p>Links</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <hr />
                                            <h3>status: <strong></strong></h3>
                                        </div>
                                    </header>
                                    <div class="left-splitter-body prl-20 ptb-20">
                                        <div class="row row-rl-10 row-tb-10">
                                            <div class="col-md-6 col-sm-4 col-xs-6">
                                                <img src="assets/images/products/thumb_01.jpg" alt="">
                                            </div>
                                            <div class="col-md-6 col-sm-4 col-xs-6">
                                                <img src="assets/images/products/thumb_02.jpg" alt="">
                                            </div>
                                            <div class="col-md-6 col-sm-4 col-xs-6">
                                                <img src="assets/images/products/thumb_03.jpg" alt="">
                                            </div>
                                            <div class="col-md-6 col-sm-4 col-xs-6">
                                                <img src="assets/images/products/thumb_04.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <footer class="left-splitter-social prl-20 ptb-20">
                                        <ul class="list-inline social-icons social-icons--colored t-center">
                                            <li class="social-icons__item">
                                                <a href="store_single_01.html#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="social-icons__item">
                                                <a href="store_single_01.html#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="social-icons__item">
                                                <a href="store_single_01.html#"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li class="social-icons__item">
                                                <a href="store_single_01.html#"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="page-content col-sm-8 col-md-9">
                    <div class="contact-area-col contact-form">
                        <h3 class="t-uppercase h-title mb-20"><span>{{Auth::user()->name}}</span> profile</h3>
                        <form id="profile-form" action="{{ url('/profile') }}" method="POST" enctype="multipart/form-data">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if( Auth::user()->id )
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{Auth::user()->id}}">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" id="name" class="form-control bg-white" required="required" value="{{Auth::user()->name}}">
                                </div>
                                {{--<div class="form-group hidden">--}}
                                <div class="form-group upload-sec" style="display:none;">
                                    {{--<form action="/upload-target" class="dropzone">--}}
                                    <label>Avatar</label>
                                    <input type="file" name="avatar" id="photo" class="form-control bg-white" value="{{Auth::user()->avatar}}">
                                    {{--</form>--}}
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" id="email" class="form-control bg-white" required="required" value="{{Auth::user()->email}}">
                                </div>
                                <div class="form-group">
                                    <label>Job</label>
                                    <input type="text" name="job" class="form-control bg-white" placeholder="{{!empty($user->job)? $user->job : 'blogger...'}}">
                                </div>
                                <div class="form-group">
                                    <label>About</label>
                                    <textarea rows="5" name="about" class="form-control bg-white" placeholder="{{!empty($user->job)? $user->about : 'Few words about me...'}}"></textarea>
                                </div>
                                <input type="submit" class="btn" value="Save" />
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Container -->
@stop