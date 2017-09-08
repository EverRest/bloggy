@extends('layouts.master')

@section('content')
    <!-- Page Container -->
    <div class="page-container ptb-60">
        <div class="container">

            <!-- Contact Us Area -->
            <div class="contact-area contact-area-v1 panel">
                {{--<div class="row row-tb-20">--}}
                {{--<div class="col-xs-12">--}}
                {{--<div class="embed-responsive embed-responsive-16by9">--}}
                {{--<iframe class="embed-responsive-item" src="http://maps.google.com/maps?q=56.7638955,-120.0681474&amp;z=4&amp;output=embed"></iframe>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                <div class="ptb-30 prl-30">
                    <div class="row row-tb-20">
                        {{--<div class="col-xs-12 col-md-6">--}}
                            {{--<div class="contact-area-col contact-info">--}}
                                {{--<div class="contact-info">--}}
                                    {{--<h3 class="t-uppercase h-title mb-20">Contact informations</h3>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam officia accusamus qui est. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam officia accusamus qui est.</p>--}}
                                    {{--<ul class="contact-list mb-40">--}}
                                        {{--<li>--}}
                                            {{--<span class="icon lnr lnr-map-marker"></span>--}}
                                            {{--<h5>Address</h5>--}}
                                            {{--<p class="color-mid">Comre, 404 Design Street, Melbourne, Australia</p>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<span class="icon lnr lnr-envelope"></span>--}}
                                            {{--<h5>Email</h5>--}}
                                            {{--<p class="color-mid">Email@address.com</p>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<span class="icon lnr lnr-phone-handset"></span>--}}
                                            {{--<h5>Our phone</h5>--}}
                                            {{--<p class="color-mid">(+212) 584-241-654</p>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                    {{--<ul class="social-icons social-icons--colored list-inline">--}}
                                        {{--<li class="social-icons__item">--}}
                                            {{--<a href="contact_us_01.html#"><i class="fa fa-facebook"></i></a>--}}
                                        {{--</li>--}}
                                        {{--<li class="social-icons__item">--}}
                                            {{--<a href="contact_us_01.html#"><i class="fa fa-twitter"></i></a>--}}
                                        {{--</li>--}}
                                        {{--<li class="social-icons__item">--}}
                                            {{--<a href="contact_us_01.html#"><i class="fa fa-linkedin"></i></a>--}}
                                        {{--</li>--}}
                                        {{--<li class="social-icons__item">--}}
                                            {{--<a href="contact_us_01.html#"><i class="fa fa-google-plus"></i></a>--}}
                                        {{--</li>--}}
                                        {{--<li class="social-icons__item">--}}
                                            {{--<a href="contact_us_01.html#"><i class="fa fa-pinterest"></i></a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="col-xs-12 col-md-12">
                            <div class="contact-area-col contact-form">
                                <h3 class="t-uppercase h-title mb-20">Peace of wisdom</h3>
                                <form action="{{ url('/quote/store') }}" method="POST" enctype="multipart/form-data">
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
                                            <label>Author</label>
                                            <input type="text" name="author" id="author" class="form-control" required="required">
                                        </div>
                                        {{--<div class="form-group">--}}
                                            {{--<label>Category</label>--}}
                                            {{--<select name="category" id="category" class="form-control" required="required">--}}
                                                {{--<option value="0">Own Blog</option>--}}
                                                {{--@foreach($cats as $cat)--}}
                                                    {{--<option  value="{{$cat->id}}">{{$cat->title}}</option>--}}
                                                {{--@endforeach--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label>Hashtag</label>--}}
                                            {{--<select name="tags" id="category" class="form-control js-categories" required="required">--}}
                                            {{--<option value="0">Own Blog</option>--}}
                                            {{--@foreach($cats as $cat)--}}
                                            {{--<option value="{{$cat->id}}">{{$cat->title}}</option>--}}
                                            {{--@endforeach--}}
                                            {{--</select>--}}
                                            {{--<input type="hidden" name="tags" id="tags" class="form-control" required="required" value="1">--}}
                                        {{--</div>--}}
                                        <div class="form-group">
                                            {{--<form action="/upload-target" class="dropzone">--}}
                                            <label>Photo</label>
                                            <input type="file" name="photo" id="photo" class="form-control" required="required">
                                            {{--</form>--}}
                                        </div>
                                        <div class="form-group">
                                            <label>Text</label>
                                            <textarea rows="5" name="content" id="content" class="form-control" required="required"></textarea>
                                        </div>
                                        <input type="submit" class="btn" value="Send!" />
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact Us Area -->

        </div>
    </div>
    <!-- End Page Container -->
@stop