@props(['name'])
@error($name)
    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
@enderror
