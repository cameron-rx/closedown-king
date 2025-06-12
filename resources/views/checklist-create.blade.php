
@extends('layouts.app')

@section('content')
<div class="flex flex-col gap-8 p-8 justify-around grow items-center">
    <h1 class="text-8xl text-center font-semibold">Choose a Checklist</h1>
    <div class="flex flex-col grow justify-start w-full">
        @foreach ($templates as $template)
        <form class="flex flex-row " method="post" action="/checklist">
            @csrf
            <input type="hidden" name="template_id" value="{{ $template->id }}">
            <button class="flex flex-row fill items-center justify-center grow bg-custom-blue text-white font-semibold shadow-custom-grey shadow-md rounded-3xl p-5 m-5 text-5xl hover:cursor-pointer" type="submit">{{ $template->name }}</button>
        </form>
        @endforeach
    </div>

    <x-menu-button class="bg-custom-grey">
        <a href="/" class="grow">Return to Home</a>
    </x-menu-button>
</div>

@endsection