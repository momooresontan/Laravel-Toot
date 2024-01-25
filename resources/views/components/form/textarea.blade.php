@props(['name'])

<textarea name="{{$name}}" 
    class="w-full text-sm m-2 focus:outline-none focus:ring"  
    {{ $attributes }}  
    required>
    {{ $slot??old($name) }}
</textarea>