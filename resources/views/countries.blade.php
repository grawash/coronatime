<x-landing-layout>
    <h1 class="font-extrabold text-2xl">{{__('landing.worldwide_statistics')}}</h1>
    <div class="mt-10">
        <a href="{{ route('landing.stats') }}">{{__('landing.worldwide')}}</a>
        <a href="" class="ml-20 font-bold border-b-4 border-black pb-4">{{__('landing.by_country')}}</a>
    </div>
    <div class="mt-16">
        <form method="GET" action="" class="flex bg-white w-fit p-3 border-[#E6E6E7] border rounded-lg">
            <img src="./images/Vector.svg" alt="loop-icon" class="pl-6">
            <input type="search" name="search" placeholder="{{__('landing.search_placeholder')}}" class="pl-4">
        </form>
    </div>
    <div class="flex flex-col mt-10 mb-14 overflow-y-scroll gap-x-6 basis-auto max-h-[55vh] rounded-3xl border-[#f6f6f7] border-2">
        <div class="flex font-semibold pl-10 pt-5 pb-5 bg-[#f6f6f7] text-sm">
            <div class="flex basis-0 grow">
                <p>{{__('landing.location')}}</p>
                <x-sort-btn sortBy='country->en'/>
            </div>
            <div class="flex basis-0 grow">
                <p>{{__('landing.new_cases')}}</p>
                <x-sort-btn sortBy='confirmed'/>
            </div>
            <div class="flex basis-0 grow">
                <p>{{__('landing.deaths')}}</p>
                <x-sort-btn sortBy='death'/>
            </div>
            <div class=" flex basis-0 grow-[2]">
                <p>{{__('landing.recovered')}}</p>
                <div class="flex flex-col pl-3">
                    <a href="{{ route('countries.stats') . '?sort=asc&sortBy=recovered' }}" class="basis-0 grow"><img src="./images/sortasc.svg" alt=""></a>
                    <a href="{{ route('countries.stats') . '?sort=desc&sortBy=recovered' }}" class="basis-0 grow"><img src="./images/sortdesc.svg" alt=""></a>
                </div>
            </div>
        </div>
        @foreach ($countries as $country)
        <div class="flex pl-10 pt-4 pb-4 border-[#F6F6F7] border-b-2">
            <p class="basis-0 grow">{{ $country->code }}</p>
            <p class="basis-0 grow">{{ $country->confirmed }}</p>
            <p class="basis-0 grow">{{ $country->death }}</p>
            <p class="basis-0 grow-[2]">{{ $country->recovered }}</p>
        </div>
        @endforeach
    </div>
</x-landing-layout>