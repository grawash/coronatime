<div x-data="{ show:false }" @click.away="show = false" {{ $attributes->merge(['class' => 'rounded-md']) }}>
    <button @click="show = ! show" class="flex"><img src="./images/hamburger.svg" alt="" class="ml-3"></button>

</div>