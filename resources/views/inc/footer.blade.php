 <div id="footer" style="/*width: 100%; padding-left: 355px;*/width: 100%;
			display: flex;
			align-items: center;
			justify-content: center; background: #1e1e1e">

        <div class="one-half">
            <h3>Brendovi</h3>
            <ul class="footer_links">
                <li><a href="{{route('casio')}}">Casio</a></li>
                <li><a href="{{route('festina')}}">Festina</a></li>
                <li><a href="{{route('citizen')}}">Citizen</a></li>
                <li><a href="{{route('esprit')}}">Esprit</a></li>
                <li><a href="{{route('fossil')}}">Fossil</a></li>
                <li><a href="{{route('swatch')}}">Swatch</a></li>
            </ul>
        </div>

    <div class="one-half">
        <h3>Korisni saveti</h3>
        <ul class="footer_links">
        <li><a href="{{route('servis')}}">Zakazite servis</a></li>
        <li><a href="https://officialwatchshop.rs/vazno/uputstvo-za-satove/">Korisni saveti</a></li>
        <li><a href="https://officialwatchshop.rs/vazno/faqs/">Najcesca pitanja</a></li>
        </ul>

    <div class="one-third" style="margin-top: 20px">
        <img src="{{asset('img/icon_fb.png')}}" alt=""> <img src="{{asset('img/icon_twitter.png')}}" alt=""> <img src="{{asset('img/icon_in.png')}}" alt=""> <img src="{{asset('img/icon_instagram.png')}}" alt=""><br>
        <h5> © 2018 WatchesShop | Created by Marko Pavlovic </h5>
        @if(session()->has('user'))
        <li><a href="{{route('logout')}}">Logout</a></li>
        @endif
    </div>


    <div style="clear:both"></div>
    </div>

 </div>