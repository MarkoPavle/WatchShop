@extends('inc.app')
@section('title', 'Festina')
@section('container')
    <div id="container">
        <div class="two-third">
            @foreach($watches as $watch)
                @if($watch->brand->id === 2)
                    <form method="post">
                        <div class="one-third last" style="margin: 10px">
                            <h2><a href="{{route('show',['id'=> $watch->id])}}">{{$watch->name}}</a></h2>
                            <a href="#"><img src="{{asset('/storage/images/watches/'.$watch->image)}}"></a>
                            <p>{{$watch->details}}</p>
                            <p style="text-align:right"><a href="{{route('show',['id'=> $watch->id])}}" class="button_small white">Prikaži &raquo;</a></p>
                        </div>
                    </form>
                @endif
            @endforeach
        </div>
        <!-- close two third -->
        <div class="sidebar_right">
            <div style="clear:both"></div>
            <img src="{{asset('/storage/images/brands/festina_logo.png')}}" alt="">
            @include('inc.sidebar')
        </div>
    </div>
@endsection