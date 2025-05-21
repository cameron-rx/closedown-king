@extends('layouts.app')

@section('content')
<div class="flex min-h-full min-w-1/3 max-w-5/6 flex-col items-center justify-between m-auto">
    <h1 class="text-center text-3xl">Templates</h1>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
    <div class="mt-5 mb-5 max-w-5/6 min-w-2/6">
        @foreach ($templates as $template)
        <x-template-listing :template=$template />
        @endforeach
    </div>

    <a href="{{ route('templates.create') }}" class="btn m-auto btn-md">New Template</a>
</div>
@endsection
