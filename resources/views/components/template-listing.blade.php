<div class="flex flex-row justify-between">
    <h1 class="text-xl hover:cursor-pointer ">{{$template->name}}</h1>
    <div class="flex flex-row">
        <form method="post">
            @csrf
            @method('GET')
            <button class="btn">Edit</button>
        </form>

        <form method="post" action="{{ route('templates.destroy', $template->id) }}">
            @csrf
            @method('DELETE')
            <button class="btn">Delete</button>
        </form>

    </div>
</div>