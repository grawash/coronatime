<x-layout>
    <div class="flex flex-col md:items-center h-screen p-4 pt-6 md:pt-0 md:p-0">
        <img src="{{ url('./images/Group 1.svg') }}" alt="" class="md:mt-10 md:ml-auto mr-auto">
        <div class="flex flex-col grow md:grow-0 w-full md:w-max md:mt-auto md:mb-auto">
            <img src="{{ url('./images/icons8-checked 1.svg') }}" alt="" class="ml-auto mr-auto mt-auto">
            <p class="text-center ml-auto mr-auto mt-4">{{__('notify.account_confirmed')}}</p>
            <a href="{{ route('login') }}" class="bg-green-500 capitalize hover:bg-green-600 mt-auto mb-6 md:mt-24 pt-4 pb-4 w-full md:w-96 text-center text-white text-base font-[900] rounded-md">{{__('notify.signin')}}</a>
        </div>
    </div>
</x-layout>