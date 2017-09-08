@extends('layouts.master')

@section('content')
    <div class="page-container ptb-60">
        <div class="container">
            <section class="sign-area panel p-40">
                <h3 class="sign-title">Sign In <small>Or <a href="signup.html" class="color-green">Sign Up</a></small></h3>
                <div class="row row-rl-0">
                    <div class="col-sm-6 col-md-7 col-left">
                        <form class="p-40" action="signin.html#" method="post">
                            <div class="form-group">
                                <label class="sr-only">Email</label>
                                <input type="text" class="form-control input-lg" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Password</label>
                                <input type="password" class="form-control input-lg" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <a href="signin.html#" class="forgot-pass-link color-green">Forget Youe Password ?</a>
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
                                <input type="checkbox" id="remember_social" checked>
                                <label class="color-mid" for="remember_social">Keep me signed in on this computer.</label>
                            </div>
                            <div class="text-center color-mid">
                                Need an Account ? <a href="signup.html" class="color-green">Create Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@stop