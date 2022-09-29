<x-layout>
    <div class="flex flex-col h-screen">
        <div class="grow basis-0 border-b border-neutral-100">
            <div class="flex items-center h-full pl-28 pr-28">
                <img src="./images/Group 1.svg" alt="">
                <div class="flex ml-auto">
                    <div x-data="{ show:false }" @click.away="show = false" class="bg-white">
                        <button @click="show = ! show" >{{__('landing.select')}}</button>

                        <div x-show="show" style="display: none;" class="absolute bg-white border-neutral-200 border rounded-xl pt-2 pb-2 mr-10 mt-2">
                            <form method="POST" action="/locale"  class="p-2 hover:bg-neutral-300">
                                @csrf
                                <input type="hidden" name="language" value="en">
                                <button type="submit" >English</button>
                            </form>
                            <form method="POST" action="/locale" class="p-2 hover:bg-neutral-300">
                                @csrf
                                <input type="hidden" name="language" value="ka">
                                <button type="submit" >Georgian</button>
                            </form>
                        </div>
                    </div>
                    <p class="ml-12">{{ auth()->user()->username }}</p>
                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="border-l pl-2 ml-2">{{__('landing.logout')}}</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="grow-[10] basis-0 bg-neutral-50 flex flex-col">
            <div class="ml-28 mr-28 mt-10 grow flex flex-col">
              {{ $slot }}
            </div>
        </div>
    </div>
</x-layout>