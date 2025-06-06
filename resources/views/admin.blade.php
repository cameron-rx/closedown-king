@extends('layouts.app')

@section('content')
<div class="flex flex-col grow justify-evenly items-center w-full h-full p-4">
    <h1 class="text-7xl font-semibold">Admin</h1>
    <div class="flex flex-col justify-center items-center w-full">
        <a href='/users'
            class="flex justify-center items-center h-[8svh] text-center align-middle w-2/3 m-[1.25vh] text-5xl font-semibold bg-custom-grey text-white rounded-3xl">
            Users</a>
        <a href='/template'
            class="flex justify-center items-center h-[8svh] text-center align-middle w-2/3 m-[1.25svh] text-5xl font-semibold bg-custom-grey text-white rounded-3xl">
            Templates</a>
    </div>

</div>
@endsection
