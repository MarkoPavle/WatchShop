@extends('inc.app')
@section('title', 'Kontakt')
@section('container')

    <div id="container">
        @include('inc.notifications')
        {{--<h1>Login</h1>--}}
        <div class="one-half">
            <img src="{{asset('img/kontakt.jpg')}}">

            <h4>Adresa:</h4>
            <p>Knez Miletina 5, 11000 Beograd</p>


            <h4>Telefon:</h4>
            <p>011 / 26-26-262</p>


            <h4>Radno vreme:</h4>

            <p>Radnim danima od 9 do 20 časova<br>
                <b>Subota</b> od 10 do 17 časova</p>

            <h4>E-mail:</h4>

            <p>watchshop@gmail.com</p>

        </div>


        <div class="one-half last" style="margin-top: 50px">
            {{--<div class="heading_bg">
                <h2>Register</h2>
            </div>--}}
            <ul id="tabify_menu" class="menu_tab" style="margin: 0;">
                <li class="active"><a href="#fane1">Login</a></li>
                <li ><a href="#fane2">Register</a></li>

            </ul>
            <div id="fane1" class="tab_content">
                <form method="post" action="{{route('login.submit')}}">
                    {{csrf_field()}}
                    <fieldset>
                        <label>Email <span class="required">*</span></label>
                        <input type="text" name="email"  class="text requiredField">
                    </fieldset>
                    <fieldset>
                        <label>Lozinka <span class="required">*</span></label>
                        <input type="password" name="password" class="text requiredField email">
                    </fieldset>
                    <fieldset>
                        <input value="Login" class="button white" type="submit">
                    </fieldset>
                </form>
            </div>
            <div id="fane2" class="tab_content">
                <form action="{{route('users.store')}}" id="contact_form" method="POST">
                    {{csrf_field()}}
                    {{--<fieldset>
                        <label>Email <span class="required">*</span></label>
                        <input type="text" name="email"  class="text requiredField email">
                    </fieldset>
                    <fieldset>
                        <label>Ime <span class="required">*</span></label>
                        <input type="text" name="name" class="text requiredField">
                    </fieldset>
                    <fieldset>
                        <label>Lozinka <span class="required">*</span></label>
                        <input type="password" name="password" class="text requiredField password">
                    </fieldset>--}}
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Ime">
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Lozinka">
                    </div>
                    <fieldset>
                        <label for="role_id">Uloga</label>
                        <select class="form-control" name="role">

                                <option value="2">Korisnik</option>

                        </select>
                    </fieldset>
                    <fieldset>
                        <input  value="Registruj se" class="button white" type="submit">
                    </fieldset>
                </form>
            </div>

        <div style="clear:both; height: 40px"></div>
    </div>
    </div>
    @endsection