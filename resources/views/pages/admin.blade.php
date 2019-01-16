@extends('inc.app')
@section('title', 'Administrator')
@section('container')
@include('inc.notifications')
<div class="one-half" style="margin-left: 550px">
    <form method="POST" action="{{route('admin.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <table>
            <tr>
                <th colspan="2">Unos</th>
            </tr>
            <tr>
                <td>Name:</td>
                <td>
                    <input type="text" name="name" value="{{old('name')}}"/>
                </td>
            </tr>
            <tr>
                <td>Brand</td>
                <td>
                    <select name="brand_id">
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>Slika</td>
                <td>
                    <input type="file" name="image" value="{{old('image')}}"/>
                </td>
            </tr>
            <tr>
                <td>Cena:</td>
                <td>
                    <input type="text" name="price" value="{{old('price')}}"/>
                </td>
            </tr>
            <tr>
                <td>Details:</td>
                <td>
                    <textarea rows="3" name="details" value="{{old('details')}}"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Unesi" />
                </td>
            </tr>
        </table>
    </form>
</div>
<div id="container">
    <h2>Zakazani servisi</h2>
<table>
    <thead>
    <tr>
        <th>Ime i prezime</th>
        <th>Email</th>
        <th>Datum</th>
        <th>Servis</th>
        <th>Poruka</th>
    </tr>
    </thead>
    <tbody>
    @foreach($servisi as $servis)
        <tr>
            <td>{{$servis->name}} {{$servis->surname}}</td>
            <td>{{$servis->email}}</td>
            <td>{{$servis->date}}</td>
            <td>{{$servis->type_service}}</td>
            <td>{{$servis->message}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
    <div id="container">
        <h2>Proizvodi</h2>
        <table>
            <thead>
            <tr>
                <td>Ime</td>
                <td>Cena</td>
                <td>Opis</td>
                <td>Opcije</td>
            </tr>
            </thead>
        <tbody>
        @foreach($watches as $watch)
            <form method="POST" action="{{route('admin.delete',['id' => $watch->id])}}">
                {{csrf_field()}}
                {{method_field('DELETE')}}
            <tr>
                <td>{{$watch->name}}</td>
                <td>{{$watch->price}}</td>
                <td>{{$watch->details}}</td>
                <td><button type="submit" class="btn btn-danger">Obrisi</button> </td>
                <td><a href="{{route('admin.edit', ['id' => $watch->id])}}" class="button">Izmeni</a></td>
            </tr>
            </form>
            @endforeach
        </tbody>
        </table>
    </div>

@endsection