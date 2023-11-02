<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FieldOfStudy;

class FieldOfStudyController extends Controller
{
    public function index()
    {
        $fieldOfStudies = FieldOfStudy::all();
        return view('admin.field_of_studies.index', compact('fieldOfStudies'));
    }

    public function create()
    {
        return view('admin.field_of_studies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:field_of_studies',
        ]);

        FieldOfStudy::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('admin.field_of_studies.index')->with('success', 'Field of Study created successfully.');
    }

    public function show($id)
    {
        $fieldOfStudy = FieldOfStudy::findOrFail($id);
        return view('admin.field_of_studies.show', compact('fieldOfStudy'));
    }

    public function edit($id)
    {
        $fieldOfStudy = FieldOfStudy::findOrFail($id);
        return view('admin.field_of_studies.edit', compact('fieldOfStudy'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|unique:field_of_studies,name,' . $id,
        ]);

        $fieldOfStudy = FieldOfStudy::findOrFail($id);
        $fieldOfStudy->update([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('admin.field_of_studies.index')->with('success', 'Field of Study updated successfully.');
    }

    public function destroy($id)
    {
        $fieldOfStudy = FieldOfStudy::findOrFail($id);
        $fieldOfStudy->delete();

        return redirect()->route('admin.field_of_studies.index')->with('success', 'Field of Study deleted successfully.');
    }
}
