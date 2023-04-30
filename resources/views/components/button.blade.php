@props(['id','titulo'])
<button 
    id={{ $id }} 
    class="
        bg-red-600 w-24 h-8 text-white rounded
        hover:bg-red-800 duration-75
    "
> 
    {{ $titulo }}
</button>