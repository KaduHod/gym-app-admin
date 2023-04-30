@props(['id','items'])
<ul id="{{ $id }}">
    @foreach($items as $item)
        <li>{{$item}}</li>       
    @endforeach
</ul>