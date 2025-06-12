@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-around items-center grow p-8">
    <div class="flex flex-col justify-start items-center gap-8 grow">
    <h1 class="text-8xl font-semibold">Logs</h1>
    
    <table class="table-auto  border-separate border-spacing-x-8 border-spacing-y-16 ">
        <thead class="text-4xl text-left">
            <tr>
                <th>Name</th>
                <th>User</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody class="text-4xl">
            @foreach ($checklists as $checklist)
            <tr>
                <td>{{ $checklist->name }}</td>
                <td>{{ $checklist->user->name }}</td>
                <td>{{ $checklist->updated_at->diffForHumans() }}</td>
                <td><a href="{{ route('checklists.show', $checklist->id) }}" class="bg-custom-blue rounded-3xl ">Show</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    
    </table>

    </div>

    <x-menu-button class="bg-custom-grey">
        <a href="/" class="grow">Return to Home</a>
    </x-menu-button>
</div>

@endsection