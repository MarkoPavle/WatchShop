@extends('inc.app')
@section('title', 'Proizvodi')

@section('container')

        <div id="container">

                @foreach($watches as $watch)
                    <form method="post">

                <div class="one-third last" style="margin-left: 20px;margin-bottom: 35px ">
                <div class="heading_bg">
                    <h2><a href="{{route('show',['id'=> $watch->id])}}">{{$watch->name}}</a></h2>

                </div>
                    <img src="{{asset('storage/images/watches/'.$watch->image)}}"/>
                <ul class="post_meta" style="margin:0">
                    <li class="post_meta_admin"><a href="{{$watch->brand->link}}">{{$watch->brand->name}}</a></li>

                    <li class="post_meta">{{$watch->price}} €</li>
                </ul>
                <p style="height: 20px">{{$watch->details}}</p>
            </div>
                    </form>

            @endforeach

            <div style="clear:both; height: 40px"></div>

                   <h3> {{$watches->links('vendor.pagination.pagination')}}</h3>

        </div>

    @endsection