@extends('layouts.app')

@section('content')

<div class="flex flex-col grow justify-between gap-4 p-8">

        <h1 class="text-center font-semibold text-7xl pt-8">{{ $checklist->name}}</h1>
        <h1 class="text-center text-6xl">Completed at:  {{ $checklist->updated_at }}</h1>
        <div class="flex flex-row text-center justify-center items-center gap-4">
            <h1 class="text-6xl">By: <strong>{{$checklist->user->name}}</strong></h1>
            <img class="rounded-full w-20 h-auto" src="{{ $checklist->user->avatar }}">
        </div>

        <div class="flex flex-col grow gap-8 pl-8 pr-8">
                @foreach ($checklist->sections()->get() as $section)
                <h2 class="text-7xl font-semibold text-center p-8">{{$section->name}}</h2>
                <div class="flex flex-col justify-evenly gap-8">
                    @foreach ($section->items()->get() as $item)
                    <div class="flex flex-row items-center justify-between gap-4">
                        <input type="checkbox" name="{{ $item->id }}" id="{{ $item->id }}"
                            class="checked:text-custom-green not-checked:bg-custom-red not-checked:text-white w-16 h-16 peer "
                            @if ($item->is_complete) checked 
                            @endif 
                            disabled />
                        <label for="{{ $item->id }}"
                            class="text-5xl peer-checked:line-through not-peer-checked:font-semibold peer-checked:opacity-40 order-first">{{$item->name}}</label>
                    </div>
                    @endforeach

                </div>
                @endforeach

        </div>



    <div class="w-full flex flex-col justify-center items-center">
        <a
            class="flex justify-center items-center h-[8svh] text-center align-middle w-2/3 m-[1svh] text-5xl font-semibold bg-custom-grey text-white rounded-3xl"
            href="/logs">Return to Logs</a>
    </div>
</div>

@endsection
