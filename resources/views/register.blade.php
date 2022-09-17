<x-user-layout>
    <form method="POST" action="store" class="mt-16">
        <h1 class="text-2xl font-[1000]">Welcome to Coronatime</h1>
        <p class="text-neutral-600 text-xl mt-4">Please enter required info to sign up</p>
        <x-form.input name="Username" placeholder="Enter unique username" required />
        <x-form.input name="email" placeholder="Enter your email" required />
        <x-form.input name="Password" placeholder="Fill in password" required />
        <x-form.input name="Password" placeholder="Repeat password" required />
        <div class="flex mt-6 items-center">
            <input type="checkbox" id='remember'>
            <label for="remember" class="pl-2 font-semibold text-sm">Remember this device</label>
        </div>
        <button type="submit" class="bg-green-500 capitalize hover:bg-green-600 mt-6 w-full h-14 text-white text-base font-[900] rounded-md">Sign up</button>
        <div class="flex mt-6 items-center justify-center">
            <p class="text-base text-neutral-600">Already have an account? <a href="/" class="font-semibold text-black">Log in</a></p>
            
        </div>
    </form>
</x-user-layout>