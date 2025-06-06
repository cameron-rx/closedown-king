@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-around items-center grow p-8">
    <h1 class="text-8xl font-semibold">Users</h1>

    <div class="grow flex flex-col justify-between p-8">
        <table class="table-auto text-center border-separate border-spacing-x-8 border-spacing-y-16 ">
            <thead class="text-4xl">
                <tr>
                    <th>Name</th>
                    <th>Whitelised</th>
                    <th>Admin</th>
                </tr>
            </thead>
            <tbody class="text-4xl">
                @foreach ($users as $user)
                <tr>
                    <form  method="post" action="{{ route('user.update', $user->id)}}">
                    @csrf
                    @method('PATCH')
                        <td>{{ $user->name }}</td>
                        <td>
                            <input type="checkbox" name="{{ $user->id }}-whitelisted" id="{{ $user->id }}-whitelisted"
                                class="checked:text-custom-green w-16 h-16" @if ($user->is_whitelisted) checked
                            @endif
                            />
                        </td>
                        <td>
                            <input type="checkbox" name="{{ $user->id }}-admin" id="{{ $user->id }}-admin"
                                class="checked:text-custom-green w-16 h-16" @if ($user->is_admin) checked
                            @endif
                            />
                        </td>
                        <td>
                            <button
                                class="flex p-4 justify-center items-center  text-center align-middle text-3xl font-semibold bg-custom-grey text-white rounded-3xl"
                                type="submit">Save</button>
                        </td>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <a href="/admin"
        class="flex justify-center items-center h-[8svh] text-center align-middle w-2/3 text-5xl font-semibold bg-custom-grey text-white rounded-3xl">Return
        to Admin</a>
</div>

@endsection