@extends('layouts.master')

@section('content')

    <!-- Page Container -->
    <div class="page-container ptb-60">
        <div class="container">
            <div class="row row-rl-10 row-tb-20">
                <div class="page-content col-xs-12 col-lg-10 col-lg-offset-1">

                    <!-- Blog Area -->
                    <div class="blog-area blog-classic">

                        <div class="row row-tb-20">
                            @if (!empty($posts))
                                @foreach($posts as $post)
                                    <!-- Blog Post -->
                                    <div class="blog-post col-xs-12">
                                        <article class="entry panel">
                                            <div class="row row-rl-0 row-tb-0 row-md-cell">
                                                <div class="col-xs-12 col-md-5 col-lg-4">
                                                    <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="{{URL::asset($post->picture)}}">
                                                        <div class="entry-date">
                                                            <h4>{{strtoupper(getdate(strtotime($post->created_at))['mday'])}}</h4>
                                                            <h6>{{strtoupper(substr(getdate(strtotime($post->created_at))['month'], 0, 3))}}</h6>
                                                        </div>
                                                    </figure>
                                                </div>
                                                <div class="col-xs-12 col-md-7 col-lg-8 prl-15 prl-md-20 pt-20 pt-md-30 pb-15">
                                                    <div class="entry-wrapper">
                                                        <header class="entry-header">
                                                            <h3 class="entry-title mb-10 mb-md-15">
                                                                <a href="{{url('/post/' . $post->id)}}">{{$post->title}}</a>
                                                            </h3>
                                                            <div class="entry-meta mb-10">
                                                                <ul class="tag-info list-inline">
                                                                    <li> <i class="icon fa fa-user"></i> By : {{$post['author']['name']}}</li>
                                                                    <li><i class="icon fa fa-comments"></i> 14 Comments </li>
                                                                </ul>
                                                            </div>
                                                        </header>

                                                        <div class="entry-content">
                                                            <p class="entry-summary">
                                                                {{substr($post->content, 0, 300)}}...
                                                            </p>
                                                        </div>
                                                        <!-- .entry-wrapper -->

                                                        <footer class="entry-footer text-right">
                                                            <a href="{{url('/post/' . $post->id)}}" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                                        </footer>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- End Blog Post -->
                                @endforeach
                            @endif
                            <!-- Blog Post -->
                            {{--<div class="blog-post col-xs-12">--}}
                                {{--<article class="entry panel">--}}
                                    {{--<div class="row row-rl-0 row-tb-0 row-md-cell">--}}
                                        {{--<div class="col-xs-12 col-md-5 col-lg-4">--}}
                                            {{--<figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="assets/images/blog/post_02.jpg">--}}
                                                {{--<div class="entry-date">--}}
                                                    {{--<h4>13</h4>--}}
                                                    {{--<h6>JUN</h6>--}}
                                                {{--</div>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-xs-12 col-md-7 col-lg-8 prl-15 prl-md-20 pt-20 pt-md-30 pb-15">--}}
                                            {{--<div class="entry-wrapper">--}}
                                                {{--<header class="entry-header">--}}
                                                    {{--<h3 class="entry-title mb-10 mb-md-15">--}}
                                                        {{--<a href="blog_single_standard.html">Restaurant Employer Read Clients Orders On His iPad</a>--}}
                                                    {{--</h3>--}}
                                                    {{--<div class="entry-meta mb-10">--}}
                                                        {{--<ul class="tag-info list-inline">--}}
                                                            {{--<li> <i class="icon fa fa-user"></i> By : John Doe</li>--}}
                                                            {{--<li><i class="icon fa fa-comments"></i> 14 Comments </li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                {{--</header>--}}

                                                {{--<div class="entry-content">--}}
                                                    {{--<p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet imperdiet volutpat. Sed vitae quam congue, tincidunt nisi et, volutpat lacus. Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semp...</p>--}}
                                                {{--</div>--}}
                                                {{--<!-- .entry-wrapper -->--}}

                                                {{--<footer class="entry-footer text-right">--}}
                                                    {{--<a href="blog_single_standard.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>--}}
                                                {{--</footer>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            <!-- End Blog Post -->

                            <!-- Blog Post -->
                            {{--<div class="blog-post col-xs-12">--}}
                                {{--<article class="entry panel">--}}
                                    {{--<div class="row row-rl-0 row-tb-0 row-md-cell">--}}
                                        {{--<div class="col-xs-12 col-md-5 col-lg-4">--}}
                                            {{--<figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="assets/images/blog/post_03.jpg">--}}
                                                {{--<div class="entry-date">--}}
                                                    {{--<h4>13</h4>--}}
                                                    {{--<h6>JUN</h6>--}}
                                                {{--</div>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-xs-12 col-md-7 col-lg-8 prl-15 prl-md-20 pt-20 pt-md-30 pb-15">--}}
                                            {{--<div class="entry-wrapper">--}}
                                                {{--<header class="entry-header">--}}
                                                    {{--<h3 class="entry-title mb-10 mb-md-15">--}}
                                                        {{--<a href="blog_single_standard.html">Restaurant Employer Read Clients Orders On His iPad</a>--}}
                                                    {{--</h3>--}}
                                                    {{--<div class="entry-meta mb-10">--}}
                                                        {{--<ul class="tag-info list-inline">--}}
                                                            {{--<li> <i class="icon fa fa-user"></i> By : John Doe</li>--}}
                                                            {{--<li><i class="icon fa fa-comments"></i> 14 Comments </li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                {{--</header>--}}

                                                {{--<div class="entry-content">--}}
                                                    {{--<p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet imperdiet volutpat. Sed vitae quam congue, tincidunt nisi et, volutpat lacus. Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semp...</p>--}}
                                                {{--</div>--}}
                                                {{--<!-- .entry-wrapper -->--}}

                                                {{--<footer class="entry-footer text-right">--}}
                                                    {{--<a href="blog_single_standard.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>--}}
                                                {{--</footer>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            <!-- End Blog Post -->

                            <!-- Blog Post -->
                            {{--<div class="blog-post col-xs-12">--}}
                                {{--<article class="entry panel">--}}
                                    {{--<div class="row row-rl-0 row-tb-0 row-md-cell">--}}
                                        {{--<div class="col-xs-12 col-md-5 col-lg-4">--}}
                                            {{--<figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="assets/images/blog/post_04.jpg">--}}
                                                {{--<div class="entry-date">--}}
                                                    {{--<h4>13</h4>--}}
                                                    {{--<h6>JUN</h6>--}}
                                                {{--</div>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-xs-12 col-md-7 col-lg-8 prl-15 prl-md-20 pt-20 pt-md-30 pb-15">--}}
                                            {{--<div class="entry-wrapper">--}}
                                                {{--<header class="entry-header">--}}
                                                    {{--<h3 class="entry-title mb-10 mb-md-15">--}}
                                                        {{--<a href="blog_single_standard.html">Restaurant Employer Read Clients Orders On His iPad</a>--}}
                                                    {{--</h3>--}}
                                                    {{--<div class="entry-meta mb-10">--}}
                                                        {{--<ul class="tag-info list-inline">--}}
                                                            {{--<li> <i class="icon fa fa-user"></i> By : John Doe</li>--}}
                                                            {{--<li><i class="icon fa fa-comments"></i> 14 Comments </li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                {{--</header>--}}

                                                {{--<div class="entry-content">--}}
                                                    {{--<p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet imperdiet volutpat. Sed vitae quam congue, tincidunt nisi et, volutpat lacus. Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semp...</p>--}}
                                                {{--</div>--}}
                                                {{--<!-- .entry-wrapper -->--}}

                                                {{--<footer class="entry-footer text-right">--}}
                                                    {{--<a href="blog_single_standard.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>--}}
                                                {{--</footer>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            <!-- End Blog Post -->

                            <!-- Blog Post -->
                            {{--<div class="blog-post col-xs-12">--}}
                                {{--<article class="entry panel">--}}
                                    {{--<div class="row row-rl-0 row-tb-0 row-md-cell">--}}
                                        {{--<div class="col-xs-12 col-md-5 col-lg-4">--}}
                                            {{--<figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="assets/images/blog/post_05.jpg">--}}
                                                {{--<div class="entry-date">--}}
                                                    {{--<h4>13</h4>--}}
                                                    {{--<h6>JUN</h6>--}}
                                                {{--</div>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-xs-12 col-md-7 col-lg-8 prl-15 prl-md-20 pt-20 pt-md-30 pb-15">--}}
                                            {{--<div class="entry-wrapper">--}}
                                                {{--<header class="entry-header">--}}
                                                    {{--<h3 class="entry-title mb-10 mb-md-15">--}}
                                                        {{--<a href="blog_single_standard.html">Restaurant Employer Read Clients Orders On His iPad</a>--}}
                                                    {{--</h3>--}}
                                                    {{--<div class="entry-meta mb-10">--}}
                                                        {{--<ul class="tag-info list-inline">--}}
                                                            {{--<li> <i class="icon fa fa-user"></i> By : John Doe</li>--}}
                                                            {{--<li><i class="icon fa fa-comments"></i> 14 Comments </li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                {{--</header>--}}

                                                {{--<div class="entry-content">--}}
                                                    {{--<p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet imperdiet volutpat. Sed vitae quam congue, tincidunt nisi et, volutpat lacus. Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semp...</p>--}}
                                                {{--</div>--}}
                                                {{--<!-- .entry-wrapper -->--}}

                                                {{--<footer class="entry-footer text-right">--}}
                                                    {{--<a href="blog_single_standard.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>--}}
                                                {{--</footer>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            <!-- End Blog Post -->

                            <!-- Blog Post -->
                            {{--<div class="blog-post col-xs-12">--}}
                                {{--<article class="entry panel">--}}
                                    {{--<div class="row row-rl-0 row-tb-0 row-md-cell">--}}
                                        {{--<div class="col-xs-12 col-md-5 col-lg-4">--}}
                                            {{--<figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="assets/images/blog/post_06.jpg">--}}
                                                {{--<div class="entry-date">--}}
                                                    {{--<h4>13</h4>--}}
                                                    {{--<h6>JUN</h6>--}}
                                                {{--</div>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-xs-12 col-md-7 col-lg-8 prl-15 prl-md-20 pt-20 pt-md-30 pb-15">--}}
                                            {{--<div class="entry-wrapper">--}}
                                                {{--<header class="entry-header">--}}
                                                    {{--<h3 class="entry-title mb-10 mb-md-15">--}}
                                                        {{--<a href="blog_single_standard.html">Restaurant Employer Read Clients Orders On His iPad</a>--}}
                                                    {{--</h3>--}}
                                                    {{--<div class="entry-meta mb-10">--}}
                                                        {{--<ul class="tag-info list-inline">--}}
                                                            {{--<li> <i class="icon fa fa-user"></i> By : John Doe</li>--}}
                                                            {{--<li><i class="icon fa fa-comments"></i> 14 Comments </li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                {{--</header>--}}

                                                {{--<div class="entry-content">--}}
                                                    {{--<p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet imperdiet volutpat. Sed vitae quam congue, tincidunt nisi et, volutpat lacus. Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semp...</p>--}}
                                                {{--</div>--}}
                                                {{--<!-- .entry-wrapper -->--}}

                                                {{--<footer class="entry-footer text-right">--}}
                                                    {{--<a href="blog_single_standard.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>--}}
                                                {{--</footer>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            <!-- End Blog Post -->

                            <!-- Blog Post -->
                            {{--<div class="blog-post col-xs-12">--}}
                                {{--<article class="entry panel">--}}
                                    {{--<div class="row row-rl-0 row-tb-0 row-md-cell">--}}
                                        {{--<div class="col-xs-12 col-md-5 col-lg-4">--}}
                                            {{--<figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="assets/images/blog/post_07.jpg">--}}
                                                {{--<div class="entry-date">--}}
                                                    {{--<h4>13</h4>--}}
                                                    {{--<h6>JUN</h6>--}}
                                                {{--</div>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-xs-12 col-md-7 col-lg-8 prl-15 prl-md-20 pt-20 pt-md-30 pb-15">--}}
                                            {{--<div class="entry-wrapper">--}}
                                                {{--<header class="entry-header">--}}
                                                    {{--<h3 class="entry-title mb-10 mb-md-15">--}}
                                                        {{--<a href="blog_single_standard.html">Restaurant Employer Read Clients Orders On His iPad</a>--}}
                                                    {{--</h3>--}}
                                                    {{--<div class="entry-meta mb-10">--}}
                                                        {{--<ul class="tag-info list-inline">--}}
                                                            {{--<li> <i class="icon fa fa-user"></i> By : John Doe</li>--}}
                                                            {{--<li><i class="icon fa fa-comments"></i> 14 Comments </li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                {{--</header>--}}

                                                {{--<div class="entry-content">--}}
                                                    {{--<p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet imperdiet volutpat. Sed vitae quam congue, tincidunt nisi et, volutpat lacus. Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semp...</p>--}}
                                                {{--</div>--}}
                                                {{--<!-- .entry-wrapper -->--}}

                                                {{--<footer class="entry-footer text-right">--}}
                                                    {{--<a href="blog_single_standard.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>--}}
                                                {{--</footer>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            <!-- End Blog Post -->

                            <!-- Blog Post -->
                            {{--<div class="blog-post col-xs-12">--}}
                                {{--<article class="entry panel">--}}
                                    {{--<div class="row row-rl-0 row-tb-0 row-md-cell">--}}
                                        {{--<div class="col-xs-12 col-md-5 col-lg-4">--}}
                                            {{--<figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="assets/images/blog/post_08.jpg">--}}
                                                {{--<div class="entry-date">--}}
                                                    {{--<h4>13</h4>--}}
                                                    {{--<h6>JUN</h6>--}}
                                                {{--</div>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-xs-12 col-md-7 col-lg-8 prl-15 prl-md-20 pt-20 pt-md-30 pb-15">--}}
                                            {{--<div class="entry-wrapper">--}}
                                                {{--<header class="entry-header">--}}
                                                    {{--<h3 class="entry-title mb-10 mb-md-15">--}}
                                                        {{--<a href="blog_single_standard.html">Restaurant Employer Read Clients Orders On His iPad</a>--}}
                                                    {{--</h3>--}}
                                                    {{--<div class="entry-meta mb-10">--}}
                                                        {{--<ul class="tag-info list-inline">--}}
                                                            {{--<li> <i class="icon fa fa-user"></i> By : John Doe</li>--}}
                                                            {{--<li><i class="icon fa fa-comments"></i> 14 Comments </li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                {{--</header>--}}

                                                {{--<div class="entry-content">--}}
                                                    {{--<p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet imperdiet volutpat. Sed vitae quam congue, tincidunt nisi et, volutpat lacus. Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semp...</p>--}}
                                                {{--</div>--}}
                                                {{--<!-- .entry-wrapper -->--}}

                                                {{--<footer class="entry-footer text-right">--}}
                                                    {{--<a href="blog_single_standard.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>--}}
                                                {{--</footer>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            <!-- End Blog Post -->

                            <!-- Blog Post -->
                            {{--<div class="blog-post col-xs-12">--}}
                                {{--<article class="entry panel">--}}
                                    {{--<div class="row row-rl-0 row-tb-0 row-md-cell">--}}
                                        {{--<div class="col-xs-12 col-md-5 col-lg-4">--}}
                                            {{--<figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="assets/images/blog/post_09.jpg">--}}
                                                {{--<div class="entry-date">--}}
                                                    {{--<h4>13</h4>--}}
                                                    {{--<h6>JUN</h6>--}}
                                                {{--</div>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-xs-12 col-md-7 col-lg-8 prl-15 prl-md-20 pt-20 pt-md-30 pb-15">--}}
                                            {{--<div class="entry-wrapper">--}}
                                                {{--<header class="entry-header">--}}
                                                    {{--<h3 class="entry-title mb-10 mb-md-15">--}}
                                                        {{--<a href="blog_single_standard.html">Restaurant Employer Read Clients Orders On His iPad</a>--}}
                                                    {{--</h3>--}}
                                                    {{--<div class="entry-meta mb-10">--}}
                                                        {{--<ul class="tag-info list-inline">--}}
                                                            {{--<li> <i class="icon fa fa-user"></i> By : John Doe</li>--}}
                                                            {{--<li><i class="icon fa fa-comments"></i> 14 Comments </li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                {{--</header>--}}

                                                {{--<div class="entry-content">--}}
                                                    {{--<p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet imperdiet volutpat. Sed vitae quam congue, tincidunt nisi et, volutpat lacus. Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semp...</p>--}}
                                                {{--</div>--}}
                                                {{--<!-- .entry-wrapper -->--}}

                                                {{--<footer class="entry-footer text-right">--}}
                                                    {{--<a href="blog_single_standard.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>--}}
                                                {{--</footer>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            <!-- End Blog Post -->

                            <!-- Blog Post -->
                            {{--<div class="blog-post col-xs-12">--}}
                                {{--<article class="entry panel">--}}
                                    {{--<div class="row row-rl-0 row-tb-0 row-md-cell">--}}
                                        {{--<div class="col-xs-12 col-md-5 col-lg-4">--}}
                                            {{--<figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="assets/images/blog/post_10.jpg">--}}
                                                {{--<div class="entry-date">--}}
                                                    {{--<h4>13</h4>--}}
                                                    {{--<h6>JUN</h6>--}}
                                                {{--</div>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-xs-12 col-md-7 col-lg-8 prl-15 prl-md-20 pt-20 pt-md-30 pb-15">--}}
                                            {{--<div class="entry-wrapper">--}}
                                                {{--<header class="entry-header">--}}
                                                    {{--<h3 class="entry-title mb-10 mb-md-15">--}}
                                                        {{--<a href="blog_single_standard.html">Restaurant Employer Read Clients Orders On His iPad</a>--}}
                                                    {{--</h3>--}}
                                                    {{--<div class="entry-meta mb-10">--}}
                                                        {{--<ul class="tag-info list-inline">--}}
                                                            {{--<li> <i class="icon fa fa-user"></i> By : John Doe</li>--}}
                                                            {{--<li><i class="icon fa fa-comments"></i> 14 Comments </li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                {{--</header>--}}

                                                {{--<div class="entry-content">--}}
                                                    {{--<p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet imperdiet volutpat. Sed vitae quam congue, tincidunt nisi et, volutpat lacus. Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semp...</p>--}}
                                                {{--</div>--}}
                                                {{--<!-- .entry-wrapper -->--}}

                                                {{--<footer class="entry-footer text-right">--}}
                                                    {{--<a href="blog_single_standard.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>--}}
                                                {{--</footer>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            <!-- End Blog Post -->

                            <!-- Blog Post -->
                            {{--<div class="blog-post col-xs-12">--}}
                                {{--<article class="entry panel">--}}
                                    {{--<div class="row row-rl-0 row-tb-0 row-md-cell">--}}
                                        {{--<div class="col-xs-12 col-md-5 col-lg-4">--}}
                                            {{--<figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="assets/images/blog/post_11.jpg">--}}
                                                {{--<div class="entry-date">--}}
                                                    {{--<h4>13</h4>--}}
                                                    {{--<h6>JUN</h6>--}}
                                                {{--</div>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-xs-12 col-md-7 col-lg-8 prl-15 prl-md-20 pt-20 pt-md-30 pb-15">--}}
                                            {{--<div class="entry-wrapper">--}}
                                                {{--<header class="entry-header">--}}
                                                    {{--<h3 class="entry-title mb-10 mb-md-15">--}}
                                                        {{--<a href="blog_single_standard.html">Restaurant Employer Read Clients Orders On His iPad</a>--}}
                                                    {{--</h3>--}}
                                                    {{--<div class="entry-meta mb-10">--}}
                                                        {{--<ul class="tag-info list-inline">--}}
                                                            {{--<li> <i class="icon fa fa-user"></i> By : John Doe</li>--}}
                                                            {{--<li><i class="icon fa fa-comments"></i> 14 Comments </li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                {{--</header>--}}

                                                {{--<div class="entry-content">--}}
                                                    {{--<p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet imperdiet volutpat. Sed vitae quam congue, tincidunt nisi et, volutpat lacus. Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semp...</p>--}}
                                                {{--</div>--}}
                                                {{--<!-- .entry-wrapper -->--}}

                                                {{--<footer class="entry-footer text-right">--}}
                                                    {{--<a href="blog_single_standard.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>--}}
                                                {{--</footer>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            <!-- End Blog Post -->

                            <!-- Blog Post -->
                            {{--<div class="blog-post col-xs-12">--}}
                                {{--<article class="entry panel">--}}
                                    {{--<div class="row row-rl-0 row-tb-0 row-md-cell">--}}
                                        {{--<div class="col-xs-12 col-md-5 col-lg-4">--}}
                                            {{--<figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="assets/images/blog/post_12.jpg">--}}
                                                {{--<div class="entry-date">--}}
                                                    {{--<h4>13</h4>--}}
                                                    {{--<h6>JUN</h6>--}}
                                                {{--</div>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-xs-12 col-md-7 col-lg-8 prl-15 prl-md-20 pt-20 pt-md-30 pb-15">--}}
                                            {{--<div class="entry-wrapper">--}}
                                                {{--<header class="entry-header">--}}
                                                    {{--<h3 class="entry-title mb-10 mb-md-15">--}}
                                                        {{--<a href="blog_single_standard.html">Restaurant Employer Read Clients Orders On His iPad</a>--}}
                                                    {{--</h3>--}}
                                                    {{--<div class="entry-meta mb-10">--}}
                                                        {{--<ul class="tag-info list-inline">--}}
                                                            {{--<li> <i class="icon fa fa-user"></i> By : John Doe</li>--}}
                                                            {{--<li><i class="icon fa fa-comments"></i> 14 Comments </li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                {{--</header>--}}

                                                {{--<div class="entry-content">--}}
                                                    {{--<p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet imperdiet volutpat. Sed vitae quam congue, tincidunt nisi et, volutpat lacus. Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semp...</p>--}}
                                                {{--</div>--}}
                                                {{--<!-- .entry-wrapper -->--}}

                                                {{--<footer class="entry-footer text-right">--}}
                                                    {{--<a href="blog_single_standard.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>--}}
                                                {{--</footer>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            <!-- End Blog Post -->

                        </div>

                        <!-- Blog Pagination -->
                        <div class="page-pagination text-center mt-30 p-10 panel">
                            <nav>
                                <!-- Page Pagination -->
                                <ul class="page-pagination">
                                    <li><a class="page-numbers previous" href="blog_list_fullwidth.html#">Previous</a>
                                    </li>
                                    <li><a href="blog_list_fullwidth.html#" class="page-numbers">1</a>
                                    </li>
                                    <li><span class="page-numbers current">2</span>
                                    </li>
                                    <li><a href="blog_list_fullwidth.html#" class="page-numbers">3</a>
                                    </li>
                                    <li><a href="blog_list_fullwidth.html#" class="page-numbers">4</a>
                                    </li>
                                    <li><span class="page-numbers dots">...</span>
                                    </li>
                                    <li><a href="blog_list_fullwidth.html#" class="page-numbers">20</a>
                                    </li>
                                    <li><a href="blog_list_fullwidth.html#" class="page-numbers next">Next</a>
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