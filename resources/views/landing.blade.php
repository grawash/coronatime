<x-layout>
    <div class="flex flex-col h-screen">
        <div class="grow basis-0 border-b border-neutral-100">
            <div class="flex items-center h-full pl-28 pr-28">
                <img src="./images/Group 1.svg" alt="">
                <div class="flex ml-auto">
                    <button>select</button>
                    <p class="ml-4">Takeshi K.</p>
                    <a href="" class="border-l pl-2 ml-2">Log out</a>
                </div>
            </div>
        </div>
        <div class="grow-[10] basis-0 bg-neutral-50 flex flex-col">
            <div class="ml-28 mr-28 mt-10 grow flex flex-col">
                <h1 class="font-extrabold text-2xl">Worldwide statistics</h1>
                <div class="mt-10">
                    <a href="" class="mr-20 font-bold border-b-4 border-black pb-4">Worldwide</a>
                    <a href="">By country</a>
                </div>
                <div class="flex mt-10 gap-x-6 grow">
                    <x-stat-card class="bg-blue-600">
                        <img src="./images/Group 1797.svg" alt="" class="scale-150">
                        <p class="font-medium text-xl ">New cases</p>
                        <p class="font-[900] text-4xl ">715,523</p>
                    </x-stat-card>
                    <x-stat-card class="bg-green-600">
                        <img src="./images/Group 1799.svg" alt="" class="scale-150">
                        <p class="font-medium text-xl ">Recovered</p>
                        <p class="font-[900] text-4xl ">72,005</p>
                    </x-stat-card>
                    <x-stat-card class="bg-yellow-600">
                        <img src="./images/Group 1798.svg" alt="" class="scale-150">
                        <p class="font-medium text-xl ">Death</p>
                        <p class="font-[900] text-4xl ">8,332</p>
                    </x-stat-card>
                </div>
            </div>
        </div>
    </div>
</x-layout>