@extends('layouts.app')

@section('content')
<div class="flex flex-col grow justify-evenly items-center w-full h-full p-4">
    <img class="max-w-full h-auto mt-14" src="{{ asset('images/closedown-king.webp') }}" width="1024" height="1024"
        alt="Closedown King Logo">
    <div class="flex flex-col justify-center items-center w-full">

            <x-menu-button class="bg-custom-grey">
                <a href='/checklist' class="grow">New Checklist</a>
            </x-menu-button>

            <x-menu-button class="bg-custom-grey">
                <a class="grow" href='/logs'>Check Logs</a>
            </x-menu-button>

    </div>

</div>
@endsection