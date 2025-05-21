@extends('layouts.app')

@section('content')

<div class="flex min-h-full min-w-1/3 max-w-5/6 flex-col items-center m-auto">
    <h1 class="text-3xl">Create New Template</h1>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <form class="flex mt-10 flex-col justify-center" method="post" action="/template">
        @csrf
        <fieldset class="fieldset">
         <legend class="fieldset-legend">Name</legend>
         <input type="text" name="name" class="input" placeholder="Enter name" />
        </fieldset>

        <button class="btn mt-2" type="submit">Save</button>
    </form>
</div>

@endsection
