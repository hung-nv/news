<select class="form-control" id="list-menu-item">
    <option value="0">Select...</option>
    @foreach($menuGroups as $menu)
        <option value="{{ $menu->id }}" @if($idGroup == $menu->id) selected @endif>{{ $menu->name }}</option>
    @endforeach
</select>