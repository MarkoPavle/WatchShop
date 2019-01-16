@extends('inc.app')
@section('title', 'Watch-Shop')
@section('wrapper')
    <div class="wrapper">
        <div id="ei-slider" class="ei-slider">
            <ul class="ei-slider-large">
                <li> <img src="{{asset('img/large/7.jpg')}}" alt=""></li>

                <li> <img src="{{asset('img/large/6.jpg')}}" alt=""></li>

                <li> <img src="{{asset('img/large/1.jpg')}}" alt=""></li>

                <li> <img src="{{asset('img/large/2.jpg')}}" alt=""></li>

                <li> <img src="{{asset('img/large/4.jpg')}}" alt=""></li>

                <li> <img src="{{asset('img/large/3.jpg')}}" alt=""></li>

                <li> <img src="{{asset('img/large/5.jpg')}}" alt=""></li>
            </ul>
            <!-- ei-slider-large -->
            <ul class="ei-slider-thumbs">
                <li class="ei-slider-element">Current</li>
                <li><a href="#">Slide 7</a><img src="{{asset('img/thumbs/7.jpg')}}" alt=""></li>
                <li><a href="#">Slide 6</a><img src="{{asset('img/thumbs/6.jpg')}}" alt=""></li>
                <li><a href="#">Slide 1</a><img src="{{asset('img/thumbs/11.jpg')}}" alt=""></li>
                <li><a href="#">Slide 2</a><img src="{{asset('img/thumbs/2.jpg')}}" alt=""></li>
                <li><a href="#">Slide 4</a><img src="{{asset('img/thumbs/4.jpg')}}" alt=""></li>
                <li><a href="#">Slide 3</a><img src="{{asset('img/thumbs/3.jpg')}}" alt=""></li>
                <li><a href="#">Slide 5</a><img src="{{asset('img/thumbs/5.jpg')}}" alt=""></li>
            </ul>
            <!-- ei-slider-thumbs -->
        </div>
        <!-- ei-slider -->
    </div>
    @endsection
@section('mightalsolike')
    <div id="container">
        <h1 style="margin-top: 40px; text-align: center"><a href="{{route('proizvodi')}}">Izdvajamo iz ponude</a></h1>

        @foreach ($mightAlsoLike as $product)
            <div class="one-fourth last" style="margin-left: 10px;margin-bottom: 40px">
                <div  style="text-align: center">
                    <h2><a href="{{route('show',['id'=> $product->id])}}">{{$product->name}}</a></h2>
                </div>
                <a href="{{route('show',['id'=> $product->id])}}"><img src="{{asset('storage/images/watches/'.$product->image)}}" ></a>
                <p style="text-align:left; float: left " >Cena: {{$product->price}} €</p>
                <p style="text-align:right; float: right"><a href="{{route('show',['id'=> $product->id])}}" class="button_small white">Prikaži &raquo;</a></p>
            </div>
        @endforeach
    </div>
    @endsection