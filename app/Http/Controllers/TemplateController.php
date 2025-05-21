<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $templates = Template::all();
        return view('templates', ['templates' => $templates]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('template-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $name = $request->input('name');
        $template = Template::create(['name' => $name]);
        return redirect()->route('templates.list');
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
        Template::destroy((int)$id);
        return redirect()->route('templates.list');
    }
}
