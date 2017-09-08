@extends('layouts.master')

@section('content')

    <div class="page-container ptb-60">
        <div class="container">
            <section class="sign-area panel p-40">
                <h3 class="sign-title">Sign In <small>Or <a href="{{url('/signup')}}" class="color-green">Sign Up</a></small></h3>
                <div class="row row-rl-0">
                    <div class="col-sm-6 col-md-7 col-left">
                        <form class="p-40" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                <label class="sr-only">Email</label>
                                <input type="email" id="email" name="email" class="form-control input-lg" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                <label class="sr-only">Password</label>
                                <input id="password" name="password" type="password" class="form-control input-lg" placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <a href="{{ route('password.request') }}" class="forgot-pass-link color-green">Forget Your Password ?</a>
                            </div>
                            <div class="custom-checkbox mb-20">
                                <input type="checkbox" id="remember_account" checked>
                                <label class="color-mid" for="remember_account">Keep me signed in on this computer.</label>
                            </div>
                            <button type="submit" class="btn btn-block btn-lg">Sign In</button>
                        </form>
                        <span class="or">Or</span>
                    </div>
                    <div class="col-sm-6 col-md-5 col-right">
                        <div class="social-login p-40">
                            <div class="mb-20">
                                <button class="btn btn-lg btn-block btn-social btn-facebook"><i class="fa fa-facebook-square"></i>Sign In with Facebook</button>
                            </div>
                            <div class="mb-20">
                                <button class="btn btn-lg btn-block btn-social btn-twitter"><i class="fa fa-twitter"></i>Sign In with Twitter</button>
                            </div>
                            <div class="mb-20">
                                <button class="btn btn-lg btn-block btn-social btn-google-plus"><i class="fa fa-google-plus"></i>Sign In with Google</button>
                            </div>
                            <div class="custom-checkbox mb-20">
                                <input type="checkbox" id="remember_social" name="remember" {{ old('remember') ? 'checked' : '' }}>>
                                <label class="color-mid" for="remember_social">Keep me signed in on this computer.</label>
                            </div>
                            <div class="text-center color-mid">
                                Need an Account ? <a href="{{url('/signup')}}" class="color-green">Create Account</a>
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
                {{--<div class="panel-heading">Login</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

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
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-8 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Login--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--Forgot Your Password?--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
