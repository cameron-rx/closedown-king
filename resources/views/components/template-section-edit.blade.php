<div>
    <div class="flex flex-row justify-between">
    
        <h1 class="text-2xl text-center">{{ $templateSection->name }}</h1>

        <form method="post" action="{{ route('templates.section.destroy', [$templateSection->template_id, $templateSection->id]) }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm">X</button>
        </form>
    
    </div>

    <div class = "flex flex-col ml-5 mr-10 mt-3">
        <ul>
        @foreach ($templateSection->items as $item)
            <li class="flex flex-row justify-between items-center mb-1">
                <p>
                {{ $item->name }}
                <p>
                <form method="post" action="{{ route('section.item.destroy', [$templateSection->id, $item->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm">X</button>
                </form>
            </li> 
        @endforeach
        <ul>

    <form class="" method="post" action="{{ route('section.item.store', $templateSection->id) }}">
        @csrf
        <fieldset class="fieldset">
         <legend class="fieldset-legend"></legend>
         <input type="text" name="name" class="input" placeholder="Enter item name" />
        </fieldset>

        <button class="btn mt-2" type="submit">Add Item</button>
    </form>

    </div>
</div>