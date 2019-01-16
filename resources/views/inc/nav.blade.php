<div style="width:100%; background: #FFF">
    <div class="header">
        <!-- Logo/Title -->
        <div id="site_title" ><a href="{{route('home')}}"> <img src="{{asset('img/watch_logo.png')}}" style="margin-top: -4px; margin-left: -20px" ></a> </div>
        <!-- Main Menu -->
        <nav>
            <ol id="menu">

                <li><a href="{{route('proizvodi')}}">Proizvodi</a></li>

                <li><a href="{{route('brendovi')}}">Brendovi</a>
                    <ol>
                       <label style="font-size: 12px">Muški</label>
                        <li><a href="{{route('casio')}}">Casio</a></li>
                        <li><a href="{{route('festina')}}">Festina</a></li>
                        <li><a href="{{route('citizen')}}">Citizen</a></li>
                        <label style="font-size: 12px">Ženski</label>
                        <li><a href="{{route('fossil')}}">Fossil</a></li>
                        <li><a href="{{route('esprit')}}">Esprit</a></li>
                        <li><a href="{{route('swatch')}}">Swatch</a></li>
                    </ol>

                </li>
                <li><a href="{{route('servis')}}">Servis</a>

                <li><a href="{{route('gallery')}}">Galerija</a>

                <li><a href="{{route('kontakt')}}">Kontakt</a></li>

            </ol>
        </nav>
    </div>

    <!-- END header -->
</div>