@extends('layouts.app')

@section('content')

<div class="flex flex-col grow justify-around p-8 gap-16">
    <h1 class="font-bold text-center text-7xl">{{$template->name}}</h1>

    <div class="flex flex-col justify-between  gap-16">
    @foreach ($template->sections as $section)
        <x-template-section-edit :templateSection=$section />
    @endforeach
    </div>

    <div class="flex flex-col gap-16" x-data="{ open: false}">
        <button @click="open = true"
            class="bg-custom-blue text-white rounded-3xl font-semibold text-4xl pl-8 pr-8 pb-4 pt-4 w-72 self-center">Add
            Section</button>
    
        <div x-show="open" x-cloak class="fixed inset-0 z-30 flex items-center justify-center text-5xl">
            <div class="absolute inset-0 bg-accent opacity-30">
            </div>
            <div class="relative h-auto w-2/3 rounded-3xl z-40 bg-background opacity-100 flex flex-col justify-around p-20 gap-16 items-center"
                @click.outside="open = false">
                <h1 class="font-semibold">New Section</h1>
                <form class="flex flex-col grow justify-evenly gap-12" method="post"
                    action="{{ route('templates.section.store', $template->id )}}">
                    @csrf
                    <input class="p-4 text-4xl" type="text" name="name" class="input" placeholder="Enter item name" />
                    <button
                        class="bg-custom-green text-white rounded-3xl font-semibold text-4xl pl-8 pr-8 pb-4 pt-4 w-72 self-center"
                        type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>


    <a href="{{ route('templates.list') }}" class="inline-flex flex-row justify-center  m-8 h-28 text-center items-center text-5xl font-semibold bg-custom-grey text-white rounded-3xl">Return to Templates</a>

</div>

@endsection
