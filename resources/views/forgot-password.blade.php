<x-layout>
    <div class="flex flex-col items-center h-screen">
        <img src="{{ url('./images/Group 1.svg') }}" alt="" class="mt-10 ml-auto mr-auto">
        <div class="flex flex-col w-max mt-40">
            <h1 class="font-[900] text-2xl ml-auto mr-auto">{{__('notify.reset_password')}}</h1>
            <form method="POST" action="{{ route('password.email') }}" class="mt-14">
                @csrf
                <x-form.input name="email" type="email" placeholder="{{__('notify.email_placeholder')}}" required />
                <button type="submit" class="bg-green-500 hover:bg-green-600 mt-14 w-full h-14 text-white text-base font-[900] rounded-md">{{__('notify.reset_password_btn')}}</button>
            </form>
        </div>  
    </div>
</x-layout>