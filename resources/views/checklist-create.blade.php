
@extends('layouts.app')

@section('content')
<div class="flex flex-col gap-8 p-8 justify-around grow">
    <h1 class="text-8xl text-center font-semibold">Choose a Checklist</h1>
    <div class="flex flex-col grow justify-start">
        @foreach ($templates as $template)
        <form class="flex flex-row" method="post" action="/checklist">
            @csrf
            <input type="hidden" name="template_id" value="{{ $template->id }}">
            <button class="flex flex-row items-center justify-center grow bg-custom-blue text-white font-semibold shadow-custom-grey shadow-md rounded-3xl p-5 m-5 text-5xl hover:cursor-pointer" type="submit">{{ $template->name }}</button>
        </form>
        @endforeach
    </div>

    <a href="/"
        class="inline-flex flex-row justify-center h-28 text-center items-center -middle m-12 text-5xl font-semibold bg-custom-grey text-white rounded-3xl">Return
        to Home</a>
</div>

@endsection