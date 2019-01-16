@include('inc.notifications')
<div class="one-half" style="margin-left: 550px">
    <form method="POST" action="{{route('admin.update',['id' => $watch->id])}}" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <table>
            <tr>
                <th colspan="2">Unos</th>
            </tr>
            <tr>
                <td>Name:</td>
                <td>
                    <input type="text" name="name" value="{{$watch->name}}" />
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
                    <input type="text" name="price" value="{{$watch->price}}" />
                </td>
            </tr>
            <tr>
                <td>Details:</td>
                <td>
                    <textarea rows="3" name="details"  >{{$watch->details}}</textarea>
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