@extends('inc.app')
@section('title', 'Servis')
@section('container')

    <div id="container">
        @include('inc.notifications')
    <form method="POST" action="{{route('servis.store')}}">
        {{csrf_field()}}
            <fieldset>
                <label>Ime<span class="required">*</span></label>
                <input type="text" name="name" id="Myname" value="" class="text requiredField">
            </fieldset>
        <br>
            <fieldset>
                <label>Prezime <span class="required">*</span></label>
                <input type="text" name="surname" id="mysurname" value="" class="text requiredField email">
            </fieldset>
        <br>
            <fieldset>
                <label>Email <span class="required">*</span></label>
                <input type="email" name="email" id="myemail" value="" class="text requiredField email">
            </fieldset>
        <br>
            <fieldset>
                <label>Vrsta servisa<span class="required">*</span></label><br>
                <select name="type_service">
                <option value="popravka" class="option">Popravka</option>
                    <option value="zamena kaisa" class="option">Zamena kaisa</option>
                    <option value="zamena baterije" class="option">Zamena baterije</option>
                </select>
            </fieldset>
            <fieldset>
                <label>Izaberite datum <span class="required">*</span></label>
                <input type="date" name="date" id="myDate"  class="post_meta_date">
            </fieldset>
        <br>
            <fieldset>
                <label>Poruka</label>
                <textarea name="message" id="Mymessage" rows="20" cols="30" class="text"></textarea>
            </fieldset>
            <fieldset>
                <input name="Mysubmitted" id="Mysubmitted" value="Posalji" class="button white" type="submit">
            </fieldset>
        <br>
        <h5>Polja sa zvezdicom <span class="required">*</span> su obavezna</h5>
        <br>

    </form>
    </div>
    @endsection