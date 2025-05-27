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
        $checklists = Checklist::where('is_complete', true)->orderBy('updated_at')->get();
        return view('logs', ["checklists" => $checklists]);
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

        return redirect()->route('checklists.edit', $checklist->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $checklistId)
    {
        $checklist = Checklist::find($checklistId);
        return view('checklist-show', ["checklist" => $checklist]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $checklist = Checklist::find($id);
        return view('checklist-edit', ["checklist" => $checklist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $checklistId)
    {
        //
        $checklist = Checklist::find($checklistId);
        $items = $checklist->items()->get();

        foreach ($items as $item) 
        {
            if ($request->has($item->id))
            {
                $item->is_complete = true;
                $item->save();
            }
        }

        $checklist->is_complete = true;
        $checklist->save();
        return redirect()->route('checklists.show', $checklist->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $checklistId)
    {
        Checklist::destroy($checklistId);
        return redirect()->route('home');
    }
}
