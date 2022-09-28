<x-landing-layout>
    <h1 class="font-extrabold text-2xl">Worldwide statistics</h1>
    <div class="mt-10">
        <a href="{{ route('landing.stats') }}">Worldwide</a>
        <a href="" class="ml-20 font-bold border-b-4 border-black pb-4">By country</a>
    </div>
    <div class="flex flex-col mt-10 mb-14 overflow-y-scroll gap-x-6 basis-auto max-h-[65vh] rounded-3xl border-[#f6f6f7] border-2">
        <div class="flex font-semibold pl-10 pt-5 pb-5 bg-[#f6f6f7] text-sm">
            <p class="basis-0 grow">Location</p>
            <p class="basis-0 grow">New cases</p>
            <p class="basis-0 grow">Deaths</p>
            <p class="basis-0 grow-[2]">Recovered</p>
        </div>
        @foreach ($countries as $country)
        <div class="flex pl-10 pt-4 pb-4 border-[#F6F6F7] border-b-2">
            <p class="basis-0 grow">{{ $country['code'] }}</p>
            <p class="basis-0 grow">{{ $country['confirmed'] }}</p>
            <p class="basis-0 grow">{{ $country['recovered'] }}</p>
            <p class="basis-0 grow-[2]">{{ $country['death'] }}</p>
        </div>
        @endforeach
    </div>
</x-landing-layout>