<div x-data="{ show:false }" @click.away="show = false" {{ $attributes->merge(['class' => 'rounded-md']) }}>
    <button @click="show = ! show" class="flex">
        @if (App::isLocale('en'))
            {{__('language.english')}}
        @else
            {{__('language.georgian')}}
        @endif
        <img src="./images/Stroke 165.svg" alt="" class="ml-3"></button>

    <div x-show="show" style="display: none;" class="absolute bg-white border-neutral-200 border rounded-xl pt-2 pb-2 mr-10 mt-2">
        <form method="POST" action="/locale"  class="p-2 hover:bg-neutral-300">
            @csrf
            <input type="hidden" name="language" value="en">
            <button type="submit" >{{__('language.english')}}</button>
        </form>
        <form method="POST" action="/locale" class="p-2 hover:bg-neutral-300">
            @csrf
            <input type="hidden" name="language" value="ka">
            <button type="submit" >{{__('language.georgian')}}</button>
        </form>
    </div>
</div>