@props(['id','items','name'])
<div>
    <select name="{{$name}}" id="{{$id}}">
        @foreach($items as $item) 
            <option id="muscle-groups" name="muscle-groups" >{{$item->name}}</option> 
        @endforeach
    </select>
</div>