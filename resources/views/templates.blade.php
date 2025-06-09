@extends('layouts.app')

@section('content')
<div class="flex flex-col gap-16 p-8 justify-around grow">
    <h1 class="text-8xl text-center font-semibold">Templates</h1>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
    <div class="flex flex-col grow gap-8 justify-start">
        @foreach ($templates as $template)
        <div class="flex flex-row justify-around font-semibold">
            <h1 class="text-5xl">{{$template->name}}</h1>
            <div class="flex flex-row text-4xl gap-8 align-middle">
                <a href="{{ route('templates.edit', $template->id) }}" class="bg-custom-blue p-4 rounded-3xl hover:cursor-pointer">Edit</a>
                <form method="post" action="{{ route('templates.destroy', $template->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="bg-custom-red p-4 rounded-3xl hover:cursor-pointer">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    <div class="flex flex-col gap-12 justif-">
    <a href="{{ route('templates.create') }}" class="inline-flex flex-row justify-center h-28 text-center items-center text-5xl font-semibold bg-custom-green text-white rounded-3xl">New Template</a>
    <a href="/admin" class="inline-flex flex-row justify-center h-28 text-center items-center text-5xl font-semibold bg-custom-grey text-white rounded-3xl">Return to Admin</a>
    </div>
</div>
@endsection
