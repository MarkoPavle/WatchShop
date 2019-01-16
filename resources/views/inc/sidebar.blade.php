<h3 style="text-align: center">Brendovi</h3>
<ul class="sidebar_menu" style="margin:0">
    @foreach($brands as $brand)
        <li><a href="{{$brand->link}}">{{$brand->name}}</a></li>
    @endforeach
</ul>