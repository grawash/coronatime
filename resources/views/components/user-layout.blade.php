<x-layout>
    <div class="flex h-full">
        <div class="grow-[3] basis-0">
            <!-- use sm,md,lg... media selectors for larger devices, tailwind targets mobile devices on default!! example below -->
            <div class="flex">
                <div class="lg:mt-14 ml-32 mt-4 w-fit">
                    <img src="./images/Group 1.svg" alt="">
                    {{ $slot }}
                </div>
                <x-select-language class="ml-auto lg:mt-14 mt-4 lg:mr-14"/>
            </div>


        </div>
        <div class="bg-vials bg-no-repeat bg-cover grow-[2] basis-0">
        </div>
    </div>
</x-layout>