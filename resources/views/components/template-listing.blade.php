<div class="flex flex-row justify-between">
    <h1 class="text-xl hover:cursor-pointer ">{{$template->name}}</h1>
    <div class="flex flex-row">
        <a class="btn btn-md" href="{{ route('templates.edit', $template->id) }}">Edit</a>
        <form method="post" action="{{ route('templates.destroy', $template->id) }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-md">Delete</button>
        </form>

    </div>
</div>