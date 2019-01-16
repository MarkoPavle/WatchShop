 <!DOCTYPE HTML>
<html>
<head>
    <title>Bigshot | Gallery Fader</title>
    <meta charset="utf-8">
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('menu/css/simple_menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/gridNavigation.css')}}">
    <!--JS FILES -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.mousewheel.js"')}}"></script>
    <script src="{{asset('js/jquery.gridnav.js')}}"></script>
    <script src="{{asset('js/easing/jquery.easing.1.3.js')}}"></script>
    <script>
        $(function () {
            $('#tj_container').gridnav({
                type: {
                    mode: 'seqfade', // use def | fade | seqfade | updown | sequpdown | showhide | disperse | rows
                    speed: 500, // for fade, seqfade, updown, sequpdown, showhide, disperse, rows
                    easing: '', // for fade, seqfade, updown, sequpdown, showhide, disperse, rows
                    factor: 100, // for seqfade, sequpdown, rows
                    reverse: '' // for sequpdown
                }
            });
        });
    </script>
</head>
<body>
@include('inc.nav')
<!-- END header -->
<div id="container" >

    <div id="tj_container" class="tj_container">
        <div class="tj_nav" > <span id="tj_prev" class="tj_prev">Previous</span> <span id="tj_next" class="tj_next">Next</span> </div>
        <div class="tj_wrapper" style="margin-top: 55px" >
            @foreach($watches as $watch)
            <ul class="tj_gallery" style="margin:0; padding:0">
                <li><a href="#"><img src="{{asset('storage/images/watches/'.$watch->image)}}"></a></li>

            </ul>
                @endforeach
        </div>
    </div>
    <!-- END Portfolio -->
    <div style="clear:both"></div>
    <h1 style="padding: 20px 0">Slike proizvoda</h1>
    <!-- First Column -->

    <div style="clear:both; height: 40px"></div>
</div>
<!-- END container -->
@include('inc.footer')
<!-- END footer -->
</body>
</html>