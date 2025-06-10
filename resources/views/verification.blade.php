@extends('layouts.app')

@section('content')
<img class="max-w-full h-auto mt-[10svh]" src="{{ asset('images/closedown-king.webp') }}" width="1024" height="1024" alt="Closedown King Logo">
<div class="flex flex-col m-20 justify-center items-center gap-4">
    <h1 class="text-5xl">Access Denied!</h1>
    <h1 class="text-5xl text-center">You must be apart of the Revolution Sheffield discord server to use this application.</h1>
</div>
@endsection