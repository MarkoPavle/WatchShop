<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('menu/css/simple_menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/nivo-slider.css')}}" type="text/css" media="screen">
    <link rel="shortcut icon" href="{{asset('/img/favicon.ico')}}" type="image/x-icon" />
    <!-- JS Files -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.eislideshow.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script>
        jQuery.noConflict()(function ($) {
            $('#ei-slider').eislideshow({
                animation: 'center',
                autoplay: true,
                slideshow_interval: 3000,
                titlesFactor: 0
            });
        });
    </script>
    <script src="{{asset('js/slides/slides.min.jquery.js')}}"></script>
    <script src="{{asset('js/cycle-slider/cycle.js')}}"></script>
    <script src="{{asset('js/nivo-slider/jquery.nivo.slider.js')}}"></script>
    <script src="{{asset('js/tabify/jquery.tabify.js')}}"></script>
    <script src="{{asset('js/prettyPhoto/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/twitter/jquery.tweet.js')}}"></script>
    {{--<script src="js/scrolltop/scrolltopcontrol.js"></script>--}}
    <script src="{{asset('js/portfolio/filterable.js')}}"></script>
    <script src="{{asset('js/modernizr/modernizr-2.0.3.js')}}"></script>
    <script src="{{asset('js/easing/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/kwicks/jquery.kwicks-1.5.1.pack.js')}}"></script>
    <script src="{{asset('js/swfobject/swfobject.js')}}"></script>
    <!-- FancyBox -->
    <link rel="stylesheet" type="text/css" href="{{asset('js/fancybox/jquery.fancybox.css')}}" media="all">
    <script src="{{asset('js/fancybox/jquery.fancybox-1.2.1.js')}}"></script>
</head>
<body style="background: #FFF">
@include('inc.nav')
@yield('wrapper')
@yield('sidebar')
<div class="container">
@yield('container')
    @yield('mightalsolike')
</div>
@include('inc.footer')
</body>
</html>