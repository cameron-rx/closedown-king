@extends('layouts.app')

@section('content')

<div class="flex min-h-full min-w-1/3 max-w-5/6 flex-col m-auto items-center justify-between">
    <h1 class="text-3xl text-center">{{$template->name}}</h1>

    <div class="w-1/2">
    @foreach ($template->sections as $section)
        <x-template-section-edit :templateSection=$section />
    @endforeach
    </div>

    <form class="flex mt-10 flex-col justify-center" method="post" action="{{ route('templates.section.store', $template->id) }}">
        @csrf
        <fieldset class="fieldset">
         <legend class="fieldset-legend">Name</legend>
         <input type="text" name="name" class="input" placeholder="Enter section name" />
        </fieldset>

        <button class="btn mt-2" type="submit">Create</button>
    </form>

    <div>
        <a href="{{ route('templates.list') }}"class="btn btn-md">Return to Templates</a>
    <div>

</div>

@endsection
