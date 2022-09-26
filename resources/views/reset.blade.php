<x-layout>
    <div class="flex flex-col items-center h-screen">
        <img src="{{ url('./images/Group 1.svg') }}" alt="" class="absolute top-10 ml-auto mr-auto">
        <div class="flex flex-col w-max mt-auto mb-auto">
            <img src="{{ url('./images/icons8-checked 1.svg') }}" alt="" class="ml-auto mr-auto">
            <p class="ml-auto mr-auto mt-4">Your password has been updeted successfully</p>
            <a href="{{ route('login') }}" class="bg-green-500 capitalize hover:bg-green-600 mt-24 pt-4 pb-4 w-96 text-center text-white text-base font-[900] rounded-md">Sign in</a>
        </div>
    </div>
</x-layout>