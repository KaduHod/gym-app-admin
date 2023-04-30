@props(['name', 'value', 'id','title'])
<div>
<label for="{{$id}}">{{$title}}</label>
<input id="{{$id}}" name="{{$name}}" value="{{$value}}" type="radio">
</div>
