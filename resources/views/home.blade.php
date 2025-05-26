@extends('layouts.app')

@section('content')
<img class="max-w-full h-auto mt-[10svh]" src="{{ asset('images/closedown-king.png') }}" alt="Closedown King Logo">
<div class="flex flex-col m-20 justify-center items-center">
    <a href='/checklist' class="flex justify-center items-center h-[8svh] text-center align-middle w-2/3 m-[1.25vh] text-5xl font-semibold bg-custom-grey text-white rounded-3xl">New Checklist</a>
    <a class="flex justify-center items-center h-[8svh] text-center align-middle w-2/3 m-[1.25svh] text-5xl font-semibold bg-custom-grey text-white rounded-3xl">Check Logs</a>
</div>
@endsection