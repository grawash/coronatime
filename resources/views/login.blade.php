<x-user-layout>
    <form method="POST" action="login" class="mt-16">
        @csrf
        <h1 class="text-2xl font-[1000]">Welcome Back</h1>
        <p class="text-neutral-600 text-xl mt-4">Welcome back! Please enet your details</p>
        <x-form.input name="username" type="text" placeholder="Enter unique username or email" required />
        <x-form.input name="password" type="password" placeholder="Fill in password" required />
        <div class="flex mt-6 items-center">
            <input type="checkbox" id='remember'>
            <label for="remember" class="pl-2 font-semibold text-sm">Remember this device</label>
            <a href="./forgot-password" class="ml-auto text-blue-700 font-semibold text-sm">Forgot password?</a>
        </div>
        <button type="submit" class="bg-green-500 hover:bg-green-600 mt-6 w-full h-14 text-white text-base font-[900] rounded-md">Log in</button>
        <div class="flex mt-6 items-center justify-center">
            <p class="text-base text-neutral-600">Don't have an account? <a href="./register" class="font-semibold text-black">Sign up for free</a></p>
            
        </div>
    </form>
</x-user-layout>
