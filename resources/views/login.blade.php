@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-evenly items-center gap-16">
    <img class="max-w-9/10 lg:max-w-1/3 h-auto mt-[10svh]" src="{{ asset('images/closedown-king.webp') }}"
        width="1024" height="1024" alt="Closedown King Logo">
    <x-menu-button class="bg-custom-grey">
        <a class="grow" href='/auth/redirect'>Login with Discord</a>
    </x-menu-button>

</div>
@endsection