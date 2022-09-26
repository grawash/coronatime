<x-mail-layout>
    <img id="img" src="{{ $message->embed(public_path() . '/images/Landing (Worldwide) 2(3).png') }}" alt="Coronatime">
    <h1 id="heading">Confirmation email</h1>
    <p id="text">click this button to verify your email</p>
    <a id="verifyBtn" href="{{ 'localhost:8000/reset-password/'.$url }}">VERIFY EMAIL</a>
</x-mail-layout>




