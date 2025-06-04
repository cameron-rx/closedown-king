@if (auth()->check())
<div class="h-40 bg-custom-blue w-full flex flex-row justify-between items-center">
    <!-- User info -->
    <img class="w-32 h-auto pl-4" src="{{ asset('images/closedown-king.png') }}" width="1024" height="1024"
        alt="Closedown King Logo">

        
    <div class="relative h-full pr-4" x-data="{ open: false }">

        <div class="flex flex-row h-full justify-between items-center gap-4 p-4">
            <h1 class="text-4xl">{{ auth()->user()->name }}</h1>
            <img class="rounded-full w-24 h-auto" src="{{ auth()->user()->avatar }}">
            <button class="text-6xl" @click="open = !open">▼</button>
        </div>

        <div class="absolute z-10 bg-custom-red w-full" x-show="open" @click.outside="open = false">
            <ul class="text-3xl p-4 flex flex-col grow">
                <a href="/logout">Logout</a>
            </ul>
        </div>
        
        </div>

    </div>
</div>
@endif