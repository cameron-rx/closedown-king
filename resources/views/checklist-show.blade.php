@extends('layouts.app')

@section('content')

<div class="flex flex-col justify-between items-center w-full h-full">
    <div class="flex flex-col items-center justify-center w-full ">
        <h1 class="font-semibold text-7xl">{{ $checklist->name}}</h1>
        <h1 class="text-6xl">Completed at:  {{ $checklist->updated_at }}</h1>
            <div class="w-2/3">
                @foreach ($checklist->sections()->get() as $section)
                <h2 class="text-7xl text-center mt-4 mb-4">{{$section->name}}</h2>
                <div class="flex flex-col justify-evenly">
                    @foreach ($section->items()->get() as $item)
                    <div class="flex flex-row items-center justify-between mb-8">
                        <input type="checkbox" name="{{ $item->id }}" id="{{ $item->id }}"
                            class="text-custom-green w-14 h-14 peer"
                            @if ($item->is_complete) checked 
                            @endif 
                            disabled />
                        <label for="{{ $item->id }}"
                            class="text-5xl peer-checked:line-through peer-checked:opacity-40 order-first">{{$item->name}}</label>
                    </div>
                    @endforeach

                </div>
                @endforeach
            </div>

    </div>


    <div class="w-full flex flex-col justify-center items-center">
        <a
            class="flex justify-center items-center h-[8svh] text-center align-middle w-2/3 m-[1svh] text-5xl font-semibold bg-custom-grey text-white rounded-3xl"
            href="/logs">Return to Logs</a>
    </div>
</div>

@endsection
