<div class="flex flex-row justify-between">
    <h1 class="text-2xl text-center">{{ $templateSection->name }}</h1>

    <form method="post" action="{{ route('templates.section.destroy', [$templateSection->template_id, $templateSection->id]) }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm">X</button>
    </form>

</div>