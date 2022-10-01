<x-layout>
    <div class="flex h-full">
        <div class="grow-[3] basis-0">
            <!-- use sm,md,lg... media selectors for larger devices, tailwind targets mobile devices on default!! example below -->
            <div class="flex">
                <div class="lg:mt-14 ml-4 mr-4 lg:mr-0 md:ml-32 mt-4 w-fit">
                    <div class="flex">
                        <img src="./images/Group 1.svg" alt="">
                        <x-select-language class="ml-auto mr-7"/>
                    </div>
                    {{ $slot }}
                </div>
            </div>


        </div>
        <div class="hidden md:block bg-vials bg-no-repeat bg-cover grow-[2] basis-0">
        </div>
    </div>
</x-layout>