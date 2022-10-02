<x-user-layout>
    <form method="POST" action="{{ route('login') }}" class="mt-16">
        @csrf
        <h1 class="text-2xl font-[1000]">{{__('login.welcome') }}</h1>
        <p class="text-neutral-600 text-base md:text-xl mt-4">{{__('login.welcome_text') }}</p>
        <x-form.input name="username" type="text" placeholder="{{__('login.username_placeholder') }}" required />
        <x-form.input name="password" type="password" placeholder="{{__('login.password_placeholder') }}" required />
        <div class="flex mt-6 items-center">
            <input type="checkbox" id='remember' name="remember">
            <label for="remember" class="pl-2 font-semibold text-xs md:text-sm">{{__('login.remember') }}</label>
            <a href="{{ route('password.request') }}" class="ml-auto text-blue-700 font-semibold text-xs md:text-sm">{{__('login.forgot_password') }}</a>
        </div>
        <button type="submit" class="bg-green-500 hover:bg-green-600 mt-6 w-full h-14 text-white text-base font-[900] rounded-md">{{__('login.login') }}</button>
        <div class="flex mt-6 items-center justify-center">
            <p class="text-base text-neutral-600">{{ __('login.signup_suggestion') }}<a href="{{ route('register.index') }}" class="font-semibold text-black">{{__('login.signup_suggestion_link') }}</a></p>
        </div>
    </form>
</x-user-layout>
