@extends('layouts.app')

@section('content')
<div class="flex flex-col grow justify-evenly items-center w-full h-full p-4">
    <img class="max-w-full h-auto mt-14" src="{{ asset('images/closedown-king.png') }}" width="1024" height="1024"
        alt="Closedown King Logo">
    <div class="flex flex-col justify-center items-center w-full">
        <a href='/checklist'
            class="flex justify-center items-center h-[8svh] text-center align-middle w-2/3 m-[1.25vh] text-5xl font-semibold bg-custom-grey text-white rounded-3xl">New
            Checklist</a>
        <a href='/logs'
            class="flex justify-center items-center h-[8svh] text-center align-middle w-2/3 m-[1.25svh] text-5xl font-semibold bg-custom-grey text-white rounded-3xl">Check
            Logs</a>
    </div>

</div>
@endsection