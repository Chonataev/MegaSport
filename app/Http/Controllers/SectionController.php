<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Components\ImagePathController;
use App\Http\Requests\StoreSectionRequest;
use App\Http\Requests\UpdateSectionRequest;
use App\Models\Section;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::all();
        return view('sections.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSectionRequest $request)
    {
        $section = new Section();
        $section->title = $request->input('title');
        $section->image = ImagePathController::getPath($request);

        $section->price = $request->input('price');
        $section->trainig_time = $request->input('trainig_time');
        $section->description = $request->input('description');

        $section->save();

        return redirect()->route('sections.index')->with('success', 'Секция создона!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        return view('sections.show', compact('section'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        return view('sections.edit', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($sectionId, UpdateSectionRequest $request)
    {
        $section = Section::find($sectionId);
        $section->title = $request->title;

        $section->image = ImagePathController::getPath($request);

        $section->price = $request->input('price');
        $section->trainig_time = $request->input('trainig_time');
        $section->description = $request->input('description');

        $section->save();

        return redirect()->route('sections.index')->with('success', 'Запись успешна обнавлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        $section->delete();
        return redirect()->route('sections.index')->with('success', 'Запись успешна удалена!');
    }
}
