@extends('layouts.master')

@section('content')
    <!-- Page Container -->
            <div class="page-container ptb-60">
                <div class="container">
                    <div class="row row-rl-10 row-tb-20">
                        <div class="page-content col-xs-12 col-sm-7 col-md-8">

                            <!-- Blog Area -->
                            <div class="blog-area blog-single-post">
                                <div class="row row-tb-20">

                                    <!-- Blog Post -->
                                    <div class="blog-post col-xs-12">
                                        <article class="entry panel">
                                            <figure class="entry-media">
                                                <blockquote class="blog-quote-section">
                                                    <p>{{$quote->content}}</p>
                                                </blockquote>
                                            </figure>
                                            <div class="entry-wrapper prl-20 prl-md-30 pt-20 pt-md-30 pb-15">
                                                <header class="entry-header">
                                                    <h4 class="entry-title mb-10 mb-md-15">{{$quote->author}}</h4>
                                                    <div class="entry-meta mb-10">
                                                        <ul class="tag-info list-inline">
                                                            <li><a href="{{url('/profile/' . $quote->user_id)}}"><i class="icon fa fa-user"></i> By : {{$quote->user}}</a></li>
                                                            {{--<li><i class="icon fa fa-comments"></i> 14 Comments </li>--}}
                                                        </ul>
                                                    </div>
                                                </header>
                                                {{--<div class="entry-content">--}}
                                                    {{--<p class="mb-20">Aliquam convallis sollicitudin purus. Praesent aliquam, enim at fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean suscipit nulla in justo. Suspendisse cursus rutrum augue. Nulla tincidunt tincidunt mi.</p>--}}
                                                    {{--<blockquote class="block-quote mb-20">--}}
                                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur esse, aliquam dolore nulla debitis excepturi ea ex earum quos molestias porro aut, corporis, ratione assumenda sint pariatur veritatis possimus nobis!</p>--}}
                                                    {{--</blockquote>--}}
                                                    {{--<p class="mb-20">Praesent aliquam, enim at fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean suscipit nulla in justo.</p>--}}
                                                    {{--<h4 class="mb-20">Lorem ipsum dolor sit amet, consectetur.</h4>--}}
                                                    {{--<div class="gallery mb-20">--}}
                                                        {{--<div class="row row-rl-10">--}}
                                                            {{--<div class="col-sm-4">--}}
                                                                {{--<img src="assets/images/blog/post_01.jpg" alt="">--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-sm-4">--}}
                                                                {{--<img src="assets/images/blog/post_02.jpg" alt="">--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-sm-4">--}}
                                                                {{--<img src="assets/images/blog/post_03.jpg" alt="">--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<p class="mb-20">Praesent aliquam, enim at fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean suscipit nulla in justo.</p>--}}
                                                    {{--<h5 class="mb-10">Qui cumque numquam ?</h5>--}}
                                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus a nobis, vero in corrupti nostrum. Magni reprehenderit tempora tempore maiores, repellat in laboriosam aliquid ex error, iusto quae, et similique.</p>--}}
                                                    {{--<ul class="mb-20 list-styled">--}}
                                                        {{--<li>laborum veniam odio fuga deleniti provident.</li>--}}
                                                        {{--<li>Voluptates quos accusamus repudiandae? Officia!</li>--}}
                                                        {{--<li>Rerum ea omnis quos. Facere!</li>--}}
                                                    {{--</ul>--}}
                                                    {{--<p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis sunt a quam, exercitationem, provident numquam quia eius optio quos vitae odio impedit ipsum voluptatem earum neque architecto enim quisquam, ea.</p>--}}
                                                    {{--<p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, ipsum facilis, eaque aliquid porro deleniti architecto eum perferendis quidem modi quo reiciendis dolor deserunt beatae repellat, nostrum aut fuga. Rem?</p>--}}
                                                    {{--<div class="gallery mb-20">--}}
                                                        {{--<div class="row row-rl-10 row-tb-10">--}}
                                                            {{--<div class="col-sm-6">--}}
                                                                {{--<img src="assets/images/blog/post_04.jpg" alt="">--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-sm-6">--}}
                                                                {{--<img src="assets/images/blog/post_05.jpg" alt="">--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, ipsum facilis, eaque aliquid porro deleniti architecto eum perferendis quidem modi quo reiciendis dolor deserunt beatae repellat, nostrum aut fuga. Rem?</p>--}}
                                                    {{--<p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis sunt a quam, exercitationem, provident numquam quia eius optio quos vitae odio impedit ipsum voluptatem earum neque architecto enim quisquam, ea.</p>--}}
                                                {{--</div>--}}
                                                <!-- .entry-wrapper -->
                                                <footer class="entry-footer">
                                                    {{--<div class="blog-post-tags ptb-20">--}}
                                                        {{--<ul>--}}
                                                            {{--<li>Tags :</li>--}}
                                                            {{--<li>--}}
                                                                {{--<a href="blog_single_quote.html#">Deals</a>--}}
                                                            {{--</li>--}}
                                                            {{--<li>--}}
                                                                {{--<a href="blog_single_quote.html#">Shopping</a>--}}
                                                            {{--</li>--}}
                                                            {{--<li>--}}
                                                                {{--<a href="blog_single_quote.html#">Coupons</a>--}}
                                                            {{--</li>--}}
                                                            {{--<li>--}}
                                                                {{--<a href="blog_single_quote.html#">Commercial</a>--}}
                                                            {{--</li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                    <ul class="share-buttons ptb-20">
                                                        <li><a class="fb-share" href="blog_single_quote.html#"><i class="fa fa-facebook"></i> Share</a>
                                                        </li>
                                                        <li><a class="twitter-share" href="blog_single_quote.html#"><i class="fa fa-twitter"></i> Tweet</a>
                                                        </li>
                                                        <li><a class="gplus-share" href="blog_single_quote.html#"><i class="fa fa-google-plus"></i> Share</a>
                                                        </li>
                                                        <li><a class="pinterest-share" href="blog_single_quote.html#"><i class="fa fa-pinterest-p"></i> Pin</a>
                                                        </li>
                                                    </ul>
                                                </footer>
                                            </div>
                                        </article>
                                        {{--<ul class="posts-nav ptb-40 mb-20">--}}
                                            {{--<li class="next-post">--}}
                                                {{--<a href="blog_single_quote.html#"><i class="fa fa-angle-right"></i>--}}
									{{--<span>Next Post</span>--}}
{{--Perspiciatis architecto magnam.</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="prev-post">--}}
                                                {{--<a href="blog_single_quote.html#"><i class="fa fa-angle-left"></i>--}}
									{{--<span>Previous Post</span>--}}
{{--Tempore velit atque porro ?</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    </div>
                                    <!-- End Blog Post -->

                                    <!-- Post Author -->
                                    {{--<div class="col-xs-12">--}}
                                        {{--<div class="post-author-area panel media p-20">--}}
                                            {{--<figure class="media-left">--}}
                                                {{--<img class="media-object" src="assets/images/avatars/blog_author.jpg" alt="">--}}
                                            {{--</figure>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<h3>John Doe</h3>--}}
                                                {{--<h5>Developper And Designer</h5>--}}
                                                {{--<p class="color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil doloribus, dignissimos, sunt doloremque possimus quasi, aliquam impedit facere tempora ullam nemo minus dicta dolor! Dicta quisquam.</p>--}}
                                                {{--<ul class="social-icons list-inline">--}}
                                                    {{--<li class="social-icons__item">--}}
                                                        {{--<a href="blog_single_quote.html#"><i class="fa fa-facebook"></i></a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="social-icons__item">--}}
                                                        {{--<a href="blog_single_quote.html#"><i class="fa fa-twitter"></i></a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="social-icons__item">--}}
                                                        {{--<a href="blog_single_quote.html#"><i class="fa fa-linkedin"></i></a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="social-icons__item">--}}
                                                        {{--<a href="blog_single_quote.html#"><i class="fa fa-google-plus"></i></a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="social-icons__item">--}}
                                                        {{--<a href="blog_single_quote.html#"><i class="fa fa-linkedin-square"></i></a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <!-- End Post Author -->

                                    <!-- Related Posts -->
                                    {{--<div class="col-xs-12">--}}

                                        {{--<div class="related-posts panel pt-20 pb-30 prl-20">--}}

                                            {{--<h3 class="related-posts-title h-title mb-30">Related Posts</h3>--}}

                                            {{--<div class="row">--}}
                                                {{--<div class="col-sm-4">--}}
                                                    {{--<a href="blog_single_quote.html#">--}}
                                                        {{--<figure class="mb-10">--}}
                                                            {{--<img src="assets/images/blog/post_10.jpg" alt="">--}}
                                                        {{--</figure>--}}
                                                        {{--<p class="font-14">Proin tempus ipsum vitae velit convallis venenatis.</p>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm-4">--}}
                                                    {{--<a href="blog_single_quote.html#">--}}
                                                        {{--<figure class="mb-10">--}}
                                                            {{--<img src="assets/images/blog/post_11.jpg" alt="">--}}
                                                        {{--</figure>--}}
                                                        {{--<p class="font-14">Maecenas tempus metus vel felis volutpat sollicitudin.</p>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm-4">--}}
                                                    {{--<a href="blog_single_quote.html#">--}}
                                                        {{--<figure class="mb-10">--}}
                                                            {{--<img src="assets/images/blog/post_01.jpg" alt="">--}}
                                                        {{--</figure>--}}
                                                        {{--<p class="font-14">Curabitur vel felis pretium, blandit arcu.</p>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <!-- End Related Posts -->

                                    <!-- Comments Area -->
                                    {{--<div id="commentsArea" class="comments-area col-xs-12">--}}
                                        {{--<div class="row row-v-20">--}}
                                            {{--<div class="col-xs-12">--}}
                                                {{--<div class="posted-comments panel pt-20 pb-30 prl-20">--}}

                                                    {{--<h3 class="posted-comments-title h-title mb-30">7 Comments</h3>--}}
                                                    {{--<ol class="comment-list">--}}


                                                        {{--<li class="comment comment-bypostauthor media">--}}



                                                            {{--<figure class="comment-author-thumb media-left">--}}
                                                                {{--<a href="blog_single_quote.html#">--}}
                                                                    {{--<img class="media-object" src="assets/images/avatars/avatar_07.jpg" alt="" />--}}
                                                                {{--</a>--}}
                                                            {{--</figure>--}}
                                                            {{--<article class="comment-wrapper media-body">--}}
                                                                {{--<!-- Comment Metadata -->--}}
                                                                {{--<div class="comment-meta mb-5">--}}
                                                                    {{--<a href="blog_single_quote.html#" class="comment-reply-link btn btn-xs btn-gray btn-rounded">Reply <i class="fa fa-reply"></i></a>--}}
                                                                    {{--<h5 class="comment-author-name mb-5 ">John Doe</h5>--}}
                                                                    {{--<span class="color-muted">December 31, 2001 at 11:10 pm</span>--}}
                                                                {{--</div>--}}
                                                                {{--<!-- End Comment Metadata -->--}}

                                                                {{--<!-- Comment Content -->--}}
                                                                {{--<div class="comment-content color-mid">--}}
                                                                    {{--<p>Rrhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque.</p>--}}
                                                                {{--</div>--}}
                                                                {{--<!-- End Comment Content -->--}}
                                                            {{--</article>--}}

                                                            {{--<ol class="comment-replays">--}}

                                                                {{--<li class="comment media">--}}



                                                                    {{--<figure class="comment-author-thumb media-left">--}}
                                                                        {{--<a href="blog_single_quote.html#">--}}
                                                                            {{--<img class="media-object" src="assets/images/avatars/avatar_08.jpg" alt="" />--}}
                                                                        {{--</a>--}}
                                                                    {{--</figure>--}}

                                                                    {{--<article class="comment-wrapper media-body">--}}

                                                                        {{--<!-- End Comment Metadata -->--}}
                                                                        {{--<div class="comment-meta mb-5">--}}
                                                                            {{--<a href="blog_single_quote.html#" class="comment-reply-link btn btn-xs btn-gray btn-rounded">Reply <i class="fa fa-reply"></i></a>--}}
                                                                            {{--<h5 class="comment-author-name mb-5">John Doe</h5>--}}
                                                                            {{--<span class="color-muted">December 31, 2001 at 11:10 pm</span>--}}
                                                                        {{--</div>--}}

                                                                        {{--<!-- Comment Content -->--}}
                                                                        {{--<div class="comment-content color-mid">--}}
                                                                            {{--<p>First replay for First comment .</p>--}}
                                                                        {{--</div>--}}
                                                                        {{--<!-- End Comment Content -->--}}
                                                                    {{--</article>--}}
                                                                {{--</li>--}}


                                                                {{--<li class="comment media comment-bypostauthor">--}}



                                                                    {{--<figure class="comment-author-thumb media-left">--}}
                                                                        {{--<a href="blog_single_quote.html#">--}}
                                                                            {{--<img class="media-object" src="assets/images/avatars/avatar_07.jpg" alt="" />--}}
                                                                        {{--</a>--}}
                                                                    {{--</figure>--}}

                                                                    {{--<article class="comment-wrapper media-body">--}}

                                                                        {{--<!-- End Comment Metadata -->--}}
                                                                        {{--<div class="comment-meta mb-5">--}}
                                                                            {{--<a href="blog_single_quote.html#" class="comment-reply-link btn btn-xs btn-gray btn-rounded">Reply <i class="fa fa-reply"></i></a>--}}
                                                                            {{--<h5 class="comment-author-name mb-5">John Doe</h5>--}}
                                                                            {{--<span class="color-muted">December 31, 2001 at 11:10 pm</span>--}}
                                                                        {{--</div>--}}

                                                                        {{--<!-- Comment Content -->--}}
                                                                        {{--<div class="comment-content color-mid">--}}
                                                                            {{--<p>Second Reply for First comment by author.</p>--}}
                                                                        {{--</div>--}}
                                                                        {{--<!-- End Comment Content -->--}}
                                                                    {{--</article>--}}
                                                                {{--</li>--}}

                                                            {{--</ol>--}}
                                                        {{--</li>--}}

                                                        {{--<li class="comment media">--}}



                                                            {{--<figure class="comment-author-thumb media-left">--}}
                                                                {{--<a href="blog_single_quote.html#">--}}
                                                                    {{--<img class="media-object" src="assets/images/avatars/avatar_03.jpg" alt="" />--}}
                                                                {{--</a>--}}
                                                            {{--</figure>--}}
                                                            {{--<article class="comment-wrapper media-body">--}}
                                                                {{--<!-- Comment Metadata -->--}}
                                                                {{--<div class="comment-meta mb-5">--}}
                                                                    {{--<a href="blog_single_quote.html#" class="comment-reply-link btn btn-xs btn-gray btn-rounded">Reply <i class="fa fa-reply"></i></a>--}}
                                                                    {{--<h5 class="comment-author-name mb-5 ">Jhon Kennadi</h5>--}}
                                                                    {{--<span class="color-muted">December 31, 2001 at 11:10 pm</span>--}}
                                                                {{--</div>--}}
                                                                {{--<!-- End Comment Metadata -->--}}

                                                                {{--<!-- Comment Content -->--}}
                                                                {{--<div class="comment-content color-mid">--}}
                                                                    {{--<p>Eum in dicta veniam interesset, harum fuisset te nam.</p>--}}
                                                                {{--</div>--}}
                                                                {{--<!-- End Comment Content -->--}}
                                                            {{--</article>--}}

                                                        {{--</li>--}}

                                                        {{--<li class="comment media">--}}



                                                            {{--<figure class="comment-author-thumb media-left">--}}
                                                                {{--<a href="blog_single_quote.html#">--}}
                                                                    {{--<img class="media-object" src="assets/images/avatars/avatar_04.jpg" alt="" />--}}
                                                                {{--</a>--}}
                                                            {{--</figure>--}}
                                                            {{--<article class="comment-wrapper media-body">--}}
                                                                {{--<!-- Comment Metadata -->--}}
                                                                {{--<div class="comment-meta mb-5">--}}
                                                                    {{--<a href="blog_single_quote.html#" class="comment-reply-link btn btn-xs btn-gray btn-rounded">Reply <i class="fa fa-reply"></i></a>--}}
                                                                    {{--<h5 class="comment-author-name mb-5 ">John Doe</h5>--}}
                                                                    {{--<span class="color-muted">December 31, 2001 at 11:10 pm</span>--}}
                                                                {{--</div>--}}
                                                                {{--<!-- End Comment Metadata -->--}}

                                                                {{--<!-- Comment Content -->--}}
                                                                {{--<div class="comment-content color-mid">--}}
                                                                    {{--<p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>--}}
                                                                {{--</div>--}}
                                                                {{--<!-- End Comment Content -->--}}
                                                            {{--</article>--}}

                                                            {{--<ol class="comment-replays">--}}

                                                                {{--<li class="comment media">--}}



                                                                    {{--<figure class="comment-author-thumb media-left">--}}
                                                                        {{--<a href="blog_single_quote.html#">--}}
                                                                            {{--<img class="media-object" src="assets/images/avatars/avatar_05.jpg" alt="" />--}}
                                                                        {{--</a>--}}
                                                                    {{--</figure>--}}

                                                                    {{--<article class="comment-wrapper media-body">--}}

                                                                        {{--<!-- End Comment Metadata -->--}}
                                                                        {{--<div class="comment-meta mb-5">--}}
                                                                            {{--<a href="blog_single_quote.html#" class="comment-reply-link btn btn-xs btn-gray btn-rounded">Reply <i class="fa fa-reply"></i></a>--}}
                                                                            {{--<h5 class="comment-author-name mb-5">John Doe</h5>--}}
                                                                            {{--<span class="color-muted">December 31, 2001 at 11:10 pm</span>--}}
                                                                        {{--</div>--}}

                                                                        {{--<!-- Comment Content -->--}}
                                                                        {{--<div class="comment-content color-mid">--}}
                                                                            {{--<p>Eum in dicta veniam interesset, harum fuisset te nam.</p>--}}
                                                                        {{--</div>--}}
                                                                        {{--<!-- End Comment Content -->--}}
                                                                    {{--</article>--}}
                                                                {{--</li>--}}

                                                            {{--</ol>--}}
                                                        {{--</li>--}}

                                                        {{--<li class="comment media">--}}



                                                            {{--<figure class="comment-author-thumb media-left">--}}
                                                                {{--<a href="blog_single_quote.html#">--}}
                                                                    {{--<img class="media-object" src="assets/images/avatars/avatar_04.jpg" alt="" />--}}
                                                                {{--</a>--}}
                                                            {{--</figure>--}}
                                                            {{--<article class="comment-wrapper media-body">--}}
                                                                {{--<!-- Comment Metadata -->--}}
                                                                {{--<div class="comment-meta mb-5">--}}
                                                                    {{--<a href="blog_single_quote.html#" class="comment-reply-link btn btn-xs btn-gray btn-rounded">Reply <i class="fa fa-reply"></i></a>--}}
                                                                    {{--<h5 class="comment-author-name mb-5 ">John Doe</h5>--}}
                                                                    {{--<span class="color-muted">December 31, 2001 at 11:10 pm</span>--}}
                                                                {{--</div>--}}
                                                                {{--<!-- End Comment Metadata -->--}}

                                                                {{--<!-- Comment Content -->--}}
                                                                {{--<div class="comment-content color-mid">--}}
                                                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium perspiciatis, unde rerum libero ea voluptatibus eveniet.</p>--}}
                                                                {{--</div>--}}
                                                                {{--<!-- End Comment Content -->--}}
                                                            {{--</article>--}}

                                                        {{--</li>--}}

                                                    {{--</ol>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-xs-12">--}}
                                                {{--<div id="commentRespond" class="comment-respond panel pt-20 pb-30 prl-20">--}}
                                                    {{--<h3 class="comment-respond-title h-title mb-30">Leave A Comment</h3>--}}
                                                    {{--<form action="blog_single_quote.html#" method="post" id="commentForm" class="comment-form">--}}
                                                        {{--<div class="row row-10">--}}
                                                            {{--<div class="col-xs-12">--}}
                                                                {{--<div class="comment-notes alert alert-info">--}}
                                                                    {{--<span>Your email address will not be published.</span> Required fields are marked <span class="required">*</span>--}}
                                                                    {{--<button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
                                                                        {{--<span aria-hidden="true">&times;</span>--}}
                                                                    {{--</button>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-sm-6">--}}
                                                                {{--<div class="comment-form-author form-group">--}}
                                                                    {{--<label for="author">Name <span class="required">*</span>--}}
                                                                    {{--</label>--}}
                                                                    {{--<input id="author" class="form-control" name="author" type="text" value="" required='required' />--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-sm-6">--}}
                                                                {{--<div class="comment-form-email form-group">--}}
                                                                    {{--<label for="email">Email <span class="required">*</span>--}}
                                                                    {{--</label>--}}
                                                                    {{--<input id="email" class="form-control" name="email" type="email" value="" required='required' />--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-xs-12">--}}
                                                                {{--<div class="comment-form-url form-group">--}}
                                                                    {{--<label for="url">Website</label>--}}
                                                                    {{--<input id="url" class="form-control" name="url" type="url" value="" />--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-xs-12">--}}
                                                                {{--<div class="comment-form-comment form-group">--}}
                                                                    {{--<label for="comment">Comment</label>--}}
                                                                    {{--<textarea id="comment" class="form-control" name="comment" cols="45" rows="4" required="required"></textarea>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-xs-12">--}}
                                                                {{--<div class="form-submit">--}}
                                                                    {{--<input name="submit" type="submit" id="submit" class="btn submit" value="Post Comment" />--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</form>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <!-- End Comments Area -->

                                </div>
                            </div>
                            <!-- End Blog Area -->

                        </div>
                        <div class="page-sidebar col-md-4 col-sm-5 col-xs-12">

                            <!-- Blog Sidebar -->
                            <aside class="sidebar blog-sidebar">
                                <div class="row row-tb-10">
                                    {{--<div class="col-xs-12">--}}
                                        {{--<!-- Search Form -->--}}
                                        {{--<div class="widget search-form panel ptb-30 prl-20">--}}
                                            {{--<div class="widget-body">--}}
                                                {{--<form method="post" action="blog_single_quote.html#">--}}
                                                    {{--<div class="input-group">--}}
                                                        {{--<input type="text" class="form-control" placeholder="Search for..." required="required">--}}
                                                        {{--<span class="input-group-btn">--}}
		        	{{--<button class="btn" type="submit"><i class="fa fa-search font-16"></i></button>--}}
		    	{{--</span>--}}
                                                    {{--</div>--}}
                                                {{--</form>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<!-- End Search Form -->--}}
                                    {{--</div>--}}
                                    {{--<div class="col-xs-12">--}}
                                        {{--<!-- Recent Posts -->--}}
                                        {{--<div class="widget recent-posts panel pt-20 prl-20">--}}
                                            {{--<h3 class="widget-title h-title">Popular Quotes</h3>--}}
                                            {{--<div class="widget-body ptb-30">--}}

                                                {{--<div class="recent-post media">--}}
                                                    {{--<div class="post-thumb media-left">--}}
                                                        {{--<a href="blog_single_quote.html#">--}}
                                                            {{--<img class="media-object" src="assets/images/blog/thumb_1.jpg" alt="">--}}
                                                        {{--</a>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="media-body">--}}
                                                        {{--<h5 class="font-15 mb-10">--}}
                    {{--<a href="blog_single_quote.html#">Lorem ipsum dolor sit amet consetetur</a>--}}
                {{--</h5>--}}
                                                        {{--<ul class="post-meta list-inline">--}}
                                                            {{--<li> <i class="ico fa fa-user mr-5"></i>John Doe</li>--}}
                                                            {{--<li><i class="ico fa fa-calendar mr-5"></i>18 Mar 2017</li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="recent-post media">--}}
                                                    {{--<div class="post-thumb media-left">--}}
                                                        {{--<a href="blog_single_quote.html#">--}}
                                                            {{--<img class="media-object" src="assets/images/blog/thumb_2.jpg" alt="">--}}
                                                        {{--</a>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="media-body">--}}
                                                        {{--<h5 class="font-15 mb-10">--}}
                    {{--<a href="blog_single_quote.html#">Lorem ipsum dolor sit amet consetetur</a>--}}
                {{--</h5>--}}
                                                        {{--<ul class="post-meta list-inline">--}}
                                                            {{--<li> <i class="ico fa fa-user mr-5"></i>John Doe</li>--}}
                                                            {{--<li><i class="ico fa fa-calendar mr-5"></i>22 Mar 2017</li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="recent-post media">--}}
                                                    {{--<div class="post-thumb media-left">--}}
                                                        {{--<a href="blog_single_quote.html#">--}}
                                                            {{--<img class="media-object" src="assets/images/blog/thumb_3.jpg" alt="">--}}
                                                        {{--</a>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="media-body">--}}
                                                        {{--<h5 class="font-15 mb-10">--}}
                    {{--<a href="blog_single_quote.html#">Lorem ipsum dolor sit amet consetetur</a>--}}
                {{--</h5>--}}
                                                        {{--<ul class="post-meta list-inline">--}}
                                                            {{--<li> <i class="ico fa fa-user mr-5"></i>John Doe</li>--}}
                                                            {{--<li><i class="ico fa fa-calendar mr-5"></i>12 Mar 2017</li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="recent-post media">--}}
                                                    {{--<div class="post-thumb media-left">--}}
                                                        {{--<a href="blog_single_quote.html#">--}}
                                                            {{--<img class="media-object" src="assets/images/blog/thumb_4.jpg" alt="">--}}
                                                        {{--</a>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="media-body">--}}
                                                        {{--<h5 class="font-15 mb-10">--}}
                    {{--<a href="blog_single_quote.html#">Lorem ipsum dolor sit amet consetetur</a>--}}
                {{--</h5>--}}
                                                        {{--<ul class="post-meta list-inline">--}}
                                                            {{--<li> <i class="ico fa fa-user mr-5"></i>John Doe</li>--}}
                                                            {{--<li><i class="ico fa fa-calendar mr-5"></i>23 Mar 2017</li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="recent-post media">--}}
                                                    {{--<div class="post-thumb media-left">--}}
                                                        {{--<a href="blog_single_quote.html#">--}}
                                                            {{--<img class="media-object" src="assets/images/blog/thumb_5.jpg" alt="">--}}
                                                        {{--</a>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="media-body">--}}
                                                        {{--<h5 class="font-15 mb-10">--}}
                    {{--<a href="blog_single_quote.html#">Lorem ipsum dolor sit amet consetetur</a>--}}
                {{--</h5>--}}
                                                        {{--<ul class="post-meta list-inline">--}}
                                                            {{--<li> <i class="ico fa fa-user mr-5"></i>John Doe</li>--}}
                                                            {{--<li><i class="ico fa fa-calendar mr-5"></i>10 Mar 2017</li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<!-- End Recent Posts -->--}}
                                    {{--</div>--}}
                                    {{--<div class="col-xs-12">--}}
                                        {{--<!-- Categories Widget -->--}}
                                        {{--<div class="widget categories-widget panel pt-20 prl-20">--}}
                                            {{--<div class="widget-header">--}}
                                                {{--<h3 class="widget-title h-title">Blog Categories</h3>--}}
                                            {{--</div>--}}
                                            {{--<div class="widget-body ptb-20">--}}
                                                {{--<ul>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="blog_single_quote.html#">Best Deals <span>1420</span></a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="blog_single_quote.html#">Shopping <span>780</span></a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="blog_single_quote.html#">Sport <span>670</span></a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="blog_single_quote.html#">Travel <span>520</span></a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="blog_single_quote.html#">Coupon Code <span>350</span></a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<!-- End Categories Widget -->--}}
                                    {{--</div>--}}
                                    {{--<div class="col-xs-12">--}}
                                        {{--<div class="widget archive-widget panel pt-20 prl-20">--}}
                                            {{--<h3 class="widget-title h-title">Blog Archive</h3>--}}
                                            {{--<div class="widget-content ptb-20">--}}
                                                {{--<ul>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="blog_single_quote.html#">August 2017</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="blog_single_quote.html#">June 2017</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="blog_single_quote.html#">May 2017</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="blog_single_quote.html#">April 2017</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="blog_single_quote.html#">March 2017</a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-xs-12">--}}
                                        {{--<!-- Popular Tags -->--}}
                                        {{--<div class="widget popular-tags panel pt-20 prl-20">--}}
                                            {{--<h3 class="widget-title h-title">Popular Tags</h3>--}}
                                            {{--<div class="widget-body pt-30 pb-20">--}}

                                                {{--<div class="tags">--}}
                                                    {{--<a href="blog_single_quote.html#" class="badge">Offers</a>--}}
                                                    {{--<a href="blog_single_quote.html#" class="badge">Stores</a>--}}
                                                    {{--<a href="blog_single_quote.html#" class="badge">Shop</a>--}}
                                                    {{--<a href="blog_single_quote.html#" class="badge">Sale</a>--}}
                                                    {{--<a href="blog_single_quote.html#" class="badge">Discount</a>--}}
                                                    {{--<a href="blog_single_quote.html#" class="badge">Health</a>--}}
                                                    {{--<a href="blog_single_quote.html#" class="badge">Cloths</a>--}}
                                                    {{--<a href="blog_single_quote.html#" class="badge">Travel</a>--}}
                                                    {{--<a href="blog_single_quote.html#" class="badge">Hotels</a>--}}
                                                    {{--<a href="blog_single_quote.html#" class="badge">Deals</a>--}}
                                                    {{--<a href="blog_single_quote.html#" class="badge">Coupons</a>--}}
                                                {{--</div>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<!-- End Popular Tags -->--}}
                                    {{--</div>--}}
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
                                                    <div class="input-group">
                                                        <input type="email" name="email" class="form-control" placeholder="Your Email Address" required="required">
                                                        <span class="input-group-btn">
		        	<button class="btn" type="submit">Subscribe</button>
		    	</span>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <!-- End Subscribe Widget -->
                                    </div>
                                    {{--<div class="col-xs-12">--}}

                                        {{--<!-- Instagram Widget -->--}}
                                        {{--<div class="widget subscribe-widget panel pt-20 prl-20">--}}
                                            {{--<h3 class="widget-title h-title">Latest tweets</h3>--}}
                                            {{--<div class="widget-body ptb-20">--}}

                                                {{--<ul class="twitter-list">--}}
                                                    {{--<li class="twitter-list__item">--}}
                                                        {{--<p>--}}
                                                            {{--<i class="twitter-icon fa fa-twitter"></i>--}}
                                                            {{--<a href="blog_single_quote.html#">@masum_rana :</a>--}}
{{--<span class="tweet-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</span>--}}
{{--</p>--}}
{{--</li>--}}
{{--<li class="twitter-list__item">--}}
    {{--<p>--}}
        {{--<i class="twitter-icon fa fa-twitter"></i>--}}
        {{--<a href="blog_single_quote.html#">@masum_rana :</a>--}}
        {{--<span class="tweet-text">Recusandae sed, aperiam earum sapiente rem neque officiis quaerat.</span>--}}
    {{--</p>--}}
{{--</li>--}}
{{--<li class="twitter-list__item">--}}
    {{--<p>--}}
        {{--<i class="twitter-icon fa fa-twitter"></i>--}}
        {{--<a href="blog_single_quote.html#">@masum_rana :</a>--}}
        {{--<span class="tweet-text">Sed quaerat, error harum sunt, sapiente voluptas temporibus porro quam, magnam dolores recusandae.</span>--}}
    {{--</p>--}}
{{--</li>--}}
{{--<li class="twitter-list__item">--}}
    {{--<p>--}}
        {{--<i class="twitter-icon fa fa-twitter"></i>--}}
        {{--<a href="blog_single_quote.html#">@masum_rana :</a>--}}
        {{--<span class="tweet-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</span>--}}
    {{--</p>--}}
{{--</li>--}}
{{--</ul>--}}

{{--</div>--}}
{{--</div>--}}
{{--<!-- End Instagram Widget -->--}}
{{--</div>--}}
{{--<div class="col-xs-12">--}}
    {{--<!-- Contact Us Widget -->--}}
    {{--<div class="widget contact-us-widget panel pt-20 prl-20">--}}
        {{--<h3 class="widget-title h-title">Got any questions?</h3>--}}
        {{--<div class="widget-body ptb-30">--}}
            {{--<p class="mb-20 color-mid">If you are having any questions, please feel free to ask.</p>--}}
            {{--<a href="{{url('/contacts')}}" class="btn btn-block"><i class="mr-10 font-15 fa fa-envelope-o"></i>Drop Us a Line</a>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- End Contact Us Widget -->--}}
{{--</div>--}}
{{--<div class="col-xs-12">--}}
    {{--<!-- Trending Stores -->--}}
    {{--<div class="widget trend-store-widget panel pt-20 prl-20">--}}
        {{--<h3 class="widget-title h-title">Trending Stores</h3>--}}
        {{--<div class="widget-body ptb-30">--}}


            {{--<div class="trend-store-item media">--}}
                {{--<div class="post-thumb media-left">--}}
                    {{--<a href="blog_single_quote.html#">--}}
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
                    {{--<a href="blog_single_quote.html#">--}}
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
                    {{--<a href="blog_single_quote.html#">--}}
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
    {{--<!-- End Trending Stores -->--}}
{{--</div>--}}
{{--<div class="col-xs-12">--}}
    {{--<!-- Latest Reviews -->--}}
    {{--<div class="widget posted-reviews-widget panel pt-20 prl-20">--}}
        {{--<h3 class="widget-title h-title">Recent Reviews</h3>--}}
        {{--<div class="widget-body ptb-30">--}}
            {{--<!-- Review -->--}}
            {{--<div class="review media">--}}
                {{--<div class="media-left pr-10">--}}
                    {{--<a href="blog_single_quote.html#">--}}
                        {{--<img class="media-object img-circle" src="assets/images/avatars/avatar_01.jpg" alt="Thumb" width="80">--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="media-body">--}}
                    {{--<h5 class="mb-5">--}}
                        {{--<a href="blog_single_quote.html#">John Doe</a>--}}
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
                    {{--<a href="blog_single_quote.html#">--}}
                        {{--<img class="media-object img-circle" src="assets/images/avatars/avatar_02.jpg" alt="Thumb" width="80">--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="media-body">--}}
                    {{--<h5 class="mb-5">--}}
                        {{--<a href="blog_single_quote.html#">John Doe</a>--}}
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
                    {{--<a href="blog_single_quote.html#">--}}
                        {{--<img class="media-object img-circle" src="assets/images/avatars/avatar_03.jpg" alt="Thumb" width="80">--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="media-body">--}}
                    {{--<h5 class="mb-5">--}}
                        {{--<a href="blog_single_quote.html#">John Doe</a>--}}
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
                    {{--<a href="blog_single_quote.html#">--}}
                        {{--<img class="media-object img-circle" src="assets/images/avatars/avatar_04.jpg" alt="Thumb" width="80">--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="media-body">--}}
                    {{--<h5 class="mb-5">--}}
                        {{--<a href="blog_single_quote.html#">John Doe</a>--}}
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
    {{--<!-- End Latest Reviews -->--}}
{{--</div>--}}
</div>
</aside>
<!-- End Blog Sidebar -->
</div>
</div>
</div>
</div>
<!-- End Page Container -->
@stop