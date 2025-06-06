@if (auth()->check())
<div class="sticky top-0 z-10 h-40 bg-background w-full flex flex-row justify-between items-center">
    <!-- User info -->
     <a href="/" class="pl-4">
        <img class="w-32 h-auto" src="{{ asset('images/closedown-king.png') }}" width="1024" height="1024"
        alt="Closedown King Logo">
     </a>
        
    <div class="relative h-full pr-4" x-data="{ open: false }">

        <div class="flex flex-row h-full justify-between items-center gap-4 p-4">
            <h1 class="text-4xl">{{ auth()->user()->name }}</h1>
            <img class="rounded-full w-24 h-auto" src="{{ auth()->user()->avatar }}">
            <button class="text-6xl" @click="open = !open">▼</button>
        </div>

        <div class="absolute z-10 w-full" x-cloak x-show="open" @click.outside="open = false">
            <ul class="text-3xl p-4 flex flex-col grow">
                @if (auth()->user()->is_admin)
                <a href="/admin" class="bg-custom-green p-4">Admin</a>
                @endif
                <a href="/logout" class="bg-custom-red p-4">Logout</a>
            </ul>
        </div>
        
        </div>

    </div>
</div>
@endif