@props(['id','titulo', 'link', 'white'])
<a classes="" id="{{$id}}" href="{{$link}}"
@isset($white)
style="color:white"
@endisset
>{{$titulo}}</a>