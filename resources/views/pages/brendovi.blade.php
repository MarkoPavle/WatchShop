@extends('inc.app')
@section('title', 'Brendovi')
@section('container')
    <div id="container">
        <div class="two-third">
            @foreach($brands as $brand)
            <div class="one-third last" style="margin: 10px">
                <a href="{{$brand->link}}"><img src="{{asset('/storage/images/brands/'.$brand->image)}}"></a>


                <p style="text-align:right"><a href="{{$brand->link}}" class="button_small white">Prikaži &raquo;</a></p>
            </div>
            @endforeach
        </div>

        <div class="sidebar_right">
            <div style="clear:both"></div>
            <h3 style="text-align: center">Sponsors</h3>
            <img src="img/demo_ad.png" alt="">
            @include('inc.sidebar')
        </div>
    </div>
@endsection

