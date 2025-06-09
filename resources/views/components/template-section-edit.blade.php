<div class="flex flex-col grow gap-8 pl-8 pr-8">
    <div class="flex flex-row justify-between text-7xl p-8">
        <h1 class="text-center">{{ $templateSection->name }}</h1>

        <form method="post"
            action="{{ route('templates.section.destroy', [$templateSection->template_id, $templateSection->id]) }}">
            @csrf
            @method('DELETE')
            <button class="bg-custom-red text-white rounded-3xl font-semibold text-4xl pl-8 pr-8 pb-4 pt-4">X</button>
        </form>
    </div>

    <div class="flex flex-col gap-16" x-data="{ open: false}">
        <ul class="flex flex-col pl-8 pr-8 gap-8">
            @foreach ($templateSection->items as $item)
            <li class="flex flex-row justify-between text-5xl/normal pl-8 gap-4">
                <p>
                    {{ $item->name }}
                <p>
                <form method="post" action="{{ route('section.item.destroy', [$templateSection->id, $item->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button
                        class="bg-custom-red text-white rounded-3xl font-semibold text-4xl pt-4 pb-4 pl-8 pr-8">X</button>
                </form>
            </li>
            @endforeach
        </ul>

        <button @click="open = true"
            class="bg-custom-blue text-white rounded-3xl font-semibold text-4xl pl-8 pr-8 pb-4 pt-4 w-72 self-center">Add
            Item</button>

        <div x-show="open" x-cloak class="fixed inset-0 z-30 flex items-center justify-center text-5xl">
            <div class="absolute inset-0 bg-accent opacity-30">
            </div>
            <div class="relative h-auto w-2/3 rounded-3xl z-40 bg-background opacity-100 flex flex-col justify-around p-20 gap-16 items-center"
                @click.outside="open = false">
                <h1 class="font-semibold">New Item</h1>
                <form class="flex flex-col grow justify-evenly gap-12" method="post"
                    action="{{ route('section.item.store', $templateSection->id )}}">
                    @csrf
                    <input class="p-4 text-4xl" type="text" name="name" class="input" placeholder="Enter item name" />
                    <button
                        class="bg-custom-green text-white rounded-3xl font-semibold text-4xl pl-8 pr-8 pb-4 pt-4 w-72 self-center"
                        type="submit">Create</button>
                </form>
            </div>
        </div>

    </div>

</div>