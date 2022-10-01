<x-layout>
    <div class="flex flex-col md:items-center w-full h-screen p-4 pt-6 md:pt-0 md:p-0">
        <img src="{{ url('./images/Group 1.svg') }}" alt="" class="md:mt-10 md:ml-auto mr-auto">
        <div class="flex flex-col w-full md:w-96 mt-10 md:mt-40 grow md:grow-0">
            <h1 class="font-[900] text-xl md:text-2xl ml-auto mr-auto">{{__('notify.reset_password')}}</h1>
            <form method="POST" action="{{ route('password.email') }}" class="flex flex-col mt-14 grow md:grow-0">
                @csrf
                <x-form.input name="email" type="email" placeholder="{{__('notify.email_placeholder')}}" required />
                <button type="submit" class="bg-green-500 hover:bg-green-600 mb-6 mt-auto md:mt-14 w-full h-14 text-white text-base font-[900] rounded-md">{{__('notify.reset_password_btn')}}</button>
            </form>
        </div>  
    </div>
</x-layout>