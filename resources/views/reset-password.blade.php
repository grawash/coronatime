<x-layout>
    <div class="flex flex-col items-center h-screen">
        <img src="{{ url('./images/Group 1.svg') }}" alt="" class="mt-10 ml-auto mr-auto">
        <div class="flex flex-col w-max mt-40">
            <h1 class="font-[900] text-2xl ml-auto mr-auto">Reset Password</h1>
            <form method="POST" action="{{ route('password.update') }}" class="mt-14">
                @csrf
                <input type="hidden" name="email" value="{{$email}}" required>
                <x-form.input name="password" type="password" placeholder="Enter your email" required />
                <x-form.input name="password_confirmation" type="password" placeholder="Repeat password" required />
                <input type="hidden" name="token" value="{{$token}}" required>
                <button type="submit" class="bg-green-500 hover:bg-green-600 mt-14 w-full h-14 text-white text-base font-[900] rounded-md">SAVE CHANGES</button>
            </form>
        </div>  
    </div>
</x-layout>