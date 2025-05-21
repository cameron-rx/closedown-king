<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TemplateSection;
use App\Models\Template;

class TemplateSectionController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $templateId)
    {
        // Create a section with the template id
        // Find out how many sections the current template id has 
        $name = $request->input('name');
        $count = TemplateSection::where('template_id', (int)$templateId)->count();

        $templateSection = TemplateSection::create([
            'name' => $name,
            'template_id' => (int)$templateId,
            'position' => $count + 1
        ]);

        return redirect()->route('templates.edit', $templateId);
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
    public function destroy(string $templateId, string $sectionId)
    {
        //
        TemplateSection::destroy((int)$sectionId);
        return redirect()->route('templates.edit', $templateId);
    }
}
