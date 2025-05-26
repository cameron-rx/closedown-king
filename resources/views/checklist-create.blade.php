
@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-evenly items-center w-full h-full">
    <h1 class="text-8xl font-semibold">Choose a Template</h1>
    <div class="h-1/4 w-4/5 flex flex-col items-center">
        @foreach ($templates as $template)
            <div class="w-full flex flex-row justify-center shadow-custom-grey shadow-md rounded-2xl p-5 m-5">
                <h1 class="text-5xl">{{ $template->name }}</h1>
            </div>
        @endforeach
    </div>

    <a href="/" class="flex justify-center items-center h-[8svh] text-center align-middle w-2/3 m-[1.25vh] text-5xl font-semibold bg-custom-grey text-white rounded-3xl">Return to Home</a>
</div>

@endsection