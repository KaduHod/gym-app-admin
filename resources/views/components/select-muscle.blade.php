@props(['groups'])
<div>
    <h2>Choose yout muscle</h2>
    <select name="muscle-groups" id="muscle-groups">
        @foreach($groups as $group) 
        <optgroup label="{{$group->name}}">
            @foreach($group->musclePortions as $portion)
                <option id="{{$group->id}}-{{$portion->id}}">{{$portion->name}}</option>
            @endforeach
        </optgroup> 
        @endforeach
    </select>
</div>