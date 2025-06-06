@extends('layouts.app')

@section('content')

<div class="flex flex-col grow justify-around p-8">
        <h1 class="font-bold text-center text-7xl">{{ $checklist->name}}</h1>

        <form class="flex flex-col justify-between grow gap-24" method="post" action="{{ route('checklists.update', $checklist->id) }}">
            @csrf
            @method('PATCH')

                @foreach ($checklist->sections()->get() as $section)
                <div class="flex flex-col grow gap-8 pl-8 pr-8">
                    <h2 class="text-7xl text-center font-semibold p-8">{{$section->name}}</h2>
                    @foreach ($section->items()->get() as $item)
                    <div class="flex flex-row items-center justify-between gap-4">
                        <input type="checkbox" name="{{ $item->id }}" id="{{ $item->id }}"
                            class="text-custom-green w-16 h-16 peer" />
                        <label for="{{ $item->id }}"
                            class="text-5xl peer-checked:line-through peer-checked:opacity-40 order-first">{{$item->name}}</label>
                    </div>
                    @endforeach
                </div>
                @endforeach

            <button
                class="flex justify-center items-center pt-12 pb-12 ml-40 mr-40 text-center align-middle text-5xl font-semibold bg-custom-grey text-white rounded-3xl"
                type="submit">Submit</button>
        </form>


        <form class="w-full flex flex-col justify-center items-center" method="post" action="{{ route('checklists.destroy', $checklist->id) }}">
            @csrf
            @method('DELETE')
            <button
                class="flex justify-center items-center h-[8svh] text-center align-middle w-2/3 m-[1svh] text-5xl font-semibold bg-custom-red text-white rounded-3xl"
                type="submit">Cancel</button>
        </form>
</div>

@endsection