<x-landing-layout>
    <h1 class="font-bold lg:font-extrabold text-xl lg:text-2xl">{{__('landing.worldwide_statistics')}}</h1>
    <div class="mt-6 lg:mt-10 border-neutral-100 border-b pb-4">
        <a href="{{ route('landing.stats') }}" class="mr-6 lg:mr-20 font-bold border-b-4 border-black pb-4">{{__('landing.worldwide')}}</a>
        <a href="{{ route('countries.stats') }}">{{__('landing.by_country')}}</a>
    </div>
    <div class="flex flex-wrap md:flex-nowrap mb-14 mt-6 lg:mt-10 gap-x-6 grow">
        <x-stat-card class="bg-blue-600 w-full mb-4 md:w-auto">
            <img src="./images/Group 1797.svg" alt="" class=" md:scale-150">
            <p class="font-medium text-xl ">{{__('landing.new_cases')}}</p>
            <p class="font-[900] text-2xl md:text-4xl text-blue-600">{{ $confirmed }}</p>
        </x-stat-card>
        <x-stat-card class="bg-green-600">
            <img src="./images/Group 1799.svg" alt="" class="md:scale-150">
            <p class="font-medium text-xl ">{{__('landing.recovered')}}</p>
            <p class="font-[900] text-2xl md:text-4xl text-green-600">{{ $recovered }}</p>
        </x-stat-card>
        <x-stat-card class="bg-yellow-600">
            <img src="./images/Group 1798.svg" alt="" class="md:scale-150">
            <p class="font-medium text-xl ">{{__('landing.deaths')}}</p>
            <p class="font-[900] text-2xl md:text-4xl text-yellow-600">{{ $deaths }}</p>
        </x-stat-card>
    </div>
</x-landing-layout>
