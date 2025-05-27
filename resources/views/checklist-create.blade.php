
@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-evenly items-center w-full h-full">
    <h1 class="text-8xl font-semibold">Choose a Template</h1>
    <div class="h-1/4 w-4/5 flex flex-col items-center">
        @foreach ($templates as $template)
        <form class="w-full" method="post" action="/checklist">
            @csrf
            <input type="hidden" name="template_id" value="{{ $template->id }}">
            <button class="w-full h-[8svh] flex flex-row items-center justify-center bg-custom-blue text-white font-semibold shadow-custom-grey shadow-md rounded-3xl p-5 m-5 text-5xl hover:cursor-pointer" type="submit">{{ $template->name }}</button>
        </form>
        @endforeach
    </div>

    <a href="/"
        class="flex justify-center items-center h-[8svh] text-center align-middle w-2/3 m-[1.25vh] text-5xl font-semibold bg-custom-grey text-white rounded-3xl">Return
        to Home</a>
</div>

@endsection