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
                        <div class="col-xs-12 col-md-6">
                            <div class="contact-area-col contact-info">
                                <div class="contact-info">
                                    <h3 class="t-uppercase h-title mb-20">Contact informations</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam officia accusamus qui est. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam officia accusamus qui est.</p>
                                    <ul class="contact-list mb-40">
                                        <li>
                                            <span class="icon lnr lnr-map-marker"></span>
                                            <h5>Address</h5>
                                            <p class="color-mid">Comre, 404 Design Street, Melbourne, Australia</p>
                                        </li>
                                        <li>
                                            <span class="icon lnr lnr-envelope"></span>
                                            <h5>Email</h5>
                                            <p class="color-mid">Email@address.com</p>
                                        </li>
                                        <li>
                                            <span class="icon lnr lnr-phone-handset"></span>
                                            <h5>Our phone</h5>
                                            <p class="color-mid">(+212) 584-241-654</p>
                                        </li>
                                    </ul>
                                    <ul class="social-icons social-icons--colored list-inline">
                                        <li class="social-icons__item">
                                            <a href="contact_us_01.html#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="social-icons__item">
                                            <a href="contact_us_01.html#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="social-icons__item">
                                            <a href="contact_us_01.html#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                        <li class="social-icons__item">
                                            <a href="contact_us_01.html#"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li class="social-icons__item">
                                            <a href="contact_us_01.html#"><i class="fa fa-pinterest"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="contact-area-col contact-form">
                                <h3 class="t-uppercase h-title mb-20">Contact Us</h3>
                                <form action="{{url('/contacts')}}" method="post">
                                    {{ csrf_field() }}
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" id="name" name="name" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="text" id="email" name="email" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>About</label>
                                        <input type="text" id="title" name="title" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea rows="5" id="content" name="content" class="form-control" required="required"></textarea>
                                    </div>
                                    <button class="btn">Send Message</button>
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