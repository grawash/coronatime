<x-user-layout>
                <form method="POST" action="{{ route('user.register') }}" class="mt-16">
                    @csrf
                    <h1 class="text-xl lg:text-2xl font-[1000]">{{__('register.welcome_register')}}</h1>
                    <p class="text-neutral-600 text-base lg:text-xl mt-4">{{__('register.register_text')}}</p>
                    <x-form.input name="username" placeholder="{{__('register.username_placeholder')}}" required />
                    <x-form.input name="email" type="email" placeholder="{{__('register.email_placeholder')}}" required />
                    <x-form.input name="password" type="password" placeholder="{{__('register.password_placeholder')}}" required />
                    <x-form.input name="password_confirmation" type="password" placeholder="{{__('register.password_confirmation_placeholder')}}" required />

                    <button type="submit" class="bg-green-500 capitalize hover:bg-green-600 mt-6 w-full h-14 text-white text-base font-[900] rounded-md">{{__('signup')}}</button>

                    <div class="flex mt-6 items-center justify-center">
                        <p class="text-base text-neutral-600">{{ __('register.have_account') }}<a href="{{ route('login') }}" class="font-semibold text-black">{{__('register.login') }}</a></p>
                    </div>
                </form>
</x-user-layout>