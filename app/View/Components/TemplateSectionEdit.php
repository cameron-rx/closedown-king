<?php

namespace App\View\Components;

use App\Models\TemplateSection;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TemplateSectionEdit extends Component
{
    public $templateSection;
    /**
     * Create a new component instance.
     */
    public function __construct(TemplateSection $templateSection)
    {
        //
        $this->templateSection = $templateSection;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.template-section-edit');
    }
}
