<x-layout>
    <div class="flex flex-col items-center h-screen">
        <img src="{{ url('./images/Group 1.svg') }}" alt="" class="mt-10 ml-auto mr-auto">
        <div class="flex flex-col w-max mt-40">
            <h1 class="font-[900] text-2xl ml-auto mr-auto">Reset Password</h1>
            <form method="POST" action="reset-password" class="mt-14">
                @csrf
                <x-form.input name="email" type="email" placeholder="Enter your email" required />
                <x-form.input name="password" type="password" placeholder="Enter your email" required />
                <x-form.input name="password_confirmation" type="password" placeholder="Enter your email" required />
                <x-form.input name="token" type="token" hidden placeholder="Enter your email" required />
                <button type="submit" class="bg-green-500 hover:bg-green-600 mt-14 w-full h-14 text-white text-base font-[900] rounded-md">RESET PASSWORD</button>
            </form>
        </div>  
    </div>
</x-layout>