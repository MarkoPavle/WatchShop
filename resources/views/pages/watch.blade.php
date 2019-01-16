@extends('inc.app')
@section('title', $watch->name)
@section('container')

    <div id="container" style="width: 500px">
@include('inc.notifications')
        <br>
            <div class="heading_bg">
                <h1>{{$watch->name}}</h1>
            </div>

            <img style="margin-left: 100px" src="{{asset('storage/images/watches/'.$watch->image)}}"/>

        <p>{{$watch->details}}</p>
        <h3>Cena: {{$watch->price}} €</h3>
    </div>

    <div id="container">
        <h3>Komentari:</h3>
        @foreach($comments as $comment)
            @if ($comment->watch_id === $watch->id )
                <table>
                    <thead>
                    <tr>
                        <th>{{$comment->comment}}<img src="{{asset('/img/avatar.png')}}" style="float: right"/></th>
                    </tr>
                    </thead>
                </table>
            @endif
            @endforeach
        @if(session()->has('user'))
        <h4>Unesite komentar</h4><br>
        <form action="{{route('comments',['id' => $watch->id])}}" method="POST">
            {{csrf_field()}}
            <textarea rows="3" name="comment" value="{{old('comment')}}"></textarea>
            <input type="submit" class="button" value="Unesi" />
        </form>
        @else
            <h4>Ulogujte se <a href="{{route('kontakt')}}">ovde</a> da biste komentarisali</h4>

    </div>
    @endif
    @endsection
@section('mightalsolike')
    <div id="container">
        <h1 style="margin-top: 40px; text-align: center"><a href="{{route('proizvodi')}}">Slicni proizvodi</a></h1>

        @foreach ($mightAlsoLike as $product)
            <div class="one-fourth last" style="margin-left: 10px;margin-bottom: 40px">
                <div {{--class="heading_bg"--}} >
                    <h2><a href="{{route('show',['id'=> $product->id])}}">{{$product->name}}</a></h2>
                </div>
                <a href="{{route('show',['id'=> $product->id])}}"><img src="{{asset('storage/images/watches/'.$product->image)}}" ></a>
                <p style="text-align:left; float: left " >Cena: {{$product->price}} €</p>
                <p style="text-align:right; float: right"><a href="{{route('show',['id'=> $product->id])}}" class="button_small white">Prikaži &raquo;</a></p>
            </div>
        @endforeach
    </div>
@endsection



