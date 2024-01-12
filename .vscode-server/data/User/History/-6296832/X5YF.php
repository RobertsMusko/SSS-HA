<select id="filter_manufacturer_id" name="manufacturer_id" class="custom-select">
    {{--<option value="" selected>All Manufacturers</option>--}}
    @foreach($manufacturers as $id => $name)
        <option {{$id == request('manufacturer_id') ? 'selected' : '' }} value="{{$id}}"> {{$name}}</option>
    @endforeach
</select>                    