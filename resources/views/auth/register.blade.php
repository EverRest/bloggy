@extends('layouts.master')

@section('content')

    <div class="page-container ptb-60">
        <div class="container">
            <section class="sign-area panel p-40">
                <h3 class="sign-title">Sign Up <small>Or <a href="{{url('/login')}}" class="color-green">Sign In</a></small></h3>
                <div class="row row-rl-0">
                    <div class="col-sm-6 col-md-7 col-left">
                        <form class="p-40" action="{{route('register')}}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="sr-only">Full Name</label>

                                <input id="name" type="text" class="form-control input-lg" name="name" value="{{ old('name') }}" placeholder="Full Name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="sr-only">Email</label>
                                <input id="email" type="email" class="form-control input-lg" name="email" value="{{ old('email') }}" placeholder="Email" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="sr-only">Password</label>

                                <input id="password" type="password" class="form-control input-lg" name="password" placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="sr-only">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>
                            <div class="custom-checkbox mb-20">
                                <input type="checkbox" id="agree_terms" checked>
                                <label class="color-mid" for="agree_terms">I agree to the <a href="terms_conditions.html" class="color-green">Terms of Use</a> and <a href="terms_conditions.html" class="color-green">Privacy Statement</a>.</label>
                            </div>
                            <button type="submit" class="btn btn-block btn-lg">Sign Up</button>
                        </form>
                        <span class="or">Or</span>
                    </div>
                    <div class="col-sm-6 col-md-5 col-right">
                        <div class="social-login p-40">
                            <div class="mb-20">
                                <button class="btn btn-lg btn-block btn-social btn-facebook"><i class="fa fa-facebook-square"></i>Sign Up with Facebook</button>
                            </div>
                            <div class="mb-20">
                                <button class="btn btn-lg btn-block btn-social btn-twitter"><i class="fa fa-twitter"></i>Sign Up with Twitter</button>
                            </div>
                            <div class="mb-20">
                                <button class="btn btn-lg btn-block btn-social btn-google-plus"><i class="fa fa-google-plus"></i>Sign Up with Google</button>
                            </div>
                            <div class="custom-checkbox mb-20">
                                <input type="checkbox" id="remember_social" checked>
                                <label class="color-mid" for="remember_social">Keep me signed in on this computer.</label>
                            </div>
                            <div class="text-center color-mid">
                                Already have an Account ? <a href="signin.html" class="color-green">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Register</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                            {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Register--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
