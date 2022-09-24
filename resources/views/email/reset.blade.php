<x-mail-layout>
    <img id="img" src="{{ $message->embed(public_path() . '/images/Landing (Worldwide) 2(3).png') }}" alt="Coronatime">
    <h1 id="heading">Recover password</h1>
    <p id="text">click this button to recover a password</p>
    <a id="verifyBtn" href="{{ $url }}">RECOVER PASSWORD</a>
</x-mail-layout>