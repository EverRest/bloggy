<!DOCTYPE html>
<!--[if lt IE 9 ]> <html lang="en" dir="ltr" class="no-js ie-old"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" dir="ltr" class="no-js ie9"> <![endif]-->
<!--[if IE 10 ]> <html lang="en" dir="ltr" class="no-js ie10"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!-->
<html lang="en" dir="ltr" class="no-js">
<!--<![endif]-->

<head>
    @include('partials.head')
</head>

<body id="body" class="wide-layout preloader-active">
    @include('partials.preloader')
<!-- WRAPPER                                   -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<div id="pageWrapper" class="page-wrapper">
<!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
    <header id="mainHeader" class="main-header">
        @include('partials.header')
    </header>
<!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
    <main id="mainContent" class="main-content">
        @yield('content')
    </main>
<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->
    @include('partials.footertoparea')
<!-- –––––––––––––––[ FOOTER ]––––––––––––––– -->
    <footer id="mainFooter" class="main-footer">
        @include('partials.footer')
    </footer>
<!-- –––––––––––––––[ END FOOTER ]––––––––––––––– -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
</div>
<!-- END WRAPPER                               -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->

@include('partials.back2top')

@include('partials.scripts')
</body>

</html>