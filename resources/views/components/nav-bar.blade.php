@if (auth()->check())
<div class="sticky top-0 z-10 h-40 lg:h-20 bg-background w-full flex flex-row justify-between items-center">
    <!-- User info -->
     <a href="/" class="pl-4">
        <img class="w-32 lg:w-24 p-4 h-auto" src="{{ asset('images/closedown-king.webp') }}" width="1024" height="1024"
        alt="Closedown King Logo">
     </a>
        
    <div class="relative h-full pr-4" x-data="{ open: false }">

        <div class="flex flex-row h-full justify-between items-center gap-4 p-4">
            <h1 class="text-4xl lg:text-2xl">{{ auth()->user()->name }}</h1>
            <img class="rounded-full w-24 lg:w-16 h-auto" src="{{ auth()->user()->avatar }}">
            <button class="text-6xl lg:text-1xl" @click="open = !open">▼</button>
        </div>

        <div class="absolute z-10 w-full" x-cloak x-show="open" @click.outside="open = false">
            <ul class="text-4xl lg:text-2xl p-4 flex flex-col grow">
                @if (auth()->user()->is_admin)
                <a href="/admin" class="bg-custom-green p-8 lg:p-4">Admin</a>
                @endif
                <a href="/logout" class="bg-custom-red p-8 lg:p-4 rounded-b-3xl">Logout</a>
            </ul>
        </div>
        
        </div>

    </div>
</div>
@endif