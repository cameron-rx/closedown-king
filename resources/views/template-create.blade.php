@extends('layouts.app')

@section('content')

<div class="flex flex-col gap-8 p-8 justify-around grow">
    <h1 class="text-8xl text-center font-semibold">New Template</h1>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <form class="flex flex-col justify-center grow gap-8 p-8" method="post" action="/template">
        @csrf
        <input type="text" name="name" class="text-4xl p-8" placeholder="Enter name" />

        <button class="inline-flex flex-row justify-center h-28 text-center items-center text-5xl font-semibold bg-custom-green text-white rounded-3xl" type="submit">Save</button>
        <a href="{{ route('templates.list') }}" class="inline-flex flex-row justify-center h-28 text-center items-center text-5xl font-semibold bg-custom-red text-white rounded-3xl">Cancel</a>
    </form>
</div>

@endsection
