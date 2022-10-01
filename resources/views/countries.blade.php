<x-landing-layout>
    <h1 class="font-bold lg:font-extrabold text-xl lg:text-2xl">{{__('landing.worldwide_statistics')}}</h1>
    <div class="mt-6 lg:mt-10 border-neutral-100 border-b pb-4">
        <a href="{{ route('landing.stats') }}">{{__('landing.worldwide')}}</a>
        <a href="" class="ml-6 lg:ml-20 font-bold border-b-4 border-black pb-4">{{__('landing.by_country')}}</a>
    </div>
    <div class="md:mt-10 md:-mr-0 md:-ml-0 -mr-4 -ml-4">
        <form method="GET" action="" class="flex bg-white w-full md:w-fit pt-3 pb-3 md:p-3 border-[#E6E6E7] border lg:rounded-lg">
            <img src="./images/Vector.svg" alt="loop-icon" class="pl-6">
            <input type="search" name="search" placeholder="{{__('landing.search_placeholder')}}" class="pl-4">
        </form>
    </div>
    <div class="flex flex-col md:mt-10 md:mb-14 overflow-y-scroll gap-x-6 basis-auto max-h-[65vh] md:max-h-[55vh] md:rounded-3xl border-[#f6f6f7] border-2 md:-mr-0 md:-ml-0 -mr-4 -ml-4">
        <div class="flex font-semibold pl-4 md:pl-10 pt-5 pb-5 bg-[#f6f6f7] text-xs md:text-sm">
            <div class="flex md:basis-0 grow shrink">
                <p>{{__('landing.location')}}</p>
                <x-sort-btn sortBy='country->en'/>
            </div>
            <div class="flex md:basis-0 grow shrink">
                <p>{{__('landing.new_cases')}}</p>
                <x-sort-btn sortBy='confirmed'/>
            </div>
            <div class="flex md:basis-0 grow shrink">
                <p>{{__('landing.deaths')}}</p>
                <x-sort-btn sortBy='death'/>
            </div>
            <div class=" flex md:basis-0 grow md:grow-[2]">
                <p>{{__('landing.recovered')}}</p>
                <div class="flex flex-col pl-3">
                    <a href="{{ route('countries.stats') . '?sort=asc&sortBy=recovered' }}" class="basis-0 grow"><img src="./images/sortasc.svg" alt=""></a>
                    <a href="{{ route('countries.stats') . '?sort=desc&sortBy=recovered' }}" class="basis-0 grow"><img src="./images/sortdesc.svg" alt=""></a>
                </div>
            </div>
        </div>
        @foreach ($countries as $country)
        <div class="flex pl-4 md:pl-10 pt-4 pb-4 border-[#F6F6F7] border-b-2 text-xs md:text-base">
            <p class="basis-0 grow">{{ $country->country }}</p>
            <p class="basis-0 grow">{{ $country->confirmed }}</p>
            <p class="basis-0 grow">{{ $country->death }}</p>
            <p class="basis-0 grow md:grow-[2]">{{ $country->recovered }}</p>
        </div>
        @endforeach
    </div>
</x-landing-layout>