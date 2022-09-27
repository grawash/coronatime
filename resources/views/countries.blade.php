<x-layout>
    <div class="flex flex-col h-screen">
        <div class="grow basis-0 border-b border-neutral-100">
            <div class="flex items-center h-full pl-28 pr-28">
                <img src="./images/Group 1.svg" alt="">
                <div class="flex ml-auto">
                    <button>select</button>
                    <p class="ml-4">{{ auth()->user()->username }}</p>
                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="border-l pl-2 ml-2">Log out</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="grow-[10] basis-0 bg-neutral-50 flex flex-col">
            <div class="ml-28 mr-28 mt-10 grow flex flex-col">
                <h1 class="font-extrabold text-2xl">Worldwide statistics</h1>
                <div class="mt-10">
                    <a href="{{ route('landing.stats') }}">Worldwide</a>
                    <a href="" class="ml-20 font-bold border-b-4 border-black pb-4">By country</a>
                </div>
                <div class="flex flex-col mt-10 gap-x-6 grow">
                    @foreach ($countries as $country)
                        <p>{{ $country['code'] }}</p>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</x-layout>