@props(['name'])

<input class="border border-gray-400 m-2 p-2 w-50 rounded" name="{{ $name }}" {{ $attributes(['value' => old($name)]) }}><br>