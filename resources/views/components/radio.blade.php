@props(['name', 'value', 'id','title','checked'])
<div>
<label for="{{$id}}">{{$title}}</label>
<input 
    id="{{$id}}" 
    name="{{$name}}" 
    value="{{$value}}" 
    type="radio"
    @isset($checked)
        checked
    @endisset>
</div>
