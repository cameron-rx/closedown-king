<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Template;
use App\Models\Checklist;
use App\Models\ChecklistItem;
use App\Models\ChecklistSection;
use App\Models\TemplateSection;

class ChecklistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $templates = Template::all();
        return view('checklist-create', ["templates" => $templates]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $template_id = $request->input('template_id');
        $template = Template::find($template_id);

        $checklist = Checklist::create([
            'name' => $template->name,
            'user_id' => 1,
            'is_complete' => false
        ]);

        $templateSections = $template->sections()->get();

        foreach ($templateSections as $section) {
            $checklistSection = ChecklistSection::create([
                'name' => $section->name,
                'position' => $section->position,
                'checklist_id' => $checklist->id
            ]);

            $items = $section->items()->get();

            foreach ($items as $item) {
                $checklistItem = ChecklistItem::create([
                    'name' => $item->name,
                    'position' => $item->position,
                    'is_complete' => false,
                    'checklist_section_id' => $checklistSection->id
                ]);
            }
        }

        return redirect()->route('checklists.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
