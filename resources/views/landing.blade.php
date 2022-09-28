<x-landing-layout>
    <h1 class="font-extrabold text-2xl">Worldwide statistics</h1>
    <div class="mt-10">
        <a href="" class="mr-20 font-bold border-b-4 border-black pb-4">Worldwide</a>
        <a href="{{ route('countries.stats') }}">By country</a>
    </div>
    <div class="flex mt-10 gap-x-6 grow">
        <x-stat-card class="bg-blue-600">
            <img src="./images/Group 1797.svg" alt="" class="scale-150">
            <p class="font-medium text-xl ">New cases</p>
            <p class="font-[900] text-4xl text-blue-600">{{ $confirmed }}</p>
        </x-stat-card>
        <x-stat-card class="bg-green-600">
            <img src="./images/Group 1799.svg" alt="" class="scale-150">
            <p class="font-medium text-xl ">Recovered</p>
            <p class="font-[900] text-4xl text-green-600">{{ $recovered }}</p>
        </x-stat-card>
        <x-stat-card class="bg-yellow-600">
            <img src="./images/Group 1798.svg" alt="" class="scale-150">
            <p class="font-medium text-xl ">Death</p>
            <p class="font-[900] text-4xl text-yellow-600">{{ $deaths }}</p>
        </x-stat-card>
    </div>
</x-landing-layout>
