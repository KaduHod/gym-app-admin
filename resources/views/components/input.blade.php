@props(['id','titulo', 'name', 'type', 'placeholder', 'pattern', 'required'])

<label for={{ $name }} class="w-5/6 mt-1 mb-1">
    @isset($titulo)
        <h3> {{$titulo}} </h3>
    @endisset
    <input id='{{ $id }}' name='{{ $name }}' 
        @isset($type)
            type='{{ $type }}'
        @endisset
        @isset($pattern)
            type='{{ $pattern }}'
        @endisset
        @isset($required)
            required
        @endisset
        @empty($type)
            type='text'
        @endempty
        @isset($placeholder)
            placeholder='{{ $placeholder }}'
        @endisset
        class="w-full border rounded outline-0 p-1"
    >
</label>
