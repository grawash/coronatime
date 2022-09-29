@props(['sortBy'])
<div class="flex flex-col pl-3">
    <a href="{{ route('countries.stats') . '?sort=asc&sortBy=' . $sortBy }}" class="basis-0 grow"><img src="./images/sortasc.svg" alt=""></a>
    <a href="{{ route('countries.stats') . '?sort=desc&sortBy=' . $sortBy }}" class="basis-0 grow"><img src="./images/sortdesc.svg" alt=""></a>
</div>