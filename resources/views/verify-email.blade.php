<x-layout>
    <div class="flex flex-col md:items-center h-screen p-4 pt-6 md:pt-0 md:p-0">
        <img src="{{ url('./images/Group 1.svg') }}" alt="" class="md:mt-10 md:ml-auto mr-auto">
        <div class="flex flex-col w-max mt-auto mb-auto">
            <img src="{{ url('./images/icons8-checked 1.svg') }}" alt="" class="ml-auto mr-auto">
            <p class="ml-auto mr-auto mt-4">{{__('notify.confitmation_sent')}}</p>
        </div>
    </div>
</x-layout>