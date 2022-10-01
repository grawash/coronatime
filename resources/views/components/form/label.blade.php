@props(['name'])

<label class="block mb-2 mt-6 capitalize font-bold text-base text-black"
       for="{{ $name }}"
>
{{__('inputs.' . $name)}}
</label>