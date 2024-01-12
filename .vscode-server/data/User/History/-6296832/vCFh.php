<select class="custom-select">
    <option value="" selected>All Manufacturers</option>
    @foreach($manufacturers as $id => $name)
        <option value="{{$id}}">$name</option>
    @endforeach
</select>                    