<x-layout>
    <div x-data="{ show : false }" class="flex flex-col h-screen">
        <div class="grow basis-0 border-b border-neutral-100">
            <div class="flex items-center h-full pl-4 lg:pl-28 pr-4 lg:pr-28">
                <img src="./images/Group 1.svg" alt="" class="scale-90 -ml-3 md:-ml-0 md:scale-100">
                <div class="flex ml-auto">
                    <x-select-language/>
                    <button @click="show = ! show" class="ml-8 md:hidden"><img src="./images/hamburger.svg" alt="" class="ml-3"></button>
                    <p class="ml-12 hidden lg:block">{{ auth()->user()->username }}</p>
                    <form id="logout-form" method="POST" action="{{ route('logout') }}" class="hidden lg:block">
                        @csrf
                        <button type="submit" class="border-l pl-2 ml-2">{{__('landing.logout')}}</button>
                    </form>
                </div>
            </div>
        </div>
        <div x-show="show" id="hamburger" style="display: none;" class="bg-white border-neutral-200 border pt-2 pb-2">
            <p class="font-semibold border-b pl-4">{{ auth()->user()->username }}</p>
            <form id="logout-form" method="POST" action="{{ route('logout') }}" class="pl-4 text-center pt-2">
                @csrf
                <button type="submit" class="">{{__('landing.logout')}}</button>
            </form>
        </div>
        <div class="grow-[10] basis-0 flex flex-col">
            <div class="ml-4 lg:ml-28 mr-4 lg:mr-28 mt-6 lg:mt-10 grow flex flex-col">
              {{ $slot }}
            </div>
        </div>
    </div>
</x-layout>