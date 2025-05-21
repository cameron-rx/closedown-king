<?php

namespace App\View\Components;

use App\Models\Template;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TemplateListing extends Component
{
    public Template $template;
    /**
     * Create a new component instance.
     */
    public function __construct(Template $template)
    {
        $this->template = $template;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.template-listing');
    }
}
