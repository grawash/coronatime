<x-layout>
    <div class="flex h-full">
        <div class="grow-[3] basis-0">
            <!-- use sm,md,lg... media selectors for larger devices, tailwind targets mobile devices on default!! example below -->
            <div class="lg:mt-14 ml-32 mt-4 w-fit">
                <img src="./images/Group 1.svg" alt="">
                <form method="POST" action="store" class="mt-16">
                    <h1 class="text-2xl font-[1000]">Welcome Back</h1>
                    <p class="text-neutral-600 text-xl mt-4">Welcome back! Please enet your details</p>
                    <x-form.input name="Username" placeholder="Enter unique username or email" required />
                    <x-form.input name="Password" placeholder="Fill in password" required />
                    <div class="flex mt-6 items-center">
                        <input type="checkbox" id='remember'>
                        <label for="remember" class="pl-2 font-semibold text-sm">Remember this device</label>
                        <a href="" class="ml-auto text-blue-700 font-semibold text-sm">Forgot password?</a>
                    </div>
                    <button type="submit" class="bg-green-500 hover:bg-green-600 mt-6 w-full h-14 text-white text-base font-[900] rounded-md">Log in</button>
                    <div class="flex mt-6 items-center justify-center">
                        <p class="text-base text-neutral-600">Don't have an account? <a href="" class="font-semibold text-black">Sign up for free</a></p>
                        
                    </div>
                </form>
            </div>

        </div>
        <div class="bg-vials bg-no-repeat bg-cover grow-[2] basis-0">
        </div>
    </div>
</x-layout>

